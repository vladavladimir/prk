;(function ($) {
    "use strict";

    /*============= preloader js css =============*/
    var cites = [];
    cites[0] = "Dolly Parton - If you don't like the road you're walking, start paving another one.";
    cites[1] = "Unknown - Wherever life plants you, bloom with grace.";
    cites[2] = "Unknown - One day or day one. It's your decision.";
    cites[3] = "Albert Einstein - Life is like riding a bicycle. To keep your balance, you must keep moving.";
    cites[4] = "Oscar Wilde - To live is the rarest thing in the world. Most people exist, that is all.";
    cites[5] = "Mark Twain - The two most important days in your life are the day you are born and the day you find out why.";


    
    var cite = cites[Math.floor(Math.random() * cites.length)];
    $('#preloader p').text(cite);
    $('#preloader').addClass('loading');

    $(window).on( 'load', function() {
        setTimeout(function () {
            $('#preloader').fadeOut(2000, function () {
                $('#preloader').removeClass('loading');
            });
        }, 500);
    })

})(jQuery)