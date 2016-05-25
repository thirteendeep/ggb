'use strict';

// ==================================================
// Project Configuration
// ==================================================

module.exports = () => {
    var paths = require('./configs/paths'),
        gutil = require('gulp-util'),
        cli   = require('./modules/cli')();

    var settings = {
        name: 'groots',
        scripts: [
            paths.src.base + 'scripts/plugins/gr-form.js',
            paths.src.base + 'scripts/plugins/gr-equalizer.js',
            paths.src.base + 'scripts/plugins/gr-inline-svg.js',
            paths.src.base + 'scripts/plugins/gr-nav.js',
            paths.src.base + 'scripts/plugins/gr-snippets.js',
            paths.src.base + 'scripts/plugins/gr-objectfit.js'
        ],
        gui: true,
        babel: false,
        fontAwesome: true,
        fontGoogle: true,
        faviconBG: '#ffffff',
        theme: '#1982c4', // used for safari tab icon and android menu bar color
        hasError: false, // do not modify
        isProd: cli.isProd // do not modify
    };

    return settings;
};
