function showTooltip(targetItems, name) {
    $(targetItems).each(function(i) {
        var heading = $(this).attr('data-heading');
        var caption = $(this).attr('data-caption');
        var address = $(this).attr('data-address');
        var images = $(this).attr('data-images').split(',');

        var boxHeight = $('.map-content-box').height();
        var array = images;

        $('body').append('<div class="MapboxEl map-content-box ' + name + '" id="' + name + i + '"> <div class="map-content-box__inner"> <div class="map-content-box__image map-content-box__image_index-' + i + ' swiper"> <div class="image-wrapper swiper-wrapper">  </div> </div> <div class="map-content-box__title">' + heading + '</div> <div class="map-content-box__caption">' + caption + '</div> <div class="map-content-box__place">' + address + '</div> </div> <div class="map-content-box__bottom"> <div class="arrow-btn swiper-button-prev swiper-index-button-prev-' + i + '"></div> <div class="pagination_map pagination_map-index-' + i + ' swiper-pagination"></div> <div class="arrow-btn swiper-button-next swiper-index-button-next-' + i + '"></div> </div> </div>');
        jQuery.each(array, function(index, value) {
            $('<div class="swiper-slide"> <a href="' + value + '" data-fancybox="" data-caption=""> <img src="' + value + '" alt=""> </a> </div>').appendTo('.image-wrapper');
        });


        $('.main-wrapper').mouseup(function(e) {
            var container = $(".MapboxEl");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });


        var tooltip = $('#' + name + i);

        $(this).click(function(kmouse) {
            tooltip.css({
                display: 'none'
            }).fadeIn();

            if ($(window).width() < 1200) {
                tooltip.css({
                    left: 0,
                    right: 0,
                    margin: 'auto',
                    top: kmouse.pageY - boxHeight - 50
                });
            } else {
                tooltip.css({
                    left: kmouse.pageX - 167,
                    top: kmouse.pageY - boxHeight - 50
                });
            }
        });


        const mapImageBox = new Swiper('.map-content-box__image_index-' + i, {
            slidesPerView: 1,
            loop: false,
            pagination: {
                el: '.pagination_map-index-' + i,
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-index-button-next-' + i,
                prevEl: '.swiper-index-button-prev-' + i,
            },
        });
    });
}


$(document).ready(function() {
    $.fancybox.defaults.backFocus = false;

    const swiper = new Swiper('.company-slider', {
        slidesPerView: 1,
        loop: false,
        navigation: {
            nextEl: '.company-slider .swiper-button-next',
            prevEl: '.company-slider .swiper-button-prev',
        },
    });


    const swiper3 = new Swiper('.timeline-slider', {
        slidesPerView: "auto",
        loop: false,
        speed: 150,
        mousewheel: {
            //sensitivity: 1,
            releaseOnEdges: true,
        },
        centeredSlides: true,
        slideToClickedSlide: true,
        autoHeight: true,

        breakpoints: {
            767: {
                slidesPerView: "auto",
                autoHeight: false,
                centeredSlides: true,
            }
        }
    });


    var swiper4 = new Swiper(".timeline-bottom-slider", {
        slidesPerView: "auto",
        loop: false,
        speed: 150,
        centeredSlides: true,
        slideToClickedSlide: true,
        autoHeight: false,

        breakpoints: {
            767: {
                slidesPerView: "auto",
                autoHeight: false,
                centeredSlides: false,
            }
        }
    });

    swiper3.controller.control = swiper4;
    swiper4.controller.control = swiper3;


    if($(window).width() > 768) {
      swiper3.on('reachEnd', function() {
          $('html, body').animate({
              scrollTop: $("#prev-execs").offset().top
          }, 800);
      });
    }


    /*$('.has-submenu > a').append('<div class="toggleBtn"></div>');*/

    $('.menu-btn').on('click', function() {
        if (!$('.js-header-navbar').hasClass('active')) {
            $('.menu-btn').addClass('open');
            $('.js-header-navbar').addClass('active');
        } else {
            $('.menu-btn').removeClass('open');
            $('.js-header-navbar').removeClass('active');
        }
    });

    /*$('.has-submenu > a').click(function() {
        $(this).next().slideToggle();
        $(this).parent().toggleClass('active-submenu');
    });*/


    $(document).on('click', '.site-tabs-el a',  function() {
        var target = $(this).attr('data-rel');
        $('.site-tabs-el a').removeClass('site-tab-shown');
        $(this).addClass('site-tab-shown');
        $("#" + target).fadeIn('slow').siblings(".site-tab").hide();
        if ($(window).width() < 767) {
            $('html,body').animate({
                scrollTop: $("#tabsArea").offset().top
            }, 'slow');
        }
        return false;
    });


    if ($('.load-row').length) {
        $('.buttonLoadMore').each(function() {
            var loadCount = $(this).parent().prev().find(".load-item").length;
            $(this).attr('data-load-count', loadCount);

            $(this).click(function(e) {
                $(this).parent().prev().find(".load-item:hidden").addClass('load-item-shown');
                if ($(this).parent().prev().find(".load-item:hidden").length < 1) {
                    $(this).removeClass('load-item-shown');
                    $(this).hide();
                }

                var loadCount = $(this).parent().prev().find(".load-item:hidden").length;
                $(this).attr('data-load-count', loadCount);
            });
        });
    }


    $('.filter-btn').click(function() {
        $(this).parent().parent().toggleClass('filter-vs-toggle');
        $(this).parent().next().slideToggle('filter-tGbox');
    });

    $('.filter-tGbox-property-item').click(function() {
        $('.filter-tGbox-property-item').removeClass('property-item-active');
        $(this).addClass('property-item-active');
    });

    $('.reset-filter-btn').click(function() {
        $('.filter-tGbox-property-item').removeClass('property-item-active');
    });


    showTooltip('.link-tooltip', 'map-content-box');
});