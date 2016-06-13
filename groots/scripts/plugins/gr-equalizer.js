/*!
 * jQuery Equalizer plugin
 * Author: Globalia
 * Licensed under the WTFPL license
 */

( function( $, window, document ) {

    "use strict";

    var pluginName = "equalizer",
        defaults = {
            watch: 640,         // starting breakpoint to equalize (>=)
            square: false,      // squaring ?
            target: '>*'        // by default, the Equalizer will equalize all the direct childs
        };

    function Plugin ( element, options ) {
        this.element = element;

        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;

        this.items = {};        // grab all items to equalize
        this.dims = [];         // create empty array to store values
        this.tallest = 0;       // create variable to store the tallest slide

        this.init();
    }

    // Avoid Plugin.prototype conflicts
    $.extend( Plugin.prototype, {
        init: function() {
            this.tallest = 0;
            this.dims = [];
            this.items = $(this.element).find(this.settings.target);
            this.equalize();
        },
        equalize: function() {
            var instance = this;
            instance.tallest = 0;
            instance.dims = [];
            instance.items.each(function () { //add heights to array
                $(this).css('min-height', 0);
                instance.dims.push($(this).outerHeight(false));
                if (instance.config.square) {
                    $(this).css('min-width', 0);
                    instance.dims.push($(this).outerWidth());
                }
            });
            instance.tallest = Math.max.apply(null, instance.dims); //cache largest value
            instance.items.each(function () {
                instance.tallest = (window.innerWidth < instance.config.watch ? 0 : instance.tallest);
                $(this).css('min-height', instance.tallest + 'px');
                if (instance.config.square) {
                    $(this).css('min-width', instance.tallest + 'px');
                }
            });
        },
        callFunction: function (call, options) {
            if(typeof this[call] === 'function') {
                return this[call](options);
            }
        }
    } );

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[ pluginName ] = function(call, options ) {
        return this.each( function() {
            if ( !$.data( this, "plugin_" + pluginName ) ) {
                $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
            } else {
                return $.data(this, "plugin_" + pluginName).callFunction(call, options);
            }
        } );
    };

    $(document).on('ready domloaded ajaxloaded', function () {
        $(document).find('[gr-equalizer]').equalizer();
    });

    $(window).on('resize orientationchange', function () {
        $(document).find('[gr-equalizer]').equalizer('equalize');
    });

}(require('jquery'), window, document));
