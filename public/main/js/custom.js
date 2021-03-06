(function ($) {
    "use strict";
    var tpj = jQuery;
    var revapi24;
    // preloader js //
    jQuery(window).on('load', function () {
        setTimeout(function () {
            jQuery('.jb_preloader').addClass('loaded');
        }, 1000);
    });
    // on ready function
    jQuery(document).ready(function ($) {



        // ===== Scroll to Top ====
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 100) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(200);
            }
        });
        $('#return-to-top').on('click', function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });

        /****--------nice select js---------***/
        $('select').niceSelect();
        /*------ Dropify chart Start ------*/
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('click dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('click dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('click dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
        /*------------------ Dropify chart End -------------*/


        function quick_search() {
            'use strict';
            /* Quik search in header on click function */
            var quikSearch = $("#quik-search-btn");
            var quikSearchRemove = $("#quik-search-remove");
            quikSearch.on('click', function () {
                $('.dez-quik-search').animate({
                    'width': '100%'
                });
                $('.dez-quik-search').delay(500).css({
                    'left': '0'
                });
            });

            quikSearchRemove.on('click', function () {
                $('.dez-quik-search').animate({
                    'width': '0%',
                    'right': '0'
                });
                $('.dez-quik-search').css({
                    'left': 'auto'
                });
            });
            /* Quik search in header on click function End*/
        }
        quick_search();
        // Main Slider Animation

        (function ($) {

            //Function to animate slider captions
            function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function () {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function () {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.carousel-item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel
            $myCarousel.carousel();

            //Animate captions in first slide on page load
            doAnimations($firstAnimatingElems);

            //Pause carousel
            $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event
            $myCarousel.on('click slide.bs.carousel', function (e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });


        })(jQuery);





        /***----- company slider js ----*****/
        $(document).ready(function () {
            $('.top_company_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })

        /***----- testimonial slider js ----*****/
        $(document).ready(function () {
            $('.rivew_testimonial_slider .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1200,
                responsiveClass: true,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })



        /***----- company slider js ----*****/
        $(document).ready(function () {
            $('.client_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })


        //------------ counter-js------------//

        $('.counter_wrapper').on('inview', function (event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.timer').each(function () {
                    var $this = $(this);
                    $({
                        Counter: 0
                    }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).off('inview');
            }
        });


        $('.about_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            smartSpeed: 1200,
            responsiveClass: true,
            navText: ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        });


        /***----- team slider js ----*****/
        $(document).ready(function () {
            $('.team_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1200,
                responsiveClass: true,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })


        //-------- range js--------//

        $("#range-price").slider({
            range: true,
            min: 0,
            max: 10000,
            values: [900, 4000],
            slide: function (event, ui) {
                $("#price").val("IQD " + ui.values[0] + " - " + " IQD" + ui.values[1]);
            }
        });

        $("#price").val("IQD " + $("#range-price").slider("values", 0) +
            " - " + " IQD" + $("#range-price").slider("values", 1));

        // responsive range js //

        $("#responsive_range_price").slider({
            range: true,
            min: 0,
            max: 10000,
            values: [900, 4000],
            slide: function (event, ui) {
                $("#responsive_price").val("IQD " + ui.values[0] + " - " + " $" + ui.values[1]);
            }
        });

        $("#responsive_price").val("IQD " + $("#responsive_range_price").slider("values", 0) +
            " - " + " $" + $("#responsive_range_price").slider("values", 1));



        // ------color change js--------//

        $('.job_adds_right').on('click', function () {
            this.classList.toggle("change");
            $('.ss_menu').slideToggle();
        });



        // ------color change js--------//

        $('.job_adds_right, .index2_adds_right').on('click', function () {
            this.classList.toggle("change22");
            $('.ss_menu').slideToggle();
        });


        /***----- related job slider js ----*****/
        $(document).ready(function () {
            $('.related_product_job .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1200,
                responsiveClass: true,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })


        //--------job spotlight ---------//
        $(document).ready(function () {
            $('.jp_spotlight_slider_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })

        /***----- category job slider js ----*****/
        $(document).ready(function () {
            $('.index_2_category_job .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1200,
                responsiveClass: true,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1200: {
                        items: 5,
                        nav: true,
                    },
                    1500: {
                        items: 7,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })


        $(document).ready(function () {
            $('.jp_first_blog_post_slider .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsiveClass: true,
                smartSpeed: 1200,
                navText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })

        /***----- category job slider js ----*****/
        $(document).ready(function () {
            $('.partner_wrapper .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1200,
                responsiveClass: true,
                navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })


        // Magnific popup-video//
        $('.test-popup-link').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '<div class="mfp-title">Some caption</div>' +
                    '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/ryzOXAO0Ss0'
                    }
                }
            }
            // other options
        });
       
    });
    $('.likeButton').click(function(){
      var ActionRoute = $(this).attr('action-route');
      var ItemType = $(this).attr('item-type');
      var ItemId = $(this).attr('item-id');
      var ItemOwner = $(this).attr('item-owner');
      var UserId = $('meta[name=user_id]').attr("content");
      $.ajax(ActionRoute , {
        type: 'POST',
        data: {
          item_type:ItemType,
          item_id:ItemId,
          user_id:UserId,
          item_owner_id:ItemOwner
        },
        success: function(data , status , xhr){
          $(this).html(data);
        },
        error: function(errorMessage){
          $(this).html(errorMessage);
        }
      })
    });
})(jQuery);
