$(document).ready(function() {

    $('#menu').click(function() { // ak kliknem na id menu pridá sa class fa-times a zobrazí sa menu ktorému sa prida class toggle
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
    });

    $(window).on('scroll load', function() { // ak zoskrolujem pri otvorenom menu, menu sa skrije a zobrazí sa ikonka pre návrat na začiatok

        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');

        if ($(window).scrollTop() > 0) {
            $('.top').show();
        } else {
            $('.top').hide();
        }

    });

    // smooth scrolling 

    // ak kliknem na akýkolvek link, defaultna akcia sa zrusi,
    // nastaví sa hodnota top podla atributu href danej sekcie,
    // podla toho na ktorí prvok-link som klikol

    $('a[href*="#"]').on('click', function(e) {

        e.preventDefault();

        $('html, body').animate({

                scrollTop: $($(this).attr('href')).offset().top,

            },
            500,
            'linear'
        );

    });

});