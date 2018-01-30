/**
 * Script custom for theme
 *
 * TABLE OF CONTENT
 *
 * Header: main menu
 * Header: main menu mobile
 * Sidebar: sticky sidebar
 * Feature: Preloading
 * Feature: Back to top
 * Custom select.
 */
(function ($) {
    "use strict";
    $(document).ready(function () {
        thim_startertheme.ready();
    });

    $(window).load(function () {
        thim_startertheme.load();

    });

    var thim_startertheme = {

        /**
         * Call functions when document ready
         */
        ready: function () {
            this.header_menu();
            this.back_to_top();
            this.feature_preloading();
            this.sticky_sidebar();
            this.custom_select();
            this.contactform7();
            this.thim_blog_auto_height();
        },

        /**
         * Call functions when window load.
         */
        load: function () {
            this.header_menu_mobile();
            this.parallax();
            // this.thim_post_gallery();
            this.thim_testimonial_owl();
        },

        // CUSTOM FUNCTION IN BELOW
        thim_post_gallery: function () {
            $('article.format-gallery .flexslider').imagesLoaded(function () {
                $('.flexslider').flexslider({
                    slideshow: true,
                    animation: 'fade',
                    pauseOnHover: true,
                    animationSpeed: 400,
                    smoothHeight: true,
                    directionNav: true,
                    controlNav: false
                });
            });
        },


        /**
         * Mobile menu
         */
        header_menu_mobile: function () {
            $(document).on('click', '.menu-mobile-effect', function (e) {
                e.stopPropagation();
                $('.responsive #wrapper-container').toggleClass('mobile-menu-open');
            });

            $(document).on('click', '.mobile-menu-open #main-content', function () {
                $('.responsive #wrapper-container.mobile-menu-open').removeClass('mobile-menu-open');
            });

            $('.navbar>li.menu-item-has-children >a,.navbar-nav>li.menu-item-has-children >span').after('<span class="icon-toggle"><i class="fa fa-angle-down"></i></span>');
            $('.responsive .mobile-menu-container .navbar-nav>li.menu-item-has-children >a').after('<span class="icon-toggle"><i class="fa fa-angle-down"></i></span>');

            $('.responsive .mobile-menu-container .navbar-nav>li.menu-item-has-children .icon-toggle').on('click', function () {
                if ($(this).next('ul.sub-menu').is(':hidden')) {
                    $(this).next('ul.sub-menu').slideDown(200, 'linear');
                    $(this).html('<i class="fa fa-angle-up"></i>');
                } else {
                    $(this).next('ul.sub-menu').slideUp(200, 'linear');
                    $(this).html('<i class="fa fa-angle-down"></i>');
                }
            });
        },

        /**
         * Header menu sticky, scroll, v.v.
         */
        /*header_menu: function () {
            var $header = $('#masthead.sticky-header'),
                $navigation = $('#masthead.sticky-header .navigation'),
                $header_v1 = $('#masthead.sticky-header .header-v1'),
                off_Top = ( $('#wrapper-container').length > 0 ) ? $('#wrapper-container').offset().top : 0,
                menuH = $header.outerHeight(),
                navH = $navigation.outerHeight(),
                latestScroll = 0,
                startFixed = 2;
            if ($header.length) {
                $header.css({
                    'padding-bottom': 0
                });
                $navigation.css({
                    'top': $header_v1.outerHeight()
                });
            }

            $(window).scroll(function () {
                var current = $(this).scrollTop();
                if (current > menuH) {
                    $header.removeClass('affix-top').addClass('affix').removeClass('menu-show');
                    $header.css({
                        'padding-bottom': 0
                    });
                    $navigation.css({
                        top: off_Top
                    });
                } else {
                    $header.removeClass('affix').addClass('affix-top').addClass('no-transition');
                    $header.css({
                        'padding-bottom': navH
                    });
                    $navigation.css({
                        top: $header_v1.outerHeight()
                    });
                }

                if (current > latestScroll && current > menuH * 2) {
                    if (!$header.hasClass('menu-hidden')) {
                        $header.addClass('menu-hidden').removeClass('menu-show').removeClass('no-transition');
                        $navigation.css({
                            top: off_Top
                        });
                    }
                } else {
                    if ($header.hasClass('menu-hidden')) {
                        $header.removeClass('menu-hidden').addClass('menu-show');
                        $navigation.css({
                            top: off_Top
                        });
                    }
                }

                latestScroll = current;
            });

            $('#masthead .navbar > .menu-item-has-children, .navbar > li ul li').hover(
                function () {
                    $(this).children('.sub-menu').stop(true, false).slideDown(250);
                },
                function () {
                    $(this).children('.sub-menu').stop(true, false).slideUp(250);
                }
            );
        },*/

        header_menu: function () {
            var $header = $('#masthead.sticky-header'),
                $header_v1 = $('#masthead.sticky-header .header-v1 '),
                off_Top = ( $('#wrapper-container').length > 0 ) ? $('#wrapper-container').offset().top : 0,
                $topbar = $('#masthead.sticky-header .menu-main'),
                $menu_main_navigation = $('#masthead.sticky-header .menu-main .menu-main-navigation'),
                $primary_menu = $('#masthead.sticky-header .menu-main .container .width-navigation .inner-navigation .navbar'),
                menuH = $header.outerHeight(),
                latestScroll = 0,
                startFixed = 2,
                header_v1_height = $header_v1.outerHeight();
                $topbar.height($menu_main_navigation.outerHeight(true));
            if ($topbar.length) {
                if ($topbar.hasClass('style-overlay')) {
                    $header.css({
                        'position': 'inherit'
                    });
                }
                startFixed = $header_v1.outerHeight(true) + $menu_main_navigation.outerHeight(true);
            }

            $(window).scroll(function () {
                var current = $(this).scrollTop();
                if (current > startFixed) {
                    $header.removeClass('no-transition');
                    // $header.removeClass('affix-top').addClass('affix');
                    $header.css({});
                } else {
                    $header.addClass('no-transition');
                    if (current = $header_v1.outerHeight(true)-$menu_main_navigation.outerHeight(true)) {
                        $menu_main_navigation.css({
                            top:0,
                            'position': 'absolute'
                        });
                    }
                    if (screen.width < 769) {
                        if (current < $header_v1.outerHeight(true)+50) {
                            $header.css({
                                top:0,
                                'position': 'inherit'
                            });
                        }
                    }
                    // $header.removeClass('affix').addClass('affix-top');
                    if ($topbar.length > 0) {
                        if ($topbar.hasClass('style-overlay')) {
                            $header.css({
                                // top: $topbar.outerHeight() + 'px'
                            });
                        } else {
                            $header.css({
                                top: 0
                            });
                        }
                    }
                }

                if (current > latestScroll && current > menuH + off_Top) {
                    if (!$header.hasClass('menu-hidden')) {
                        $header.addClass('menu-hidden');
                        $header.css({
                            // top: off_Top
                        });
                        $menu_main_navigation.css({
                            'position': 'absolute',
                            top:0
                            // top: -($topbar.outerHeight()) + 'px'
                        });
                        if (screen.width < 769) {
                            $header.css({
                                'position':'inherit',
                                top: -($header_v1.outerHeight(true)) + 'px'
                            });
                        }
                    }
                } else {
                    if ($header.hasClass('menu-hidden')) {
                        $header.removeClass('menu-hidden');
                        $header.css({
                            // top: off_Top
                        });
                        $menu_main_navigation.css({
                            'position': 'fixed',
                            top: off_Top
                        });
                        if (screen.width < 769) {
                            $header.css({
                                'position': 'fixed',
                                top: off_Top
                            });
                        }
                    }
                }

                latestScroll = current;
            });

        },
        /**
         * Back to top
         */
        back_to_top: function () {
            var $element = $('#back-to-top');
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $element.addClass('scrolldown').removeClass('scrollup');
                } else {
                    $element.addClass('scrollup').removeClass('scrolldown');
                }
            });

            $element.on('click', function () {
                $('html,body').animate({scrollTop: '0px'}, 800);
                return false;
            });
        },

        /**
         * Sticky sidebar
         */
        sticky_sidebar: function () {
            var offsetTop = 20;

            if ($("#wpadminbar").length) {
                offsetTop += $("#wpadminbar").outerHeight();
            }
            if ($("#masthead.affix").length) {
                offsetTop += $("#masthead.affix").outerHeight();
            }

            if ($('.sticky-sidebar').length > 0) {
                $("aside.sticky-sidebar").theiaStickySidebar({
                    "containerSelector": "",
                    "additionalMarginTop": offsetTop,
                    "additionalMarginBottom": "0",
                    "updateSidebarHeight": false,
                    "minWidth": "768",
                    "sidebarBehavior": "modern"
                });
            }

        },

        /**
         * Parallax init
         */
        parallax: function () {
            $(window).stellar({
                horizontalOffset: 0,
                verticalOffset: 0
            });
        },

        /**
         * feature: Preloading
         */
        feature_preloading: function () {
            var $preload = $('#thim-preloading');
            if ($preload.length > 0) {
                $preload.fadeOut(1000, function () {
                    $preload.remove();
                });
            }
        },


        /**
         * Custom select
         */
        custom_select: function () {
            $('select').select2({
                minimumResultsForSearch: Infinity
            });
        },


        /**
         * Custom effect and UX for contact form.
         */
        contactform7: function () {
            $(".wpcf7-submit").on('click', function () {
                $(this).css("opacity", 0.2);
                $(this).parents('.wpcf7-form').addClass('processing');
                $('input:not([type=submit]), textarea').attr('style', '');
            });

            $(document).on('spam.wpcf7', function () {
                $(".wpcf7-submit").css("opacity", 1);
                $('.wpcf7-form').removeClass('processing');
            });

            $(document).on('invalid.wpcf7', function () {
                $(".wpcf7-submit").css("opacity", 1);
                $('.wpcf7-form').removeClass('processing');
            });

            $(document).on('mailsent.wpcf7', function () {
                $(".wpcf7-submit").css("opacity", 1);
                $('.wpcf7-form').removeClass('processing');
            });

            $(document).on('mailfailed.wpcf7', function () {
                $(".wpcf7-submit").css("opacity", 1);
                $('.wpcf7-form').removeClass('processing');
            });

            $('body').on('click', 'input:not([type=submit]).wpcf7-not-valid, textarea.wpcf7-not-valid', function () {
                $(this).removeClass('wpcf7-not-valid');
            });
        },


        /**
         * Blog auto height
         */
        thim_blog_auto_height: function () {
            var $blog = $('.blog .blog-content article, .archive .blog-content article'),
                maxHeight = 0,
                setH = true;

            // Get max height of all items.
            $blog.each(function () {
                setH = $(this).hasClass('column-1') ? false : true;
                if (maxHeight < $(this).find('.content-inner').height()) {
                    maxHeight = $(this).find('.content-inner').height();
                }
            });

            // Set height for all items.
            if (maxHeight > 0 && setH) {
                $blog.each(function () {
                    $(this).find('.content-inner').css('height', maxHeight);
                });
            }
        },


        thim_testimonial_owl: function () {
            $('.thim-testimonials').owlCarousel({
                items: 1,
                autoPlay: 4000,
                stopOnHover: true,
                pagination: true,
                mousewheel: true,
                autoHeight: false,
            });
        }
    };
    $('#load-more-content').hide();
    $(document).on('click', '#btn-load-more-post', function () {
        var that = $(this);
        var numberPage = that.data('page');
        var offPage = that.data('offset-page');
        var catID = that.data('categoryid');
        var count = offPage + 1;
        $('#load-more-content').show();
        $('#btn-load-more-post').hide();
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                cateID: catID,
                offset_page: offPage,
                page: numberPage,
                action: 'thim_load_more_post'
            },
            error: function (response) {
                console.log(response);
            }
            ,
            success: function (response) {
                that.data('offset-page', count);
                setTimeout(function () {
                    $('#load-more-content').hide();
                    $('#btn-load-more-post').show();
                    $('#thim-post-container').append(response);
                }, 750);
            }
        })
        ;
    });
    $('#thim-post-container').find("article:odd").find(".entry-top").css("order", "2");
})(jQuery);