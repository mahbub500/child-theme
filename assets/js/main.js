jQuery(function ($) {
 $('.uagb-block-78bf713a').attr( 'id', 'chiltheme-about-section' );

 $('.uagb-block-417295f8 .uagb-infobox-cta-link').addClass( 'chiltheme-button' );

 $('.chiltheme-button').on('click', function(event) {

        event.preventDefault();


        var target = $(this).attr('href');


        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800); 
    });

})