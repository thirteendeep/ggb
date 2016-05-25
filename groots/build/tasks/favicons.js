// ==================================================
// Load Modules
// ==================================================

var gulp        = require('gulp'),
    realFavicon = require('gulp-real-favicon'),
    fs          = require('fs'),
    gnotify     = require('gulp-notify');

// ==================================================
// Load Configurations
// ==================================================

var paths         = require('../configs/paths'),
    project       = require('../project')(),
    favicons      = require('../configs/favicons')(),
    notifications = require('../configs/notifications');

// ==================================================
// Tasks
// ==================================================

gulp.task('favicons', function() {
    try {
        fs.accessSync(paths.src.base + 'favicon/favicon.png', fs.F_OK);
    } catch(e) {
        project.hasError = true;
    }

    if (project.hasError && notifications.enabled) {
        gulp.src('.').pipe(gnotify({
            title: 'Error running Gulp',
            sound: notifications.mute ? false : notifications.soundEr,
            icon: './node_modules/gulp-notify/assets/gulp-error.png',
            message: 'Favicon.png is required'
        }));
    }

    realFavicon.generateFavicon({
        masterPicture: favicons.picture,
        dest: favicons.dest,
        iconsPath: '/',
        design: favicons.design,
        settings: {
			scalingAlgorithm: 'Mitchell',
			errorOnImageTooSmall: true
		},
        markupFile: favicons.data
    });
});

gulp.task('favicons:update', function() {
	var currentVersion = JSON.parse(fs.readFileSync(favicons.data)).version;
	realFavicon.checkForUpdates(currentVersion, function(err) {
		if (err) {
			throw err;
		}
	});
});
