// ==================================================
// Load Modules
// ==================================================

var gulp       = require('gulp'),
    livereload = require('gulp-livereload'),
    gnotify    = require('gulp-notify');

// ==================================================
// Load Configurations
// ==================================================

var paths         = require('../configs/paths'),
    notifications = require('../configs/notifications'),
    project       = require('../project')();

// ==================================================
// Tasks
// ==================================================

gulp.task('live', ['watch'], function() {
    gulp.watch([
       paths.public.base + '**/*.{html,php}',
       paths.public.styles + '**/*.css',
       paths.public.scripts + '**/*.js'
    ], function(file) {
        var filename = file.path.split("/").pop();

        livereload.changed(filename);

        if (notifications.enabled && !project.hasError) {
            gulp.src('.').pipe(gnotify({
                sound: notifications.sound,
                "icon": './node_modules/gulp-notify/assets/gulp.png',
                message: filename + ' reloaded'
            }));
        }
    });

    livereload.listen();
});
