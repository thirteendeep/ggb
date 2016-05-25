( function( $, window, document ) {

    "use strict";

    $(document).on('ready domloaded ajaxloaded', function () {
        if($('.gui-banner--home').length && $('.gui-banner--home')[0].getBoundingClientRect().top <= -100){
            $('.homepage').addClass('is-plain');
        } else {
            $('.homepage').removeClass('is-plain');
        }

        if($('.gui-main')[0].getBoundingClientRect().top <= 70){
            $('.gui-doc-scrollspy').addClass('is-fixed');
        } else {
            $('.gui-doc-scrollspy').removeClass('is-fixed');
        }
    });

    $(window).on('scroll resize orientationchange', function () {
        if($('.gui-banner--home').length && $('.gui-banner--home')[0].getBoundingClientRect().top <= -100){
            $('.homepage').addClass('is-plain');
        } else {
            $('.homepage').removeClass('is-plain');
        }

        //Sticky nav
        if($('.gui-main')[0].getBoundingClientRect().top <= 70){
            $('.gui-doc-scrollspy').addClass('is-fixed');
        } else {
            $('.gui-doc-scrollspy').removeClass('is-fixed');
        }

        //Checking if scroll spy is visible
        if ($('.gui-doc-scrollspy').is(':visible')) {
            /*SCROLL SPY*/
            var scrollBottom = $(window).scrollTop() + $(window).height(),
                bottomBreakPoint = $('body').height() - ($('[gr-scrollspy-chapter]').last().height() + $('[gr-scrollspy-chapter]').last().prev().height() + $('footer').height());

            //Defining vertical break point
            var scrollTrigger = $(window).scrollTop() + $('.gui-nav').height();
            if (scrollBottom >= bottomBreakPoint && $(window).height() < $('.gui-main').height()) {
                scrollTrigger = scrollBottom;
            }

            //Applying scroll spy
            $('[gr-scrollspy-chapter]').each(function() {
                var $element = $(this),
                    $item =  $('.gui-doc-scrollspy').find('li').eq($element.index()).find('a'),
                    chapterOffset = Math.floor($element.offset().top),
                    height = $element.height(),
                    index = $element.index();

                if(scrollTrigger >= chapterOffset && scrollTrigger < chapterOffset + height && !$item.hasClass('is-active')) {
                    $('.gui-doc-scrollspy').find('li').eq(index).find('a').addClass('is-active');
                } else if (scrollTrigger < chapterOffset || scrollTrigger >= chapterOffset + height && $item.hasClass('is-active')) {
                    $('.gui-doc-scrollspy').find('li').eq(index).find('a').removeClass('is-active');
                }
            });
        }
    });

}(require('jquery'), window, document));
