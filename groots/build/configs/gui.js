'use strict';

// ==================================================
// Styles Configuration
// ==================================================

module.exports = () => {
    var paths = require('../configs/paths');

    var settings = {
        lintIgnore   :  [],
        lintFiles    :  [
            //paths.src.styles + 'trunk/gui.scss'
        ]
    };

    return settings;
};
