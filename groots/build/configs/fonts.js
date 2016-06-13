'use strict';

// ==================================================
// Styles Configuration
// ==================================================

module.exports = () => {
    var paths = require('../configs/paths');

    var settings = {
        extensions: 'eot,woff,ttf,woff2',
        googleOpts: {
            fontsDir: '../fonts/', // (Note: the path is relative to gulp.dest)
            cssDir: '../../../' + paths.src.base + 'styles/fonts/', // (Note: the path is relative to gulp.dest)
            cssFilename: '_googlefonts.scss'
        }
    };

    return settings;
};
