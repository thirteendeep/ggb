'use strict';

require('es6-promise').Promise; // compatibility with older node versions

var gulp        = require('gulp'),
    gnotify     = require('gulp-notify'),
    runSequence = require('run-sequence'),
    fs          = require('fs');

// ==================================================
// Configurations
// ==================================================

var base = './groots/build/';

var paths         = require(base + 'configs/paths'),
    project       = require(base + 'project')(),
    notifications = require(base + 'configs/notifications');

// ==================================================
// Individual Tasks
// ==================================================

require(base + 'tasks/images');
require(base + 'tasks/styles');
require(base + 'tasks/scripts');
require(base + 'tasks/fonts');
require(base + 'tasks/favicons');
require(base + 'tasks/gui');

require(base + 'tasks/watch');
require(base + 'tasks/live');

// ==================================================
// Bundle Tasks
// ==================================================

var tasks = [];

// Default tasks
tasks.default = [];
tasks.default.push('images');
tasks.default.push('styles');
tasks.default.push('scripts');
tasks.default.push('fonts');
if (project.gui) tasks.default.push('gui');

// Build tasks
tasks.temp = [];
tasks.temp.push('default');

if (project.fontAwesome) tasks.temp.push('fonts:awesome');

fs.access(paths.src.base + 'favicon/favicon.png', fs.F_OK, function(err) {
    if (err === null) tasks.temp.push('favicons');
});

try {
    fs.accessSync(paths.src.base + 'favicon/favicon.png', fs.F_OK);
    tasks.temp.push('favicons');
} catch(e) {
    // Favicons task will throw error if no source png
}

if (project.gui) tasks.temp.push('gui:build');

if (project.fontGoogle) {
    tasks.build = function() {
        runSequence('fonts:google', tasks.temp)
    };
} else {
    tasks.build = tasks.temp;
}

// Register tasks
gulp.task('default', tasks.default, function() {
    if (notifications.enabled && !project.isProd && !project.hasError) {
        gulp.src('.').pipe(gnotify({
            sound: notifications.sound,
            'icon': './node_modules/gulp-notify/assets/gulp.png',
            message: notifications.msgDev
        }));
    }
});

gulp.task('initial', tasks.build);
gulp.task('build', tasks.build);
