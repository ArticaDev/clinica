(function ($) {
    "use strict"; // Start of use strict
    let pageURL = $(location).attr("pathname");
    if (pageURL === "/") {
        $(".home").attr("href", "#home");
        $(".navbar-toggler").hide();
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 10) {
                $(".navbar-toggler").show("fast");
                $(".navbar").addClass("bg-black");
            } else {
                $(".navbar-collapse").collapse("hide");
                $(".navbar").removeClass("bg-black");
                $(".navbar-toggler").hide("fast");
            }
        });
    } else {
        $(".navbar").addClass("bg-black");
    }
    //search button logic
    var isTriggered = 0;
    $(".search").click(function () {
        if (isTriggered == 0) {
            $(".search-in").toggle("slide", { direction: "right" });
            isTriggered = 1;
        } else {
            if ($(".search-in").val() == "") {
                $(".search-in").toggle("slide", { direction: "right" });
                isTriggered = 0;
            } else {
                window.location.replace("#");
                isTriggered = 0;
            }
        }
    });

    //infinite scroll
    $(".content").infiniteScroll({
        path: ".pagination__next",
        append: ".catalog",
        hideNav: ".pagination",
    });

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 100,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 54,
    });
})(jQuery);
