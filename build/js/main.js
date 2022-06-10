$(document).ready(function () {
    var app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initBtnDropdown();
    this.initStrategicGoal();
    this.initSliders();
}

// Init ".btn-dropdown" behavior
application.prototype.initBtnDropdown = function () {
    if ($(".btn-dropdown").length) {
        $(".btn-dropdown").on("click", function (e) {
            if ($(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0) {
                if (!$(this).hasClass("btn-dropdown--open")) {
                    $(".btn-dropdown").removeClass("btn-dropdown--open");
                    $(this).addClass("btn-dropdown--open");

                    $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--open");
                    $(this).find(".content-dropdown").addClass("content-dropdown--transition");
                    setTimeout(function () {
                        $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--transition");
                    }, 150);
                } else {
                    $(this).removeClass("btn-dropdown--open");
                    $(this).find(".content-dropdown").removeClass("content-dropdown--open");
                }
            }
        });

        $(document).on("click", function (e) {
            if (!$(".btn-dropdown").is(e.target) && $(".btn-dropdown").has(e.target).length === 0
                || $(".content-dropdown__results .content-dropdown__link").is(e.target)) {
                $(".btn-dropdown").removeClass("btn-dropdown--open");
                $(".btn-dropdown .content-dropdown").removeClass("content-dropdown--open");
            }
        });
    }
}
// Init "strategic-goal__header" behavior
application.prototype.initStrategicGoal = function () {
    if ($(".js-strategic-goal-item").length) {
        /*$(".strategic-goal__collapse").hide();*/
        $(".strategic-goal--dropdown .js-strategic-goal-item").on("click", function () {
            if(!$(this).hasClass("active")) {
                $(this).addClass("active");
                $(this).find(".strategic-goal__collapse").slideDown(150);
            } else {
                $(this).removeClass("active");
                $(this).find(".strategic-goal__collapse").slideUp(150);
            }
        });
    }
}
// Init sliders
application.prototype.initSliders = function () {
    // Magazine slider
    if ($(".js-magazine-slider").length) {
        var magazineSliderSettings = {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".magazine .swiper-button-next",
                prevEl: ".magazine .swiper-button-prev",
            },
            pagination: {
                el: ".magazine .swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 7,
            },
            breakpoints: {
                /*768: {
                    slidesPerView: 2,
                },*/
            }
        };
        new Swiper(".js-magazine-slider", magazineSliderSettings);
    }

    // Feedback slider
    if ($(".js-feedback-slider").length) {
        var feedbackSliderSettings = {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
                nextEl: ".feedback .swiper-button-next",
                prevEl: ".feedback .swiper-button-prev",
            },
            pagination: {
                el: ".feedback .swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 3,
            },
        };
        new Swiper(".js-feedback-slider", feedbackSliderSettings);
    }

    // Clients slider
    if ($(".js-clients-slider").length) {
        var clientsSliderSettings = {
            allowTouchMove: false,
            autoplay: {
                delay: 0,
                disableOnInteraction: false
            },

            freeMode: {
                enabled: true,
            },
            loop: true,
            slidesPerView: "auto",
            spaceBetween: 20,
            speed: 5000,
        };
        new Swiper(".js-clients-slider", clientsSliderSettings);
    }

    // Feedback thumbs slider
    if ($(".js-awards-thumbs-slider").length) {
        var awardsSliderThumbsSettings = {
            slidesPerView: 3,
            spaceBetween: 35,
            watchSlidesProgress: true,
        };
        new Swiper(".js-awards-thumbs-slider", awardsSliderThumbsSettings);
    }
    // Feedback slider
    if ($(".js-awards-slider").length) {
        var awardsSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 35,
            effect: "fade",
            /*thumbs: {
                swiper: awardsSliderThumbsSettings,
            },*/
            navigation: {
                nextEl: ".awards .swiper-button-next",
                prevEl: ".awards .swiper-button-prev",
            },
            pagination: {
                el: ".awards-slider .swiper-pagination",
                type: "custom",
                renderCustom: function (swiper, current, total) {
                    return ("" + current).slice(-2) + " из " + ("" + total).slice(-2);
                }
            },

        };
        new Swiper(".js-awards-slider", awardsSliderSettings);
    }

    /*var swiper = new Swiper(".js-awards-thumbs-slider", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".js-awards-slider", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
    });*/

}
