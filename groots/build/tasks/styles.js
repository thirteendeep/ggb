// ==================================================
// Load Modules
// ==================================================

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    postcss      = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    sassLint     = require('gulp-sass-lint'),
    cssnano      = require('cssnano'),
    flexibility  = require('postcss-flexibility'),
    sourcemaps   = require('gulp-sourcemaps'),
    gutil        = require('gulp-util'),
    gnotify      = require('gulp-notify'),
    rename       = require('gulp-rename'),
    cache        = require('gulp-cached');
    tap          = require('gulp-tap');

// ==================================================
// Load Configurations
// ==================================================

var paths         = require('../configs/paths'),
    project       = require('../project')(),
    styles        = require('../configs/styles')(),
    notifications = require('../configs/notifications');

styles.lintFiles = styles.lintFiles.concat(styles.lintIgnore);

// ==================================================
// Tasks
// ==================================================

gulp.task('styles', styles.lint && !project.isProd ? ['styles:lint'] : '', function() {
    return gulp.src(paths.src.styles + 'main.scss')
        .pipe(styles.maps && !project.isProd ? sourcemaps.init() : gutil.noop())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(project.isProd ?
            // if build
            postcss([
                autoprefixer({
                    browsers: styles.autoprefixer
                }),
                cssnano,
                flexibility
            ]):
            // if dev
            postcss([
                autoprefixer({
                    browsers: styles.autoprefixer
                }),
                flexibility
            ])
        )
        .pipe(rename(project.name + '.css'))
        .pipe(styles.maps && !project.isProd ? sourcemaps.write('./') : gutil.noop())
        .pipe(gulp.dest(paths.public.styles));
});

gulp.task('styles:lint', function () {
    var files = [];
    var nbErrors = 0;
    var nbWarnings = 0;
    var msgCss = '';

    return gulp.src(styles.lintFiles)
        .pipe(cache('sasslint'))
        .pipe(sassLint())
        .pipe(sassLint.format())
        .pipe(tap(function(file, t) {
            // count errors/warnings and get relative path of files failing linting

            nbErrors += file.sassLint[0].errorCount;
            nbWarnings += file.sassLint[0].warningCount;

            if (nbErrors > 0 || nbWarnings > 0) {
                project.hasError = true;
            }

            if (file.sassLint[0].messages.length) {
                files.push(file.sassLint[0].filePath.split('/').pop());
            }
        }))
        .pipe(notifications.enabled ? gnotify({
            title: 'Error running Gulp',
            sound: notifications.mute ? false : notifications.soundEr,
            icon: './node_modules/gulp-notify/assets/gulp-error.png',
            onLast: true,
            message: function(file) {
                // construct message and send it if has errors
                // this function will be executed only on last file
                if (project.hasError) {
                    msgCss = files.join(', ');

                    if (files.length > 1) {
                        msgCss = files.length + ' files (' + msgCss + ')';
                    }

                    msgCss += ' ' + notifications.msgSassLint + ' ';

                    if (nbErrors > 0) {
                        msgCss += nbErrors + ' error';

                        if ( nbErrors > 1 ) msgCss += 's';

                        if (nbWarnings > 0) {
                            msgCss += ' and ' + nbWarnings + ' warning';

                            if ( nbWarnings > 1 ) msgCss += 's';
                        }
                    } else {
                        msgCss += nbWarnings + ' warning';

                        if (nbWarnings > 1) msgCss += 's';
                    }

                    return msgCss;
                }
            }
        }) : gutil.noop())
        .pipe(sassLint.failOnError());
});
