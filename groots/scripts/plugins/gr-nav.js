( function( $, window, document ) {

    "use strict"; // Start of use strict

    var $overlay = $('<div gr-nav-overlay />');

    $overlay.appendTo('[gr-nav-handler]');

    function _toggleClass() {
        $('[gr-nav], [gr-nav-trigger], [gr-nav-panel]').toggleClass('is-open');
        $overlay.toggleClass('is-visible');
    }

    $('[gr-nav-trigger]').on('click', function(event) {
        event.preventDefault();
        _toggleClass();
    });

    $overlay.on('click', function(event) {
        event.preventDefault();
        _toggleClass();
    });

    $(document).keyup(function(event) {
        if (event.keyCode == 27) {
            _toggleClass();
        }
    });

}(require('jquery'), window, document));
