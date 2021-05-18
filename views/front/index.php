<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("../../config.php"); ?>


<!doctype html>
<html lang="en-US">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>L'Artisto</title>
  <meta name='robots' content='max-image-preview:large' />
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel='dns-prefetch' href='http://s.w.org/' />
  <link rel="alternate" type="application/rss+xml"
    title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Feed" href="feed/index.html" />
  <link rel="alternate" type="application/rss+xml"
    title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
  <script>
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "http:\/\/wandau.themezinho.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7"
      }
    };
    ! function (e, a, t) {
      var n, r, o, i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        var a = String.fromCharCode;
        p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
        e = i.toDataURL();
        return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
      }

      function c(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
      }
      for (o = Array("flag", "emoji"), t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
        if (!p || !p.fillText) return !1;
        switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
          case "flag":
            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826,
              55356, 56819
            ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421,
              56128, 56430, 56128, 56423, 56128, 56447
            ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430,
              8203, 56128, 56423, 8203, 56128, 56447
            ]);
          case "emoji":
            return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
        }
        return !1
      }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
        .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
      t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
        .readyCallback = function () {
          t.DOMReady = !0
        }, t.supports.everything || (n = function () {
          t.readyCallback()
        }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (
          e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
            "complete" === a.readyState && t.readyCallback()
          })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
          .wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <style>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='wp-block-library-css' href='../../assets/css/style.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='contact-form-7-css' href='../../assets/css/styles91d5.css?ver=5.4' media='all' />
  <link rel='stylesheet' id='cinzel-google-fonts-css'
    href='https://fonts.googleapis.com/css?family=Cinzel%3A400%2C600&amp;ver=5.7' media='all' />
  <link rel='stylesheet' id='dm-sans-google-fonts-css'
    href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C500%2C700&amp;ver=5.7' media='all' />
  <link rel='stylesheet' id='fontawesome-css' href='../../assets/css/fontawesome.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='fancybox-css' href='../../assets/css/fancybox.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='odometer-css' href='../../assets/css/odometer.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='swiper-css' href='../../assets/css/swiper.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='bootstrap-css' href='../../assets/css/bootstrap.mine23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='wandau-main-style-css' href='../../assets/css/stylee23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='wandau-stylesheet-css' href='../../assets/css/stylee23c.css?ver=5.7' media='all' />
  <link rel='stylesheet' id='elementor-icons-css' href='../../assets/css/elementor-icons.min21f9.css?ver=5.11.0'
    media='all' />
  <link rel='stylesheet' id='elementor-animations-css' href='../../assets/css/animations.minaeb9.css?ver=3.1.4'
    media='all' />
  <link rel='stylesheet' id='elementor-frontend-css' href='../../assets/css/frontend.minaeb9.css?ver=3.1.4'
    media='all' />
  <link rel='stylesheet' id='elementor-post-11-css' href='../../assets/css/post-116667.css?ver=1615475306'
    media='all' />
  <link rel='stylesheet' id='elementor-global-css' href='../../assets/css/global4183.css?ver=1615475307' media='all' />
  <link rel='stylesheet' id='elementor-post-6-css' href='../../assets/css/post-6c650.css?ver=1615737723' media='all' />
  <link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7'
    media='all' />
  <script id='comments-js-extra'>
    var comment_data = {
      "name": "Name is required",
      "email": "Email is required",
      "comment": "Comment is required"
    };
  </script>
  <script src="https://kit.fontawesome.com/127608eadc.js" crossorigin="anonymous"></script>

  <script src='../../assets/js/commentse23c.js?ver=5.7' id='comments-js'></script>
  <script src='../../assets/js/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
  <script src='../../assets/js/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
  <link rel="https://api.w.org/" href="wp-json/index.html" />
  <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/6.json" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.7" />
  <link rel="canonical" href="index.php" />
  <link rel='shortlink' href='index.php' />
  <link rel="alternate" type="application/json+oembed"
    href="wp-json/oembed/1.0/embed587b.json?url=http%3A%2F%2Fwandau.themezinho.net%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="wp-json/oembed/1.0/embed4915?url=http%3A%2F%2Fwandau.themezinho.net%2F&amp;format=xml" />
  <style>
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
  </style>
  <link rel="icon" href="wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-32x32.png" sizes="32x32" />
  <link rel="icon" href="../../assets/img/cropped-apple-touch-icon-144-precomposed-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="../../assets/img/cropped-apple-touch-icon-144-precomposed-180x180.png" />
  <meta name="msapplication-TileImage"
    content="http://wandau.themezinho.net/wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-270x270.png" />
</head>

