(function ($) {
    $(document).ready(function () {
        check_show_mobile_menu();
        $(document.body).trigger('wc_fragment_refresh');
    });
    $(document).ready(function () {
        check_show_mobile_menu();
        $(document.body).trigger('wc_fragment_refresh');

        $(".open-sup").click(function (e) {
            e.preventDefault();
            $(this).parent().next().slideToggle('3000');
            $(this).toggleClass('rotate');
        });

        if ($(".list-subs.list-unstyled").children().length == 0) {
            $(".list-subs.list-unstyled").prev().find('open-sup').hide();
        }

    });

    $(window).on("resize", function () {
        check_show_mobile_menu();
    });

    $(window).on("load", function () {
        check_show_mobile_menu();
    });

    function check_show_mobile_menu() {
        let width = $(window).width();

        if (width < 1200) {
            $('#mobile_menu').mmenu({
                // slidingSubmenus: false,
                extensions: ["border-full", "pagedim-black", "position-front"],
                wrappers: ["wordpress"],
            });
        }
    }

    if ($(".owl-carousel").length) {
        $(".owl-carousel").each(function () {
            var owl = $(".owl-carousel");
            $(this).owlCarousel({
                margin: 0,
                autoplayTimeout: $(this).data("autotime"),
                smartSpeed: $(this).data("speed"),
                autoHeight: $(this).data("autoheight"),
                autoplay: $(this).data("autoplay"),
                items: $(this).data("carousel-items"),
                nav: $(this).data("nav"),
                dots: $(this).data("dots"),
                center: $(this).data("center"),
                loop: $(this).data("loop"),
                animateOut: $(this).data("animation") ? 'fadeOut' : '',
                responsive: {
                    0: {
                        items: $(this).data("mobile"),
                    },
                    768: {
                        items: $(this).data("tablet"),
                        margin: $(this).data("margintb"),
                    },
                    992: {
                        items: $(this).data("desktop-small"),
                        margin: $(this).data("margintb"),
                    },
                    1680: {
                        items: $(this).data("desktop"),
                        margin: $(this).data("margintb"),
                    },
                },
            });
        });
    }

    $("#open-search").on("click", function () {
        $("#search-box").toggleClass("active");
        $("#s").focus();
    });

    // $("#mobile-menu-button").on("click", function () {
    //     $("#nav_mobile_id").addClass('in');
    //     $(".transparent").addClass('in');
    //     $("body").css({
    //         'height': '100vh',
    //         'overflow-y': 'hidden',
    //     });
    // })
    // $("#close-menu-mobile").on("click", function () {
    //     $("#nav_mobile_id").removeClass('in');
    //     $(".transparent").removeClass('in');
    //     $("body").css({
    //         'height': 'auto',
    //         'overflow-y': 'unset',
    //     })
    // });

    // $("#transparent").on("click", function () {
    //     $("#nav_mobile_id").removeClass('in');
    //     $(".transparent").removeClass('in');
    //     $("body").css({
    //         'height': 'auto',
    //         'overflow-y': 'unset',
    //     })
    // })


    const nav = $(".header-wrapper");

    window.addEventListener('scroll', function () {
        const offset = window.pageYOffset;
        if (offset > 150) {
            nav.addClass('scroll');
            $("#header").css('height', '90px');
        } else {
            nav.removeClass('scroll')
            $("#header").css('height', '');
        }

    });


    // (function ($) {
    //     $(document).ready(function () {
    //         $(window).scroll(function () {
    //             const offset = window.pageYOffset;
    //             if (offset > 100) {
    //                 $('.header-fixed').addClass('sticky');
    //                 $("#wrapper").css('margin-top', '100px');
    //             } else {
    //                 $('.header-fixed').removeClass('sticky');
    //                 $("#wrapper").css('margin-top', '0');
    //             }
    //         });
    //     });
    // })(jQuery);


    var offset = 100;
    var speed = 5000;
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() < offset) {
            $('.am-topbutton').fadeOut(duration);
        } else {
            $('.am-topbutton').fadeIn(duration);
        }
    });

    $('.am-topbutton').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, speed);
        return false;
    });

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('#header').addClass('fixed');
        } else {
            $('#header').removeClass('fixed');
        }
    });


})(jQuery);