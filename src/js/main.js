$(document).ready(function () {
    let app = new application();
    app.init();
});


function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.setNavbarTogglerBehavior();
    this.initLangSwitcher();
    this.initBtnDropdown();
    this.initStrategicGoal();
    this.initSliders();
    this.initTabs();
    this.setFilterTabsBehavior();
    this.setTabLinkClick();
}

// Set navbar-toggler behavior js-lang-switcher
application.prototype.setNavbarTogglerBehavior = function () {
    if($(".js-navbar-toggler").length) {
        $(".js-navbar-toggler").on("click", function (e) {
            $(this).closest("body").toggleClass("overflow-hidden");
        });
    }
}
// Init lang-switcher navbar behavior js-lang-switcher
application.prototype.initLangSwitcher = function () {
    if($(".js-lang-switcher").length) {
        $(".js-lang-switcher").on("click", function (e) {
            if (!$(this).hasClass("show")) {
                $(".js-lang-switcher").not($(this)).removeClass("show");
                $(this).addClass("show");
            }
            else if ($(this).hasClass("show")) {
                $(this).removeClass("show");
            }
        });

        $(document).on("click", function (e) {
            if (!$(".js-lang-switcher").is(e.target) && $(".js-lang-switcher").has(e.target).length === 0) {
                $(".js-lang-switcher").removeClass("show");
            }
        });

        $(".js-lang-switcher .lang-switcher-dropdown-menu a").on("click", function (e) {
            let textAbbr = $(this).data("abbr");
            $(".lang-switcher-link").text(textAbbr);
        });
    }
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
        let magazineSliderSettings = {
            freeMode: true,
            slidesPerView: "auto",
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
                768: {
                    freeMode: false,
                }
            }
        };
        new Swiper(".js-magazine-slider", magazineSliderSettings);
    }

    // Feedback slider
    if ($(".js-feedback-slider").length) {
        let feedbackSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 20,
            navigation: {
                nextEl: ".feedback .swiper-button-next",
                prevEl: ".feedback .swiper-button-prev",
            },
            pagination: {
                el: ".feedback .swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 8,
            },
            breakpoints: {
                768: {
                    pagination: {
                        dynamicMainBullets: 5
                    },
                },
                992: {
                    slidesPerView: 3,
                    pagination: {
                        dynamicMainBullets: 5
                    },
                },
                1200: {
                    slidesPerView: 4,
                    pagination: {
                        dynamicMainBullets: 3
                    },
                }
            }
        };
        new Swiper(".js-feedback-slider", feedbackSliderSettings);
    }

    // Slider inner__slider-menu
    if ($('.js-tabmenu-slider').length) {
        let tabmenuSliderSettings = {
            slidesPerView: 'auto',
            spaceBetween: 8,
            freeMode: true,
            navigation: {
                nextEl: '.js-tabmenu-slider .swiper-button-next',
                prevEl: '.js-tabmenu-slider .swiper-button-prev',
            },
        };
        new Swiper(".js-tabmenu-slider", tabmenuSliderSettings);
    }

    // Clients slider
    if ($(".js-clients-slider").length) {
        let clientsSliderSettings = {
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

    // Awards slider
    if ($(".js-awards-slider").length) {
        const breakpoint = window.matchMedia( "(min-width:768px)" );

        let awardsSliderThumbs,
            awardsSliderTabletComputer,
            awardsSliderMobile;

        const breakpointChecker = function() {
            if ( breakpoint.matches === true ) {
                if ( awardsSliderMobile !== undefined ) awardsSliderMobile.destroy( true, true );
                return enableAwardsSliderTabletComputer();
            } else if ( breakpoint.matches === false ) {
                if ( awardsSliderTabletComputer !== undefined ) {
                    awardsSliderThumbs.destroy( true, true );
                    awardsSliderTabletComputer.destroy( true, true );
                }
                return enableAwardsSliderMobile();
            }
        };
        const enableAwardsSliderTabletComputer = function() {
            awardsSliderThumbs = new Swiper(".js-awards-thumbs-slider", {
                slidesPerView: "auto",
                spaceBetween: 15,
                freeMode: true,
                watchSlidesProgress: true,
                breakpoints: {
                    1200: {
                        spaceBetween: 30
                    }
                }
            });
            awardsSliderTabletComputer = new Swiper(".js-awards-slider", {
                slidesPerView: 1,
                effect: "fade",
                pagination: {
                    el: ".awards-slider .awards-slider__slide-descr-pagination .swiper-pagination",
                    type: "custom",
                    renderCustom: function (swiper, current, total) {
                        return ("" + current).slice(-2) + " из " + ("" + total).slice(-2);
                    }
                },
                thumbs: {
                    swiper: awardsSliderThumbs,
                },
                navigation: {
                    nextEl: ".awards .swiper-button-next",
                    prevEl: ".awards .swiper-button-prev",
                }
            });
        };
        const enableAwardsSliderMobile = function() {
            awardsSliderMobile = new Swiper(".js-awards-slider", {
                slidesPerView: "auto",
                spaceBetween: 10,
                thumbs: {
                    swiper: awardsSliderThumbs,
                },
                navigation: {
                    nextEl: ".awards .swiper-button-next",
                    prevEl: ".awards .swiper-button-prev",
                },
                pagination: {
                    el: ".awards-slider .swiper-pagination-wrapper .swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                    dynamicMainBullets: 8,
                }
            });
        };
        breakpoint.addListener(breakpointChecker);
        breakpointChecker();

    }
}
// Init tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        // adding class "selected" to active tab
        $(".tabs-heading__item").on("click", function () {
            if (!$(this).find("input[type='checkbox']").prop("checked")) {
                $(this).removeClass("selected");
            } else if ($(this).find("input[type='checkbox']").prop("checked")) {
                $(this).addClass("selected");
            }
        });

        // show content of "selected" item
        tabsContentBinding();
        function tabsContentBinding() {
            $(".tabs-heading__item").on("click", function () {
                let currentSelected = $(this).data("target");
                if (!$(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").removeClass("active");
                } else if ($(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".tabs").find(".tab-content__section[data-id='" + currentSelected + "']").addClass("active");
                }
            });
        }
    }
}
// Init filter tabs
application.prototype.setFilterTabsBehavior = function () {
    if ($(".page-search-result__filter").length) {
        $(".page-search-result__filter .tabs-heading__item").on("click", function () {
            $(".page-search-result__filter .tabs-heading__item").each(function () {
                if ($(this).find("input[type='checkbox']").prop("checked")) {
                    $(this).closest(".page-search-result__filter--default").removeClass("page-search-result__filter--default");
                    return false;
                } else {
                    $(".page-search-result__filter").addClass("page-search-result__filter--default");
                }

            });
        });
    }
}
// Set tabs behavior on click
application.prototype.setTabLinkClick = function () {
    if ($(".js-tab-link").length) {
        $(".js-tab-link").on("click", function () {
            let target = $(this).attr("data-rel");
            if (!$(this).hasClass("active")) {
                $(".js-tab-link").removeClass("active");
                $(this).addClass("active");

                $(".tabs .tabs__content-item").removeClass("d-block").addClass("d-none");
                $("#" + target).removeClass("d-none").addClass("d-block");
            } else {
                $(this).removeClass("active");
                $(".tabs .tabs__content-item").removeClass("d-none");
                $(".tabs .tabs__content-item").removeClass("d-block");
            }
        });
    }
}
