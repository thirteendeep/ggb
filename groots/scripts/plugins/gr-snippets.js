( function( $, window, document ) {

    "use strict"; // Start of use strict

    $('[gr-scroll-to]').on('click', function(event) {
        event.preventDefault();
        var $anchor = $(this),
            element = $(this).attr('gr-scroll-to'),
            offset = Math.floor($($anchor.attr('href')).offset().top) - $(element).height() + 1;

        if($(this).attr('gr-scroll-to-bottom') === '1') {
            offset = Math.floor($($anchor.attr('href')).offset().top) - ($(window).height() - $($anchor.attr('href')).height()) - 1;
        }

        $(document.body).stop().animate({
            scrollTop: offset
        }, 400);
    });

    $('iframe[src*="youtube.com"]').each(function(){
        $(this).before('<div class="iframe-wrapper" />');
        var orphan = $(this).detach()
        $(this).closest('.iframe-wrapper').html(orphan);
    });


    $('[gr-toggle-demo]').on('click', function(event) {
        event.preventDefault();
        $(this).text(function(i, text){
            return text === "Show demo" ? "Hide demo" : "Show demo";
        });
        $(this).closest('.gui-doc').find('.gui-doc__showcase').toggleClass("is-open");
    });

} )( require('jquery'), window, document );
