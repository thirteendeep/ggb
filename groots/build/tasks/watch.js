// ==================================================
// Load Modules
// ==================================================

var gulp       = require('gulp'),
    gnotify    = require('gulp-notify');

// ==================================================
// Load Configurations
// ==================================================

var paths         = require('../configs/paths'),
    project       = require('../project')(),
    notifications = require('../configs/notifications');

// ==================================================
// Tasks
// ==================================================

gulp.task('watch', function() {

    // Images
    gulp.watch('**/*', {cwd: paths.src.images}, ['images', function() {
        if (notifications.enabled) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                icon: './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgImg
            }));
        }
    }]);

    // Styles
    gulp.watch([
            paths.src.styles + 'leaves/**/*.scss',
            paths.src.styles + 'fonts/**/*.scss']
        , ['styles', function() {
        if (notifications.enabled && !project.hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                icon: './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgSass
            }));
        }

        project.hasError = false;  // reinit variable before next watch task
    }]);

    // Scripts
    gulp.watch(paths.src.scripts + '**/*.js', ['scripts', function() {
        if (notifications.enabled && !project.hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                icon: './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgJs
            }));
        }

        project.hasError = false;
    }]);

    // Fonts
    gulp.watch('**/*', {cwd: paths.src.fonts}, ['fonts', function() {
        if (notifications.enabled) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                icon: './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgFonts
            }));
        }
    }]);

    // Gui
    gulp.watch('**/*', {cwd: paths.src.gui}, ['gui', function() {
        if (notifications.enabled) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgGui
            }));
        }
    }]);

    gulp.watch(paths.src.styles + 'trunk/gui.scss', ['gui:styles', function() {
        if (notifications.enabled && !project.hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: notifications.msgGuiSass
            }));
        }

        project.hasError = false;
    }]);
});
