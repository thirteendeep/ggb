'use strict';

// ==================================================
// Styles Configuration
// ==================================================

module.exports = () => {
    var paths = require('../configs/paths');

    var settings = {
        maps: true,
        autoprefixer: ['last 4 versions'],
        lint: true,
        lintIgnore: [
            '!' + paths.src.styles + 'variables.scss',
            '!' + paths.src.styles + 'fonts/_googlefonts.scss',
            '!' + paths.src.styles + 'trunk/gui.scss',
            '!' + paths.src.styles + 'leaves/layouts/woocommerce/*',
            '!' + paths.src.styles + 'leaves/layouts/gravity-form/*',
            '!' + paths.src.styles + 'leaves/components/_buttons.scss*'
        ],
        lintFiles: [
            paths.src.styles + 'main.scss',
            paths.src.styles + 'trunk/**/*.scss',
            paths.src.styles + 'leaves/**/*.scss'
        ]
    };

    return settings;
};
