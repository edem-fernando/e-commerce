$(function () {
    var speedTimeFade = 200;

    // Slide
    if ($(".j_slide").length) {
        function jSlide() {
            $(".j_slide_nav span").removeClass("active");

            if ($(".j_slide_item:visible").next(".j_slide_item").length) {
                $(".j_slide_nav span:eq(" + ($(".j_slide_item:visible").index() + 1) + ")").addClass("active");
                $(".j_slide_item:visible").fadeOut(function () {
                    $(this).next(".j_slide_item").fadeIn();
                });
            } else {
                $(".j_slide_nav span:eq(0)").addClass("active");
                $(".j_slide_item:visible").fadeOut(function () {
                    $(".j_slide_item:eq(0)").fadeIn();
                });
            }
        }

        var timeSlide = 4000;
        var jSlideTimer = setInterval(function () {
            jSlide();
        }, timeSlide);

        // Parar slide mouseenter
        $(".j_slide").on("mouseenter", function () {
            clearInterval(jSlideTimer);
        }).on("mouseleave", function () {
            jSlideTimer = setInterval(function () {
                jSlide();
            }, timeSlide);
        });

        // Navegação
        var slideNav = "";
        $(".j_slide_item").each(function () {
            slideNav += "<span class='rounded transition'></span>";
        });

        $(".j_slide_nav").html(slideNav).find("span").on("click", function () {
            var navigation = $(this);
            clearInterval(jSlideTimer);

            $(".j_slide_nav span").removeClass("active");
            $(".j_slide_item:visible").fadeOut(function () {
                navigation.addClass("active");
                $(".j_slide_item:eq(" + navigation.index() + ")").fadeIn();
            });
        });
        $(".j_slide_nav").find("span:eq(0)").addClass("active");
    }

    // Tabs
    if ($(".j_tabs").length) {
        $(".j_tabs_nav:eq(0)").addClass("active");
        $(".j_tabs_nav").on("click", function () {
            var jTabs = $(this);

            $(".j_tabs_nav").removeClass("active");
            jTabs.addClass("active");

            $(".j_tabs_item").fadeOut(function () {
                $(".j_tabs_item:eq(" + jTabs.index() + ")").fadeIn();
            });
        });
    }

    // Gallery
    $(".j_gallery_item").on("click", function () {
        var item = $(this);
        var itens = $(".j_gallery_item");
        var home = $(".j_gallery_home");

        if (!item.hasClass("active")) {
            itens.removeClass("active");
            item.addClass("active");

            home.fadeTo(speedTimeFade, 0.4, function () {
                $(this).attr("src", item.find("img").attr("src"));
                $(this).fadeTo(speedTimeFade, 1.0);
            });
        }
    });


    // Anchor
    $(".j_anchor").on("click", function () {
        var anchor = $($(this).attr("data-anchor"));
        $("html, body").animate({scrollTop: anchor.offset().top}, 1000);
    });
});
