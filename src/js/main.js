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
    this.setNavbarDropToggleBehavior();
    this.initLangSwitcher();
    this.initBtnDropdown();
    this.initStrategicGoal();
    this.initSliders();
    this.initTabs();
    this.setFilterTabsBehavior();
    this.setTabLinkClick();
    this.initContactsMap();
    this.initSvgMap();
    this.initSvgMapSettings();
    this.initGoToBlock();
};

// Set navbar-toggler behavior js-lang-switcher
application.prototype.setNavbarTogglerBehavior = function () {
    if($(".js-navbar-toggler").length) {
        $(".js-navbar-toggler").on("click", function (e) {
            $(this).closest("body").toggleClass("overflow-hidden");
        });
    }
};
// Set navbar dropdown-toggle behavior
application.prototype.setNavbarDropToggleBehavior = function () {
    if($(".navbar .dropdown-toggle").length) {
        $(".navbar .dropdown .dropdown-toggle").on("click", function (e) {
            $(this).closest(".dropdown").removeClass("show");
            let $href = $(this).attr("href");
            go($href);
            function go(url){
                location.href=url;
            }
        });
    }
};
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
};
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
};
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
};
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
            spaceBetween: 0,
            navigation: {
                nextEl: ".feedback .swiper-button-next",
                prevEl: ".feedback .swiper-button-prev",
            },
            pagination: {
                el: ".feedback .swiper-pagination",
                clickable: true
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
                spaceBetween: 0,
                freeMode: true,
                watchSlidesProgress: true
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
                spaceBetween: 0,
                thumbs: {
                    swiper: awardsSliderThumbs,
                },
                navigation: {
                    nextEl: ".awards .swiper-button-next",
                    prevEl: ".awards .swiper-button-prev",
                },
                pagination: {
                    el: ".awards-slider .swiper-pagination-wrapper .swiper-pagination",
                    clickable: true
                }
            });
        };
        breakpoint.addListener(breakpointChecker);
        breakpointChecker();
    }

    // Project slider
    if ($(".js-project-slider").length) {
        let projectSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 0,
            autoHeight: true,
            navigation: {
                nextEl: ".project-slider-wrapper .swiper-button-next",
                prevEl: ".project-slider-wrapper .swiper-button-prev",
            },
        };
        new Swiper(".js-project-slider", projectSliderSettings);
    }
};
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
};
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
};
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
};
// Init contacts map
application.prototype.initContactsMap = function () {
    if ($("#mapId").length) {
        ymaps.ready(function () {
            // map 1
            let myMap = new ymaps.Map('mapId', {
                    center: [51.673902, 39.253225],
                    zoom: 16,
                    controls: []
                }),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    balloonContent: '394007, Россия, г. Воронеж, Ленинский проспект, дом 119'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '/build/img/placemark-map.png',
                    iconImageSize: [27, 40],
                    iconImageOffset: [-5, -38]
                });

            myMap.controls.add('zoomControl');
            myMap.behaviors.disable('multiTouch');

            myMap.geoObjects.add(myPlacemark);
            // map 1.end

            // map 2
            let map = new ymaps.Map('unitMap', {
                center: [55.653822, 37.540057],
                zoom: 14,
                controls: ['zoomControl']
            });

            map.behaviors.disable('scrollZoom');
            map.behaviors.disable('multiTouch');
            // map.behaviors.disable('drag');

            let myPlacemark1 = new ymaps.Placemark([55.653822, 37.540057]);
            let myPlacemark2 = new ymaps.Placemark([56.311172, 43.996797]);
            let myPlacemark3 = new ymaps.Placemark([58.229197, 68.274827]);
            let myPlacemark4 = new ymaps.Placemark([45.051959, 41.995916]);
            let myPlacemark5 = new ymaps.Placemark([56.473043, 84.968553]);
            let myPlacemark6 = new ymaps.Placemark([53.944368, 27.609747]);
            let myPlacemark7 = new ymaps.Placemark([47.230456, 39.760917]);
            let myPlacemark8 = new ymaps.Placemark([59.825656, 30.326163]);
            map.geoObjects.add(myPlacemark1);
            map.geoObjects.add(myPlacemark2);
            map.geoObjects.add(myPlacemark3);
            map.geoObjects.add(myPlacemark4);
            map.geoObjects.add(myPlacemark5);
            map.geoObjects.add(myPlacemark6);
            map.geoObjects.add(myPlacemark7);
            map.geoObjects.add(myPlacemark8);

            $(document).on("click", "[data-map-id='1']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark1.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='2']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark2.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='3']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark3.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='4']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark4.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='5']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark5.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='6']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark6.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='7']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark7.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='8']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark8.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });
            // map 2.end
        });
    }
};
// Init svg map
application.prototype.initSvgMap = function () {
    if ($("#vmap").length) {
        jQuery('#vmap').vectorMap({
            map: 'russia_en',
            enableZoom: false,
            backgroundColor: null,
            color: '#FFF',
            hoverColor: '#06416A',
            borderColor: '#F2F2F2',
            borderOpacity: 1,
            borderWidth: 1,
            selectedColor: '#06416A',
            showTooltip: true,
            selectedRegions: ["da", "am", "ta", "st", "rz", "ks", "bs", "sa", "mc", "vn", "kj", "le", "ro", "bn", "sr", "ad", "ob", "sh", "pe", "nn"],
            onRegionClick: function(element, code, region){
                element.preventDefault();
            }
        });

        $(window).on("load resize",function(){
            let winWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            $(".vmap-wrapper").mCustomScrollbar({
                axis:"x",
                autoDraggerLength: true,
                scrollbarPosition: "inside",
                theme:"dark-2",
                documentTouchScroll: true,
                moveDragger: true,
                scrollInertia: 0,
                mouseWheel: {
                    enable: false
                }
            });
        });
    }
};
// Init click on map's pin
application.prototype.initSvgMapSettings = function () {
    if ($("#vmap").length) {
        setMapsPreloadPause();
        setMapOnclick();

        function setMapsPreloadPause() {
            setTimeout(function () {
                $(".country-map").removeClass("country-map--preload");
            }, 2000);
        }

        function setMapOnclick() {
            let currentEl = null,
                popupSlider = null;

            $(".vmap-pin").on("click", function () {
                currentEl = $(this).data("id");

                if (!$(this).hasClass("active")) {
                    $(".vmap-pin").not(this).removeClass("active");
                    $(this).addClass("active");
                    popupSlider = new Swiper(".vmap-pin[data-id='" + currentEl + "'] .swiper", {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        navigation: {
                            nextEl: ".vmap-pin[data-id='" + currentEl + "'] .swiper-button-next",
                            prevEl: ".vmap-pin[data-id='" + currentEl + "'] .swiper-button-prev",
                        },
                        pagination: {
                            el: ".vmap-pin[data-id='" + currentEl + "'] .swiper-pagination",
                            clickable: true,
                            dynamicBullets: true,
                            dynamicMainBullets: 4,
                        }
                    });
                }
            });

            $(".vmap-pin .map-content-box__close").on("click", function () {
                $(this).closest(".vmap-pin").removeClass("active");
            });

            $(document).on("click", function (e) {
                if (!$(".vmap-pin").is(e.target) && $(".vmap-pin").has(e.target).length === 0
                    || $(".vmap-pin .map-content-box__close").is(e.target)) {
                    currentEl = null;
                    /*popupSlider.destroy( true, true );*/
                    $(".vmap-pin").removeClass("active");
                }
            });
        }
    }
};
// Init func go to block
application.prototype.initGoToBlock = function () {
    if($(".js-has-target").length) {
        $(this).on("click", function () {
            let target = $(this).data("target");
            $([document.documentElement, document.body]).animate({
                scrollTop: $("[data-id='" + target + "']").offset().top
            }, 300);
        });

    }
};
