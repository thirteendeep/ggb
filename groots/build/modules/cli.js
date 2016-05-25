'use strict';

// ==================================================
// Command-line Interface Module
// ==================================================

module.exports = () => {
    var gutil = require('gulp-util');

    var cmds = {
            cmd: '',
            flags: [],
            subcmd: [],
            isProd: false
        };

    if (process.env.npm_config_argv !== undefined) {
        JSON.parse(process.env.npm_config_argv).original.forEach((item, index) => {
            if (index === 0) {
                cmds.cmd = item;
            } else if (item.indexOf('--') === 0 && index >= 1) {
                cmds.flags.push(item.substring(2));
            } else {
                cmds.subcmd.push(item);
            }
        });
    } else {
        Object.keys(gutil.env).forEach(function(key) {
            if (gutil.env[key] === true) cmds.flags.push(key);
        });
    }

    cmds.flags.forEach(function(item) {
        if (item == 'prod') cmds.isProd = true;
    });

    return cmds;
};
