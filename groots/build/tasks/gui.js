// ==================================================
// Load Modules
// ==================================================

var gulp         = require('gulp'),
    fs           = require('fs'),
    sass         = require('gulp-sass'),
    postcss      = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    sassLint     = require('gulp-sass-lint'),
    cssnano      = require('cssnano'),
    flexibility  = require('postcss-flexibility'),
    gutil        = require('gulp-util'),
    changed      = require('gulp-changed'),
    gnotify      = require('gulp-notify');

// ==================================================
// Load Configurations
// ==================================================

var paths         = require('../configs/paths'),
    project       = require('../project')(),
    styles        = require('../configs/styles')(),
    gui           = require('../configs/gui')();

gui.lintFiles = gui.lintFiles.concat(gui.lintIgnore);

// ==================================================
// Tasks
// ==================================================

gulp.task('gui', function() {
    return gulp.src(paths.src.gui + '**/*.*')
        .pipe(changed(paths.public.gui))
        .pipe(gulp.dest(paths.public.gui));
});

gulp.task('gui:build', ['gui:styles'], function() {
    return gulp.src(paths.src.gui + '**/*.*')
        .pipe(gulp.dest(paths.public.gui));
});

gulp.task('gui:htaccess', function() {
    fs.stat(paths.public.base + '.htaccess', function(err, stat) {
        // Checking if file exist before applying redirection
        if (err !== null) {
            return gulp.src(paths.src.base + '.htaccess')
                .pipe(gulp.dest(paths.public.base));
        } else {
            console.log('.htaccess exists');
        }
    });
});

gulp.task('gui:styles', styles.lint && !project.isProd ? ['gui:lint'] : '', function() {
    return gulp.src(paths.src.styles + 'trunk/gui.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(postcss([
            autoprefixer({
                browsers: styles.autoprefixer
            }),
            flexibility
        ]))
        .pipe(gulp.dest(paths.public.gui));
});

gulp.task('gui:lint', function () {
    return gulp.src(gui.lintFiles)
        .pipe(sassLint())
        .pipe(sassLint.format());
        //.pipe(sassLint.failOnError());
});
