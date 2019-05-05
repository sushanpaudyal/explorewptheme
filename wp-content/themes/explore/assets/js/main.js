(function ($) {
    // "use strict"; 


    $(window).on("load", function () {
        $("#preloader").delay(300).animate({
            "opacity": "0"
        }, 300, function () {
            $("#preloader").css("display", "none");
        });
    });

    // menu options custom affix
    var fixed_top = $(".header-section");
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            fixed_top.addClass("animated fadeInDown menu-fixed");
        } else {
            fixed_top.removeClass("animated fadeInDown menu-fixed");
        }
    });

    //js code for mobile menu 
    $(".menu-toggle").on("click", function () {
        $(this).toggleClass("is-active");
    });

    // responsive menu slideing
    if ($(window).width() < 992) {
        $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function () {
            var element = $(this).parent("li");
            if (element.hasClass("open")) {
                element.removeClass("open");
                element.find("li").removeClass("open");
                element.find("ul").slideUp(500, "linear");
            } else {
                element.addClass("open");
                element.children("ul").slideDown();
                element.siblings("li").children("ul").slideUp();
                element.siblings("li").removeClass("open");
                element.siblings("li").find("li").removeClass("open");
                element.siblings("li").find("ul").slideUp();
            }
        });

    }

    // banner content animation
    $(".banner-slider").on("translate.owl.carousel", function () {
            $(".banner-content h1").removeClass("animated fadeInLeft").css("opacity", "0"),
                $(".banner-content p").removeClass("animated flipInX").css("opacity", "0"),
                $(".banner-content a.cmn-button").removeClass("animated slideInLeft").css("opacity", "0")
        }),
        $(".banner-slider").on("translated.owl.carousel", function () {
            $(".banner-content h1").addClass("animated fadeInLeft").css("opacity", "1"),
                $(".banner-content p").addClass("animated flipInX").css("opacity", "1"),
                $(".banner-content a.cmn-button").addClass("animated slideInLeft").css("opacity", "1")
        });

    // banner-slider
    $('.banner-slider').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        smartSpeed: 800,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true
            },
            600: {
                items: 1,
                nav: false,
                dots: true
            },
            1000: {
                items: 1,
                nav: true,
                dots: true,
                loop: true
            },
            1340: {
                items: 1,
                nav: true,
                loop: true
            }
        }
    })

    // testimonial-slider
    $('.testimonial-slider').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        dots: false,
        smartSpeed: 800,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true
            },
            600: {
                items: 2,
                nav: false,
                dots: true
            },
            1000: {
                items: 3,
                nav: false,
                loop: false,
                dots: true
            },
            1520: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    })

    // testimonial slider career
    $('.testimonial-slider-career').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        dots: false,
        smartSpeed: 800,
        autoplay: 800,
        autoplayHoverPause: true,
        autoPlaySpeed: 3000,
        autoPlayTimeout: 5000,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true
            },
            600: {
                items: 2,
                nav: false,
                loop: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            },
            1520: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    })


    // lightcase plugin init
    $('a[data-rel^=lightcase]').lightcase();

    // counter 
    $('.counter').countUp({
        'time': 1500,
        'delay': 10
    });

    $('.campus-gallery-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        smartSpeed: 1200,
        autoplay: true,
        autoplayTimeout: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })

    if ($(window).width() > 990) {
        $('.header-search-toggle').on("click", function (e) {
            if ($('.header-serach-block').hasClass('closed')) {
                $('.header-serach-block').removeClass('closed').addClass('opened');
            } else {
                $('.header-serach-block').removeClass('opened').addClass('closed');
            }
        });
    }



    // progress bar
    $(".progressbar").each(function () {
        $(this).find(".bar").animate({
            "width": $(this).attr("data-perc")
        }, 3000);
        $(this).find(".label").animate({
            "left": $(this).attr("data-perc")
        }, 3000)
    });

    // Show or hide the sticky footer button
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 200) {
            $(".scroll-to-top").fadeIn(200);
        } else {
            $(".scroll-to-top").fadeOut(200);
        }
    });

    // Animate the scroll to top
    $(".scroll-to-top").on("click", function (event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 300);
    });




    // Accordion
    $('.toggle').click(function (e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });

    //partners slider
    $('.associate-partners').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


})(jQuery);