<body
  class="home page-template page-template-page-builder page-template-page-builder-php page page-id-6 elementor-default elementor-kit-11 elementor-page elementor-page-6">
  <div class="preloader" id="preloader">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path
        d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z">
      </path>
    </svg>
    <div class="inner">
      <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
      <figure><img src="../../assets/img/preloader.png" alt="Wandau | Art &amp; History Museum WordPress Theme">
      </figure>
      <small>LOADING</small>
    </div>
    <!-- end inner -->
  </div>
  <!-- end preloder -->
  <div class="page-transition">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path
        d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z">
      </path>
    </svg>
  </div>
  <!-- end page-transition -->
  <div class="smooth-scroll">
    <div class="section-wrapper" data-scroll-section>
      <div class="search-box">
        <div class="container">
          <div class="form">
            <h3>SEARCH EVENT</h3>
            <form action="http://wandau.themezinho.net/">
              <input type="search" placeholder="What are you looking for ?" value="" name="s" id="s">
              <input type="submit" value="SEARCH">
            </form>
          </div>
          <!-- end form -->
        </div>
      </div>
      <!-- end search-box -->
      <aside class="side-widget">
        <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
          <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
        </svg>
        <figure class="logo"> <img src="../../assets/img/logo-light.png"
            alt="Wandau | Art &amp; History Museum WordPress Theme"> </figure>
        <!-- end logo -->
        <div class="inner">
          <div class="widget_text widget aside">
            <div class="textwidget custom-html-widget">
              <figure><img src="../../assets/img/us.png" alt="Image"></figure>
              <p>This project was developed by <strong>EXCELL TEAM</strong> as their second year web project the theme
                is <u>Art &amp; Culture</u>. Briefly the project will be EPIC !</p>
            </div>
          </div>
          <div class="widget_text widget aside">
            <h6 class="widget-title">The Team</h6>
            <div class="textwidget custom-html-widget">
              <p>Rayen BOURGUIBA<br>Walid MAALEJ<br>Yasmine BEN ABDA<br>Cyrine ESSID<br>
                Riham MATOUSSI</p>
            </div>
          </div>
        </div>
        <!-- end inner -->
        <div class="display-mobile">
          <div class="custom-menu">
            <ul>
              <li> <a href="#">Eng</a> </li>
              <li> <a href="#">Fr</a> </li>
            </ul>
          </div>
          <!-- end custom-menu -->
          <div class="site-menu">
            <ul id="menu-main-menu" class="menu">
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
                  href="visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                  title="Exhibitions" href="exhibitions/index.html" class="nav-link"
                  data-text="Exhibitions">Exhibitions</a><i></i></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                  title="Collections" href="collections/index.html" class="nav-link"
                  data-text="Collections">Collections</a><i></i></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About"
                  href="about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a
                  title="Contact" href="contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
            </ul>
          </div>
          <!-- end site-menu -->
        </div>
        <!-- end display-mobile -->
      </aside>
      <!-- end side-widget -->

      <nav class="navbar">
        <div class="logo"> <a href="index.php"> <img src="../../assets/img/logo.png"
              alt="Wandau | Art &amp; History Museum WordPress Theme"></a></div>
        <div class="custom-menu">

        </div>
        <div class="site-menu">
          <ul id="menu-main-menu-1" class="nav-menu">
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
                href="visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                title="Exhibitions" href="exhibitions/index.html" class="nav-link"
                data-text="Exhibitions">Exhibitions</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                title="Collections" href="collections/index.html" class="nav-link"
                data-text="Collections">Collections</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="Blog"
                href="blog.php" class="nav-link" data-text="Blog">Blog</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact"
                href="contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
          </ul>
        </div>
        <div class="search-button"> <i class="fas fa-search"></i> </div>
        <!-- end search-button -->



        <div class="hamburger-menu">
          <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
            <path class="line line-top" d="M0,9h30" />
            <path class="line line-center" d="M0,15h30" />
            <path class="line line-bottom" d="M0,21h30" />
          </svg>
        </div>
        <!-- end hamburger-menu -->
        <!-- end navbar-button -->

        <?php
            $curr_page = basename(__FILE__);
            require_once("./includes/registration.php");
  ?>



      </nav>
      <div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6"
        data-elementor-settings="[]">
        <div class="elementor-section-wrap">
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ff1c2ee elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle"
            data-id="ff1c2ee" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-49634e2"
                data-id="49634e2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-68c3b69 elementor-widget elementor-widget-header-slider"
                    data-id="68c3b69" data-element_type="widget" data-widget_type="header-slider.default">
                    <div class="elementor-widget-container">
                      <header class="slider">
                        <div class="swiper-container slider-images">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide" data-background="../../assets/img/slide01.png">
                              <div class="mobile-slide"
                                data-background="http://wandau.themezinho.net/wp-content/uploads/2021/03/slide-mobile01.jpg">
                              </div>
                            </div>
                            <div class="swiper-slide"
                              data-background="http://wandau.themezinho.net/wp-content/uploads/2021/03/slide02.jpg">
                              <div class="mobile-slide"
                                data-background="http://wandau.themezinho.net/wp-content/uploads/2021/03/slide-mobile02.jpg">
                              </div>
                            </div>
                            <div class="swiper-slide"
                              data-background="http://wandau.themezinho.net/wp-content/uploads/2021/03/slide03.jpg">
                              <div class="mobile-slide"
                                data-background="http://wandau.themezinho.net/wp-content/uploads/2021/03/slide-mobile03.jpg">
                              </div>
                            </div>
                          </div>
                          <!-- end swiper-wrapper -->

                          <div class="container-fluid slider-nav">
                            <div class="swiper-pagination"></div>
                            <!-- end swiper-pagination -->
                            <div class="swiper-fraction"></div>
                            <!-- end swiper-fraction -->
                            <div class="button-prev"><i class="fas fa-chevron-down"></i></div>
                            <!-- end swiper-button-prev -->
                            <div class="button-next"><i class="fas fa-chevron-up"></i></div>
                            <!-- end swiper-button-next -->
                            <!-- end swiper-button-next -->
                          </div>
                          <!-- end slider-nav -->
                        </div>
                        <!-- end slider-images -->
                        <div class="swiper-container slider-texts">
                          <svg width="580" height="400" class="svg-morph">
                            <path id="svg_morph"
                              d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
                          </svg>
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="container-fluid">
                                <h1>SELL & BUY<br>ART PRODUCTS </h1>
                                <p>Valorize your art products <br>Sell them to the right clients.</p>
                              </div>
                              <!-- end container -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                              <div class="container-fluid">
                                <h1>HOST AND REGISTER <br>EVENTS</h1>
                                <p>Make your work stand host your event <br> and invite people to join.</p>
                              </div>
                              <!-- end container -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                              <div class="container-fluid">
                                <h1>GAIN MORE KNOWLEDGE <br>
                                  THROUGH OUR BLOG </h1>
                                <p>Share & Write abour your passion of culture and art<br>
                                  Inform & Inspire.</p>
                              </div>
                              <!-- end container -->
                            </div>
                            <!-- end swiper-slide -->
                          </div>
                          <!-- end swiper-wrapper -->
                        </div>
                        <!-- end slider-texts -->
                        <div class="play-now"> <a href="wp-content/uploads/2021/03/video.mp4" data-fancybox
                            data-width="640" data-height="360" class="play-btn"></a>
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px"
                            viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                            <defs>
                              <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                            </defs>
                            <circle cx="150" cy="100" r="75" fill="none" />
                            <g>
                              <use xlink:href="#circlePath" fill="none" />
                              <text>
                                <textPath xlink:href="#circlePath">PLAY NOW - PLAY NOW - PLAY NOW -</textPath>
                              </text>
                            </g>
                          </svg>
                        </div>
                        <!-- end play-now -->
                      </header>
                      <!-- end slider -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0c1a65e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0c1a65e" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fc1b281"
                data-id="fc1b281" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-8c6fdd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="8c6fdd4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bf19bf3"
                        data-id="bf19bf3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-4e0e17b elementor-widget elementor-widget-section-title"
                            data-id="4e0e17b" data-element_type="widget" data-widget_type="section-title.default">
                            <div class="elementor-widget-container">
                              <div class="section-title text-center">
                                <div class="icon"><img src="../../assets/img/title-shape.png"
                                    alt="Art Inspiration of 19th Century"></div>
                                <h2>This Week's Event</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-618d4af elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="618d4af" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-763bd8a"
                        data-id="763bd8a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-7049a96 elementor-widget elementor-widget-side-image"
                            data-id="7049a96" data-element_type="widget" data-widget_type="side-image.default">
                            <div class="elementor-widget-container">
                              <figure class="side-image " data-scroll data-scroll-speed="-1"> <img
                                  src="../../assets/img/side-imag01.jpg" alt="Image"></figure>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58210c9"
                        data-id="58210c9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-1219c85 elementor-widget elementor-widget-side-icon-list"
                            data-id="1219c85" data-element_type="widget" data-widget_type="side-icon-list.default">
                            <div class="elementor-widget-container">
                              <div class="side-icon-list right-side">
                                <ul>
                                  <li>
                                    <figure> <img src="../../assets/img/icon01.png" alt="Opening times"> </figure>
                                    <div class="content">
                                      <h5>Opening times</h5>
                                      <p>From 27 August<br>
                                        Thursday – Sunday: 11.00-19.00</p>
                                    </div>
                                    <!-- end content -->
                                  </li>
                                  <li>
                                    <figure> <img src="../../assets/img/icon02.png" alt="Book Online"> </figure>
                                    <div class="content">
                                      <h5>Book Online</h5>
                                      <p>Some exhibitions and events carry<br>
                                        a separate charge

                                        <a href="#">Join Now and Book Online</a>
                                      </p>
                                    </div>
                                    <!-- end content -->
                                  </li>
                                  <li>
                                    <figure> <img src="../../assets/img/icon03.png" alt="Where You Visit"> </figure>
                                    <div class="content">
                                      <h5>Where You Visit</h5>
                                      <p>Cromwell New Street Road<br>
                                        London, SW7 2RL</p>
                                    </div>
                                    <!-- end content -->
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-147b101 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="147b101" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0099921"
                data-id="0099921" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-e9e908c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e9e908c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d6f8988"
                        data-id="d6f8988" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-ab91a65 elementor-widget elementor-widget-section-title"
                            data-id="ab91a65" data-element_type="widget" data-widget_type="section-title.default">
                            <div class="elementor-widget-container">
                              <div class="section-title text-left">
                                <div class="icon"><img src="../../assets/img/title-shape.png" alt="Upcoming Events">
                                </div>
                                <h6>DON’T MISS THE OPPORTUNITY</h6>
                                <h2>Upcoming Events</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-c9be9db elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c9be9db" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f5943fe"
                        data-id="f5943fe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-75286f5 elementor-widget elementor-widget-exhibitions"
                            data-id="75286f5" data-element_type="widget" data-widget_type="exhibitions.default">
                            <div class="elementor-widget-container">
                              <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                  <div class="exhibition-box" data-scroll data-scroll-speed="0.5">
                                    <div class="thumb"> <a href="exhibition/rome-city-and-empire/index.html"><img
                                          src="../../assets/img/event09.jpg" alt="Image" class="img"></a>
                                      <div class="info">
                                        <figure class="i"><img src="../../assets/img/icon-info.png" alt="Image">
                                        </figure>
                                        <span>50% off exhibitions</span>
                                      </div>
                                      <!-- end info -->
                                    </div>
                                    <div class="content-box">
                                      <h4><a href="exhibition/rome-city-and-empire/index.html">Rome: city and empire</a>
                                      </h4>
                                      <p>15 August – 31 October 2020 </p>
                                    </div>
                                    <!-- end content-box -->
                                  </div>
                                  <!-- end col-6 -->

                                </div>
                                <div class="col-lg-4 col-md-6">
                                  <div class="exhibition-box" data-scroll data-scroll-speed="0.5">
                                    <div class="thumb"> <a href="exhibition/a-ming-emperors-kingdom/index.html"><img
                                          src="../../assets/img/event08.jpg" alt="Image" class="img"></a>
                                      <div class="info">
                                        <figure class="i"><img src="../../assets/img/icon-info.png" alt="Image">
                                        </figure>
                                        <span>50% off exhibitions</span>
                                      </div>
                                      <!-- end info -->
                                    </div>
                                    <div class="content-box">
                                      <h4><a href="exhibition/a-ming-emperors-kingdom/index.html">A Ming Emperor’s
                                          Kingdom</a></h4>
                                      <p>15 August – 31 October 2020 </p>
                                    </div>
                                    <!-- end content-box -->
                                  </div>
                                  <!-- end col-6 -->

                                </div>
                                <div class="col-lg-4 col-md-6">
                                  <div class="exhibition-box" data-scroll data-scroll-speed="0.5">
                                    <div class="thumb"> <a
                                        href="exhibition/living-with-art-picasso-to-celmins/index.html"><img
                                          src="../../assets/img/event07.jpg" alt="Image" class="img"></a>
                                      <div class="info">
                                        <figure class="i"><img src="../../assets/img/icon-info.png" alt="Image">
                                        </figure>
                                        <span>51% off exhibitions</span>
                                      </div>
                                      <!-- end info -->
                                    </div>
                                    <div class="content-box">
                                      <h4><a href="exhibition/living-with-art-picasso-to-celmins/index.html">Living with
                                          art Picasso to Celmins</a></h4>
                                      <p>15 August – 31 October 2020 </p>
                                    </div>
                                    <!-- end content-box -->
                                  </div>
                                  <!-- end col-6 -->

                                </div>
                                <div class="col-12 text-center"> <a href="exhibitions/index.html"
                                    class="custom-button">VIEW ALL UPCOMING EVENTS</a> </div>


                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-c7eafa2 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="c7eafa2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50586d0"
                data-id="50586d0" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-828a444 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="828a444" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a0eca36"
                        data-id="a0eca36" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-77bd0fc elementor-widget elementor-widget-section-title"
                            data-id="77bd0fc" data-element_type="widget" data-widget_type="section-title.default">
                            <div class="elementor-widget-container">
                              <div class="section-title text-center">
                                <div class="icon"><img src="../../assets/img/title-shape.png"
                                    alt="Art Inspiration of 19th Century"></div>
                                <h2>Art Inspiration of 19th Century</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-c563f32 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c563f32" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1199fa4"
                        data-id="1199fa4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-2820d41 elementor-widget elementor-widget-text-description"
                            data-id="2820d41" data-element_type="widget" data-widget_type="text-description.default">
                            <div class="elementor-widget-container">
                              <div class="text-content" data-scroll data-scroll-speed="-1">
                                <h6>The challenge</h6>
                                <p>In the 1980s, “the UK’s national museums faced political pressure from the
                                  Conservative government to charge for admission, to make them less dependent on
                                  government funding".</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f70db04"
                        data-id="f70db04" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-0ca0639 elementor-widget elementor-widget-text-description"
                            data-id="0ca0639" data-element_type="widget" data-widget_type="text-description.default">
                            <div class="elementor-widget-container">
                              <div class="text-content" data-scroll data-scroll-speed="0.5">
                                <h6>The initiative</h6>
                                <p>In 1997, the new Labour government made a commitment to reinstate free entry
                                  for national museums in order to have a more diverse range of visitors. “Following a
                                  campaign led by the museums themselves,</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78a7f15"
                        data-id="78a7f15" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-a67abab elementor-widget elementor-widget-text-description"
                            data-id="a67abab" data-element_type="widget" data-widget_type="text-description.default">
                            <div class="elementor-widget-container">
                              <div class="text-content" data-scroll data-scroll-speed="1">
                                <h6>The impact</h6>
                                <p>The national museums which dropped charges all saw substantial increases to their
                                  visitor numbers, an average of 70 percent. In the first year after free admission was
                                  introduced visitor figures.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-e3bdb33 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="e3bdb33" data-element_type="section"
                    data-settings="{&quot;shape_divider_bottom&quot;:&quot;waves&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                        <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
                      </svg> </div>
                    <div class="elementor-container elementor-column-gap-no">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e3b958f"
                        data-id="e3b958f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-a6e06f5 elementor-widget elementor-widget-horizontal-image-scroll"
                            data-id="a6e06f5" data-element_type="widget"
                            data-widget_type="horizontal-image-scroll.default">
                            <div class="elementor-widget-container">
                              <div class="horizontal-scroll">
                                <div class="scroll-inner" data-scroll data-scroll-direction="horizontal"
                                  data-scroll-speed="5">
                                  <div class="scroll-wrapper">
                                    <div class="container-fluid">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <figure class="image-box" data-scroll data-scroll-speed="0"> <img
                                              src="../../assets/img/image01.jpg" alt="Image"> </figure>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-md-4 offset-md-1">
                                          <figure class="image-box" data-scroll data-scroll-speed="0"> <img
                                              src="../../assets/img/image02.jpg" alt="Image"> </figure>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-md-2 offset-md-1">
                                          <figure class="image-box" data-scroll data-scroll-speed="0"> <img
                                              src="../../assets/img/image03.jpg" alt="Image"> </figure>
                                        </div>
                                        <!-- end col-3 -->
                                      </div>
                                      <!-- end row -->
                                    </div>
                                    <!-- end container-fluid -->
                                  </div>
                                  <!-- end scroll-wrapper -->
                                  <div class="scroll-wrapper">
                                    <div class="container-fluid">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <figure class="image-box" data-scroll data-scroll-speed="0"> <img
                                              src="../../assets/img/image04.jpg" alt="Image"> </figure>
                                        </div>
                                        <!-- end col-3 -->
                                      </div>
                                      <!-- end row -->
                                    </div>
                                    <!-- container-fluid -->
                                  </div>
                                  <!-- end scroll-wrapper -->
                                </div>
                                <!-- end scroll-inner -->
                              </div>
                              <!-- end horizontal-scroll -->

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-fa99ca2 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="fa99ca2" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c13724"
                data-id="8c13724" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-08c5cef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="08c5cef" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c165de6"
                        data-id="c165de6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-7d1dd37 elementor-widget elementor-widget-section-title"
                            data-id="7d1dd37" data-element_type="widget" data-widget_type="section-title.default">
                            <div class="elementor-widget-container">
                              <div class="section-title text-center">
                                <div class="icon"><img src="../../assets/img/title-shape.png" alt="3 steps to be safe">
                                </div>
                                <h6>Visit the National Wandau Museum</h6>
                                <h2>3 steps to be safe</h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-37b8450 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="37b8450" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-40fe320"
                        data-id="40fe320" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-4fd1bbe elementor-widget elementor-widget-image-icon-box"
                            data-id="4fd1bbe" data-element_type="widget" data-widget_type="image-icon-box.default">
                            <div class="elementor-widget-container">
                              <div class="image-icon-box" data-scroll data-scroll-speed="-1">
                                <figure class="icon"> <img src="../../assets/img/icon04.png" alt="Image"> </figure>
                                <figure class="content-image"> <img src="../../assets/img/image-content-box01.jpg"
                                    alt="Image"> </figure>
                                <div class="content-box"> <b>.01</b>
                                  <h4>50,000,000$</h4>
                                  <div class="expand">
                                    <p>Your safety is our first priority. Entry to the National Maritime Museum is still
                                      free, but to help us ensure social distancing.</p>
                                    <a href="visit/index.html" class="custom-link">Learn More</a>
                                  </div>
                                  <!-- end expand -->
                                </div>
                                <!-- end content-box -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8cb673b"
                        data-id="8cb673b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-6ad62d9 elementor-widget elementor-widget-image-icon-box"
                            data-id="6ad62d9" data-element_type="widget" data-widget_type="image-icon-box.default">
                            <div class="elementor-widget-container">
                              <div class="image-icon-box" data-scroll data-scroll-speed="0.5">
                                <figure class="icon"> <img src="../../assets/img/icon05.png" alt="Image"> </figure>
                                <figure class="content-image"> <img src="../../assets/img/image-content-box02.jpg"
                                    alt="Image"> </figure>
                                <div class="content-box"> <b>.02</b>
                                  <h4>10,000,000$</h4>
                                  <div class="expand">
                                    <p>Exhibition curator Venetia Porter presents this new exhibition of works by
                                      artists from Iran to Morocco drawn from the Museum collection.</p>
                                    <a href="about/index.html" class="custom-link">Learn More</a>
                                  </div>
                                  <!-- end expand -->
                                </div>
                                <!-- end content-box -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-803131e"
                        data-id="803131e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-07c5aae elementor-widget elementor-widget-image-icon-box"
                            data-id="07c5aae" data-element_type="widget" data-widget_type="image-icon-box.default">
                            <div class="elementor-widget-container">
                              <div class="image-icon-box" data-scroll data-scroll-speed="1">
                                <figure class="icon"> <img src="../../assets/img/icon06.png" alt="Image"> </figure>
                                <figure class="content-image"> <img src="../../assets/img/image-content-box03.jpg"
                                    alt="Image"> </figure>
                                <div class="content-box"> <b>.03</b>
                                  <h4>20,000,000</h4>
                                  <div class="expand">
                                    <p>Take a look at our past exhibitions and enjoy the articles, videos and photo
                                      galleries still available to view online.</p>
                                    <a href="membership/index.html" class="custom-link">Learn More</a>
                                  </div>
                                  <!-- end expand -->
                                </div>
                                <!-- end content-box -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-65c1756 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="65c1756" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a425940"
                data-id="a425940" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-a7b4a18 elementor-widget elementor-widget-art-slider"
                    data-id="a7b4a18" data-element_type="widget" data-widget_type="art-slider.default">
                    <div class="elementor-widget-container">
                      <div class="art-slider">
                        <div class="art-slider-content">
                          <div class="titles">
                            <h6>Art Collection</h6>
                            <h2>History of Barnes</h2>
                          </div>
                          <!-- end titles -->
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"> <span>01</span>
                                <h3>Venus <br>
                                  de Milo</h3>
                              </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <span>02</span>
                                <h3>Les Demoiselles <br>d'Avignon</h3>
                              </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <span>03</span>
                                <h3>Mona<br>Lisa</h3>
                              </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <span>04</span>
                                <h3>L'Arlesienne: <br> Madame Ginoux</h3>
                              </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <span>05</span>
                                <h3>Cuckoo <br> Clocks</h3>
                              </div>
                              <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                          </div>
                          <!-- end swiper-container -->
                        </div>
                        <!-- end art-slider-content -->

                        <div class="art-slider-images" data-scroll data-scroll-speed="1">
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"> <img src="../../assets/img/art-slide01.jpg" alt="Image"> </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <img src="../../assets/img/art-slide01.jpg" alt="Image"> </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <img src="../../assets/img/art-slide03.jpg" alt="Image"> </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <img src="../../assets/img/art-slide04.jpg" alt="Image"> </div>
                              <!-- end swiper-slide -->
                              <div class="swiper-slide"> <img src="../../assets/img/art-slide05.jpg" alt="Image"> </div>
                              <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                          </div>
                          <!-- end swiper-container -->
                        </div>
                        <!-- end art-slider-images -->
                      </div>
                      <!-- end art-slider -->


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f71263c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f71263c" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;http:\/\/wandau.themezinho.net\/wp-content\/uploads\/2021\/03\/video.mp4&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
            <div class="elementor-background-video-container">
              <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline
                loop></video>
            </div>
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a37b7e1"
                data-id="a37b7e1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-ff0b85f elementor-widget elementor-widget-cta-box"
                    data-id="ff0b85f" data-element_type="widget" data-widget_type="cta-box.default">
                    <div class="elementor-widget-container">
                      <div class="cta-box is-inview" data-scroll data-scroll-speed="-1">
                        <h6>JOIN TODAY AND ENJOY UNLIMITED</h6>
                        <h2>exhibitions, Members only and more</h2>
                        <a href="visit/index.html" class="custom-button">BECOME A MEMBER</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
          class="elementor-section elementor-top-section elementor-element elementor-element-4fc5e77 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="4fc5e77" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32ad11c"
              data-id="32ad11c" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <section
                  class="elementor-section elementor-inner-section elementor-element elementor-element-227460c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="227460c" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div
                      class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5e483c7"
                      data-id="5e483c7" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                          class="elementor-element elementor-element-07c32c3 elementor-widget elementor-widget-section-title"
                          data-id="07c32c3" data-element_type="widget" data-widget_type="section-title.default">
                          <div class="elementor-widget-container">
                            <div class="section-title text-center">
                              <div class="icon"><img src="../../assets/img/title-shape.png"
                                  alt="Get Latest Updates and News"></div>
                              <h6>GET LATEST UPDATES AND NEWS</h6>
                              <h2>Our Blog</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section
                  class="elementor-section elementor-inner-section elementor-element elementor-element-f1f032d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="f1f032d" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <?php
                            $sql4 = "SELECT * FROM posts WHERE post_status = :status ORDER BY post_views DESC LIMIT 0, 1";
                            $stmt = $pdo->prepare($sql4);
                            $stmt->execute([
                                ':status' => 'Published'
                            ]);
                            $post = $stmt->fetch(PDO::FETCH_ASSOC);
                            $post_id = $post['post_id'];
                            $post_title = $post['post_title'];
                            $post_detail = substr($post['post_detail'], 0, 300);
                            $post_author = $post['post_author'];
                            $post_date = $post['post_date'];
                            $post_image = $post['post_image'];
              ?>
                    <div
                      class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8c2373d"
                      data-id="8c2373d" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                          class="elementor-element elementor-element-33c66d3 elementor-widget elementor-widget-recent-news"
                          data-id="33c66d3" data-element_type="widget" data-widget_type="recent-news.default">
                          <div class="elementor-widget-container">
                            <div class="row justify-content-center">
                              <div class="col-12">
                                <div class="recent-news">
                                  <div class="content-box"> <small><?php echo $post_date; ?></small>
                                    <h3><?php echo $post_title; ?></h3>
                                    <p><?php echo $post_detail; ?></p>
                                    <a href="single.php?post_id=<?php echo $post_id; ?>" class="custom-link">Continue
                                      reading</a>
                                  </div>
                                  <!-- end content-box -->
                                  <figure data-scroll data-scroll-speed="1">
                                    <img width="923" height="596" src="../../assets/img/<?php echo $post_image; ?>"
                                      class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                      loading="lazy"
                                      srcset="../../assets/img/<?php echo $post_image; ?> 923w, ../../assets/img/<?php echo $post_image; ?> 300w, ../../assets/img/<?php echo $post_image; ?> 768w"
                                      sizes="(max-width: 923px) 100vw, 923px" /> </figure>
                                </div>
                                <!-- end recent-news -->
                              </div>
                              <!-- end col-12 -->


                              <div class="col-12 text-center"> <a href="blog.php" class="circle-button">SEE ALL NEWS</a>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
      <section class="content-section no-spacing" data-background="#F1EDD5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="newsletter-box">
                <div class="form">
                  <div class="titles">
                    <h6>Subscribe Newsletter</h6>
                    <h2>Sign up to get the latest news</h2>
                  </div>
                  <!-- end titles -->
                  <script>
                    (function () {
                      window.mc4wp = window.mc4wp || {
                        listeners: [],
                        forms: {
                          on: function (evt, cb) {
                            window.mc4wp.listeners.push({
                              event: evt,
                              callback: cb
                            });
                          }
                        }
                      }
                    })();
                  </script><!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                  <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-468" method="post" data-id="468" data-name="">
                    <div class="mc4wp-form-fields">
                      <div class="inner">
                        <input type="email" placeholder="Enter your e-mail address">
                        <input type="submit" value="SIGN UP">
                      </div>
                      <small>Will be used in accordance with our
                        <a href="privacy-policy/index.html">Privacy Policy</a></small>
                    </div><label style="display: none !important;">Leave this field empty if you're human: <input
                        type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input
                      type="hidden" name="_mc4wp_timestamp" value="1617619026" /><input type="hidden"
                      name="_mc4wp_form_id" value="468" /><input type="hidden" name="_mc4wp_form_element_id"
                      value="mc4wp-form-1" />
                    <div class="mc4wp-response"></div>
                  </form><!-- / Mailchimp for WordPress Plugin -->
                </div>
                <!-- end form -->
                <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img
                    src="../../assets/img/newsletter-image.png" alt="Sign up to get the latest news"></figure>
              </div>
              <!-- end newsletter-box -->
            </div>
            <!-- end col-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end content-section -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="widget_text widget footer-widget">
                <h6 class="widget-title">About Museum</h6>
                <div class="textwidget custom-html-widget">
                  <ul class="footer-menu">
                    <li><a href="#">About us </a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">National work</a></li>
                    <li><a href="#">International work</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="widget_text widget footer-widget">
                <h6 class="widget-title">Connect Us</h6>
                <div class="textwidget custom-html-widget">
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> /EXCELL</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> /EXCELL</a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i> /EXELL</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="widget_text widget footer-widget">
                <h6 class="widget-title">Visit Us Now</h6>
                <div class="textwidget custom-html-widget">
                  <address class="address">
                    Cromwell Road New Town SW7 <strong>London - England</strong> <i class="fas fa-info-circle"></i> +44
                    (0)20 7942 2000
                  </address>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
        <div class="footer-bottom">
          <div class="container"> <span class="copyright">&copy; 2021 L'ARTISTO</span> <span class="creation">Site
              created by <a href="https://themezinho.net/">EXCELL</a></span> </div>
          <!-- end container -->
        </div>
        <!-- end footer-bottom -->
      </footer>
      <!-- end footer -->
    </div>
  </div>
  <!--<script src="http://code.jivosite.com/widget/lNHgYjgm1A" async></script>-->
  <script>
    (function () {
      function maybePrefixUrlField() {
        if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
          this.value = "http://" + this.value;
        }
      }

      var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
      if (urlFields) {
        for (var j = 0; j < urlFields.length; j++) {
          urlFields[j].addEventListener('blur', maybePrefixUrlField);
        }
      }
    })();
  </script>
  <script src='../../assets/js/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
  <script id='wp-polyfill-js-after'>
    ('fetch' in window) || document.write('<script src="../../assets/js/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' +
      'ipt>');
    (document.contains) || document.write(
      '<script src="../../assets/js/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
    (window.DOMRect) || document.write(
      '<script src="../../assets/js/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
    (window.URL && window.URL.prototype && window.URLSearchParams) || document.write(
      '<script src="../../assets/js/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
    (window.FormData && window.FormData.prototype.keys) || document.write(
      '<script src="../../assets/js/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
    (Element.prototype.matches && Element.prototype.closest) || document.write(
      '<script src="../../assets/js/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>');
    ('objectFit' in document.documentElement.style) || document.write(
      '<script src="../../assets/js/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
  </script>
  <script src='../../assets/js/hooks.minf521.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
  <script src='../../assets/js/i18n.min87d6.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
  <script id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({
      'text direction\u0004ltr': ['ltr']
    });
  </script>
  <script src='../../assets/js/lodash.minf492.js?ver=4.17.19' id='lodash-js'></script>
  <script id='lodash-js-after'>
    window.lodash = _.noConflict();
  </script>
  <script src='../../assets/js/url.minacd8.js?ver=0ac7e0472c46121366e7ce07244be1ac' id='wp-url-js'></script>
  <script id='wp-api-fetch-js-translations'>
    (function (domain, translations) {
      var localeData = translations.locale_data[domain] || translations.locale_data.messages;
      localeData[""].domain = domain;
      wp.i18n.setLocaleData(localeData, domain);
    })("default", {
      "locale_data": {
        "messages": {
          "": {}
        }
      }
    });
  </script>
  <script src='../../assets/js/api-fetch.minf3b9.js?ver=a783d1f442d2abefc7d6dbd156a44561' id='wp-api-fetch-js'></script>
  <script id='wp-api-fetch-js-after'>
    wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("wp-json/index.html"));
    wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("37d14959a5");
    wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
    wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
    wp.apiFetch.nonceEndpoint = "wp-admin/admin-ajaxf809.html?action=rest-nonce";
  </script>
  <script id='contact-form-7-js-extra'>
    var wpcf7 = [];
  </script>
  <script src='../../assets/js/index91d5.js?ver=5.4' id='contact-form-7-js'></script>
  <script src='../../assets/js/bootstrap.mine23c.js?ver=5.7' id='bootstrap-js'></script>
  <script src='../../assets/js/gsap.mine23c.js?ver=5.7' id='gsap-js'></script>
  <script src='../../assets/js/locomotive-scroll.mine23c.js?ver=5.7' id='locomotive-scroll-js'></script>
  <script src='../../assets/js/ScrollTrigger.mine23c.js?ver=5.7' id='scroll-trigger-js'></script>
  <script src='../../assets/js/kinetic-slidere23c.js?ver=5.7' id='kinetic-slider-js'></script>
  <script src='../../assets/js/fancybox.mine23c.js?ver=5.7' id='fancybox-js'></script>
  <script src='../../assets/js/odometer.mine23c.js?ver=5.7' id='odometer-js'></script>
  <script src='../../assets/js/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
  <script id='wandau-scripts-js-extra'>
    var data = {
      "enable_preloader": "1",
      "enable_smooth_scroll": "1"
    };
  </script>
  <script src='../../assets/js/scriptse23c.js?ver=5.7' id='wandau-scripts-js'></script>
  <script src='../../assets/js/wp-embed.mine23c.js?ver=5.7' id='wp-embed-js'></script>
  <script src='../../assets/js/forms.min7bcd.js?ver=4.8.3' id='mc4wp-forms-api-js'></script>
  <script src='../../assets/js/webpack.runtime.minaeb9.js?ver=3.1.4' id='elementor-webpack-runtime-js'></script>
  <script src='../../assets/js/frontend-modules.minaeb9.js?ver=3.1.4' id='elementor-frontend-modules-js'></script>
  <script src='../../assets/js/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
  <script src='../../assets/js/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
  <script src='../../assets/js/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
  <script src='../../assets/js/share-link.minaeb9.js?ver=3.1.4' id='share-link-js'></script>
  <script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
      "environmentMode": {
        "edit": false,
        "wpPreview": false,
        "isScriptDebug": false,
        "isImprovedAssetsLoading": false
      },
      "i18n": {
        "shareOnFacebook": "Share on Facebook",
        "shareOnTwitter": "Share on Twitter",
        "pinIt": "Pin it",
        "download": "Download",
        "downloadImage": "Download image",
        "fullscreen": "Fullscreen",
        "zoom": "Zoom",
        "share": "Share",
        "playVideo": "Play Video",
        "previous": "Previous",
        "next": "Next",
        "close": "Close"
      },
      "is_rtl": false,
      "breakpoints": {
        "xs": 0,
        "sm": 480,
        "md": 768,
        "lg": 1025,
        "xl": 1440,
        "xxl": 1600
      },
      "version": "3.1.4",
      "is_static": false,
      "experimentalFeatures": {
        "e_dom_optimization": true,
        "a11y_improvements": true,
        "landing-pages": true
      },
      "urls": {
        "assets": "http:\/\/wandau.themezinho.net\/wp-content\/plugins\/elementor\/assets\/"
      },
      "settings": {
        "page": [],
        "editorPreferences": []
      },
      "kit": {
        "global_image_lightbox": "yes",
        "lightbox_enable_counter": "yes",
        "lightbox_enable_fullscreen": "yes",
        "lightbox_enable_zoom": "yes",
        "lightbox_enable_share": "yes",
        "lightbox_title_src": "title",
        "lightbox_description_src": "description"
      },
      "post": {
        "id": 418,
        "title": "Wandau%20%7C%20Art%20%26%20History%20Museum%20WordPress%20Theme%20%E2%80%93%20Just%20another%20WordPress%20site",
        "excerpt": "Learn to tie over 250 knots with step-by-step instructions. Supplied with 4",
        "featuredImage": "http:\/\/wandau.themezinho.net\/wp-content\/uploads\/2021\/03\/recent-news02.jpg"
      }
    };
  </script>
  <script src='../../assets/js/frontend.minaeb9.js?ver=3.1.4' id='elementor-frontend-js'></script>
  <script src='../../assets/js/preloaded-elements-handlers.minaeb9.js?ver=3.1.4' id='preloaded-elements-handlers-js'>
  </script>
</body>

</html>