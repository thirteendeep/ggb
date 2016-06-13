require('magnific-popup');
require('slick-carousel');

Parsley.addMessages('fr', {
    defaultMessage: "Cette valeur semble non valide.",
    type: {
        email:        "Cette valeur n'est pas une adresse email valide.",
        url:          "Cette valeur n'est pas une URL valide.",
        number:       "Cette valeur doit être un nombre.",
        integer:      "Cette valeur doit être un entier.",
        digits:       "Cette valeur doit être numérique.",
        alphanum:     "Cette valeur doit être alphanumérique."
    },
    notblank:       "Cette valeur ne peut pas être vide.",
    required:       "Ce champ est requis.",
    pattern:        "Cette valeur semble non valide.",
    min:            "Cette valeur ne doit pas être inférieure à %s.",
    max:            "Cette valeur ne doit pas excéder %s.",
    range:          "Cette valeur doit être comprise entre %s et %s.",
    minlength:      "Cette chaîne est trop courte. Elle doit avoir au minimum %s caractères.",
    maxlength:      "Cette chaîne est trop longue. Elle doit avoir au maximum %s caractères.",
    length:         "Cette valeur doit contenir entre %s et %s caractères.",
    mincheck:       "Vous devez sélectionner au moins %s choix.",
    maxcheck:       "Vous devez sélectionner %s choix maximum.",
    check:          "Vous devez sélectionner entre %s et %s choix.",
    equalto:        "Cette valeur devrait être identique."
});

Parsley.setLocale('fr');

( function( $, window, document ) {

    "use strict";


    //
    // $.ajax({
    //     type: "POST",
    //     url: "email.php",
    //     data: $(form).serialize(),
    //     success: function(){
    //         $('.success').fadeIn(1000);
    //     }
    // });


    $('[js-realisations]').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: '[js-realisations-thumbs]'
    });

    $('[js-realisations-thumbs]').slick({
        slidesToShow: 6,
        arrows: false,
        slidesToScroll: 1,
        asNavFor: '[js-realisations]',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2
            }
        }]
    });



    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });



    $('[data-js-hamburger]').click(function(event) {
        var $header_nav = $('[data-js-nav]');

        $(this).toggleClass('is-active');
        setTimeout(function() {
            $header_nav.toggleClass('is-active');
            $(".site-container, .section__header").toggleClass('is-active');
        }, 400);
    });

    $('[data-js-sub-nav]').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('is-opened');
    });

    if ($('.gallery')[0]) {
        $('.gallery').magnificPopup({
            delegate: '[data-js-popup-image]',
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery:{
                enabled:true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out'
            }
        });
    }

    $('[gr-modal]').each(function() {
        var modal = $(this).attr('gr-modal');

        $(this).find('+ [id^="modal"]').addClass('mfp-with-anim');

        $(this).magnificPopup({
            items: {
                src: modal,
                type: 'inline'
            },
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = "mfp-zoom-in";
                }
            },
            midClick: true
        });
    });

    function showMarkers() {
        $(markers).each(function(id, marker){
            marker.setVisible(true);
        });
    }
    function initialize() {
        var latlng = new google.maps.LatLng(39.64805882001975, -87.70713525390624);
        var myOptions = {
            zoom: 4,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };
        map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
        $(addresses).each(function(index, marker){
            markers[index] = new google.maps.Marker({
                position: {lat:marker.address.lat, lng : marker.address.lng },
                map: map,
                icon: {url: marker.icon, size: new google.maps.Size(44,44)}
            });
        });

        google.maps.event.addListener(map, 'zoom_changed', function() {
            showMarkers();
        });
        google.maps.event.addListener(map, 'idle', function() {
            showMarkers();
        });
    }
    if(typeof google !== 'undefined') {
        google.maps.event.addDomListener(window, "load", initialize);
    }


}(require('jquery'), window, document));
