(function ($) {
  $(document).ready(function () {
    "use strict";


    /* MENU TOGGLE */
    $('.side-widget .site-menu ul li i').on('click', function (e) {
      $(this).parent().children('.side-widget .site-menu ul li ul').toggle();
      return true;
    });


    // ACCORDION
    var allPanels = $('.accordion > dd').hide();
    $('.accordion > dt > a').click(function () {
      $(this).parent().next().slideToggle();
      return false;
    });


    /* HAMBURGER */
    $('.hamburger').on('click', function () {
      $(".hamburger").toggleClass("active")
      $(".side-widget").toggleClass("active")
      $(".section-wrapper").toggleClass("no-transform")
      $("body").toggleClass("overflow")
    })

    /* SEARCH */
    $('.search-button').on('click', function () {
      $(".search-box").toggleClass("active")
      $(".section-wrapper").toggleClass("no-transform")
    })


    /* FOOTER SPACING CONDITION */
    $('.footer:has(.col-lg-4)').addClass('footer-spacing');
    $('.sidebar .widget .gallery-item a').attr('data-fancybox', '');


    // PAGE TRANSITION
    $('body a').on('click', function (e) {
      if ($('body').hasClass('disable-preloader')) {

      } else {

        var target = $(this).attr('target');
        var fancybox = $(this).data('fancybox');
        var url = this.getAttribute("href");
        if (target != '_blank' && typeof fancybox == 'undefined' && url.indexOf('#') < 0) {


          e.preventDefault();
          var url = this.getAttribute("href");
          if (url.indexOf('#') != -1) {
            var hash = url.substring(url.indexOf('#'));


            if ($('body ' + hash).length != 0) {
              $('.page-transition').removeClass("active");


            }
          } else {
            $('.page-transition').toggleClass("active");
            setTimeout(function () {
              window.location = url;
            }, 1000);

          }
        }
      }
    });


    // TAB
    $(".tab-nav li").on('click', function (e) {
      $(".tab-item").hide();
      $(".tab-nav li").removeClass('active');
      $(this).addClass("active");
      var selected_tab = $(this).find("a").attr("href");
      $(selected_tab).stop().show();
      return false;
    });


  });
  // END DOCUMENT READY


  // DATA BACKGROUND IMAGE
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", "url(" + $(this).data("background") + ")");
    }
  });


  // DATA BACKGROUND COLOR
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", $(this).data("background"));
    }
  });


  // IMAGE BOX CAROUSEL
  var swiper = new Swiper('.image-box-carousel', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
    }
  });


  // SLIDER
  var sliderimages = new Swiper('.slider-images', {
    spaceBetween: 0,
    direction: 'vertical',
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    touchRatio: 0,

    pagination: {
      el: '.swiper-fraction',
      type: 'fraction',
    },


    loop: true,
    loopedSlides: 1,
    thumbs: {
      swiper: slidertexts
    }
  });


  // SLIDER THUMBS
  var slidertexts = new Swiper('.slider-texts', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0,
    slideToClickedSlide: false,
    loop: true,
    loopedSlides: 1,

    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },

  });

  if ($(".slider-images")[0]) {
    sliderimages.controller.control = slidertexts;
    slidertexts.controller.control = sliderimages;
  } else {

  }


  // KINETIC TEXTS
  var slidertexts = new Swiper('.kinetic-texts', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0,
    slideToClickedSlide: false,
    loop: true,
    loopedSlides: 1,
    effect: 'fade',
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

  });


  /* COLLECTION SLIDER */


  // SLIDER
  var artsliderimages = new Swiper('.art-slider-images .swiper-container', {
    spaceBetween: 0,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    loop: true,
    loopedSlides: 4,
    thumbs: {
      swiper: artslidercontent
    },
    breakpoints: {
      1024: {
        loopedSlides: 3,
      },
      768: {
        loopedSlides: 2,
      },
      640: {
        loopedSlides: 1
      },
      320: {
        loopedSlides: 1
      }
    }
  });


  // SLIDER THUMBS
  var artslidercontent = new Swiper('.art-slider-content .swiper-container', {
    spaceBetween: 30,
    direction: 'vertical',
    slidesPerView: 4,
    loop: true,
    loopedSlides: 4,
    breakpoints: {
      1024: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 2
      },
      640: {
        slidesPerView: 1
      },
      320: {
        slidesPerView: 1
      }
    }
  });

  if ($(".art-slider-images .swiper-container")[0]) {
    artsliderimages.controller.control = artslidercontent;
    artslidercontent.controller.control = artsliderimages;
  } else {

  }


  // PRELOADER
  if (data.enable_preloader == true) {
    let settings = {
      progressSize: 320,
      progressColor: '#ffffff',
      lineWidth: 2,
      lineCap: 'round',
      preloaderAnimationDuration: 800,
      startDegree: -90,
      finalDegree: 270
    }

    function setAttributes(elem, attrs) {

      for (let key in attrs) {
        elem.setAttribute(key, attrs[key]);
      }

    }

    let preloader = document.createElement('div'),
      canvas = document.createElement('canvas'),
      size;

    (function () {

      let width = window.innerWidth,
        height = window.innerHeight;

      if (width > height) {

        size = Math.min(settings.progressSize, height / 2);

      } else {

        size = Math.min(settings.progressSize, width - 50);

      }

    })();

    setAttributes(preloader, {
      class: "preloader",
      id: 'preloader',
      style: 'transition: opacity ' + settings.preloaderAnimationDuration / 1000 + 's'
    });
    setAttributes(canvas, {
      class: 'progress-bar',
      id: 'progress-bar',
      width: settings.progressSize,
      height: settings.progressSize
    });


    preloader = document.getElementById('preloader');

    let progressBar = document.getElementById('progress-bar'),
      images = document.images,
      imagesAmount = images.length,
      imagesLoaded = 0,
      barCtx = progressBar.getContext('2d'),
      circleCenterX = progressBar.width / 2,
      circleCenterY = progressBar.height / 2,
      circleRadius = circleCenterX - settings.lineWidth,
      degreesPerPercent = 3.6,
      currentProgress = 0,
      showedProgress = 0,
      progressStep = 0,
      progressDelta = 0,
      startTime = null,
      running;

    (function () {

      return requestAnimationFrame
        || mozRequestAnimationFrame
        || webkitRequestAnimationFrame
        || oRequestAnimationFrame
        || msRequestAnimationFrame
        || function (callback) {
          setTimeout(callback, 1000 / 60);
        };

    })();

    Math.radians = function (degrees) {
      return degrees * Math.PI / 180;
    };


    progressBar.style.opacity = settings.progressOpacity;
    barCtx.strokeStyle = settings.progressColor;
    barCtx.lineWidth = settings.lineWidth;
    barCtx.lineCap = settings.lineCap;
    let angleMultiplier = (Math.abs(settings.startDegree) + Math.abs(settings.finalDegree)) / 360;
    let startAngle = Math.radians(settings.startDegree);
    document.body.style.overflowY = 'hidden';
    preloader.style.backgroundColor = settings.preloaderBackground;


    for (let i = 0; i < imagesAmount; i++) {

      let imageClone = new Image();
      imageClone.onload = onImageLoad;
      imageClone.onerror = onImageLoad;
      imageClone.src = images[i].src;

    }

    function onImageLoad() {

      if (running === true) running = false;

      imagesLoaded++;

      if (imagesLoaded >= imagesAmount) hidePreloader();

      progressStep = showedProgress;
      currentProgress = ((100 / imagesAmount) * imagesLoaded) << 0;
      progressDelta = currentProgress - showedProgress;

      setTimeout(function () {

        if (startTime === null) startTime = performance.now();
        running = true;
        animate();

      }, 10);

    }

    function animate() {

      if (running === false) {
        startTime = null;
        return;
      }

      let timeDelta = Math.min(1, (performance.now() - startTime) / settings.preloaderAnimationDuration);
      showedProgress = progressStep + (progressDelta * timeDelta);

      if (timeDelta <= 1) {


        barCtx.clearRect(0, 0, progressBar.width, progressBar.height);
        barCtx.beginPath();
        barCtx.arc(circleCenterX, circleCenterY, circleRadius, startAngle, (Math.radians(showedProgress * degreesPerPercent) * angleMultiplier) + startAngle);
        barCtx.stroke();
        requestAnimationFrame(animate);

      } else {
        startTime = null;
      }

    }

    function hidePreloader() {
      setTimeout(function () {
        $("body").addClass("page-loaded");
        document.body.style.overflowY = '';
      }, settings.preloaderAnimationDuration + 100);
    }
    var resizeTimer;
  }


  // LOCOMOTIVE
  if (data.enable_smooth_scroll == true) {
    gsap.registerPlugin(ScrollTrigger);
    const locoScroll = new LocomotiveScroll({
      el: document.querySelector(".smooth-scroll"),
      smooth: true,
      class: 'is-inview'
    });
    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
    ScrollTrigger.refresh();
  }


  // ODOMETER
  $(".odometer").each(function () {
    $(this).html($(this).data('count'));

  });


})(jQuery);
