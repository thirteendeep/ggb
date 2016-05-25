'use strict';

// ==================================================
// Styles Configuration
// ==================================================

module.exports = () => {
    var paths = require('../configs/paths');

    var settings = {
        maps: true,
        autoprefixer: ['last 2 versions'],
        lint: true,
        lintIgnore: [
            '!' + paths.src.styles + 'variables.scss',
            '!' + paths.src.styles + 'fonts/_googlefonts.scss',
            '!' + paths.src.styles + 'trunk/gui.scss'
        ],
        lintFiles: [
            paths.src.styles + 'main.scss',
            paths.src.styles + 'trunk/**/*.scss',
            paths.src.styles + 'leaves/**/*.scss'
        ]
    };

    return settings;
};
