<?PHP
require_once "C://wamp64/www/khedmti/config.php";
require_once 'C://wamp64/www/khedmti/entity/adherant.php';
include 'C:/wamp64/www/Khedmti/controller/adhC.php';
session_start(); 
?>



<!doctype html>
<html lang="en-US">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title>About &#8211; Wandau | Art &amp; History Museum WordPress Theme</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:////s.w.org//images//core//emoji//13.0.1//72x72//","ext":".png","svgUrl":"https:////s.w.org//images//core//emoji//13.0.1//svg//","svgExt":".svg","source":{"concatemoji":"http:////wandau.themezinho.net//wp-includes//js//wp-emoji-release.min.js?ver=5.7"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
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
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles91d5.css?ver=5.4' media='all' />
<link rel='stylesheet' id='cinzel-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Cinzel%3A400%2C600&amp;ver=5.7' media='all' />
<link rel='stylesheet' id='dm-sans-google-fonts-css'  href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C500%2C700&amp;ver=5.7' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='../wp-content/themes/wandau/css/fontawesome.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='../wp-content/themes/wandau/css/fancybox.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='odometer-css'  href='../wp-content/themes/wandau/css/odometer.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='swiper-css'  href='../wp-content/themes/wandau/css/swiper.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/wandau/css/bootstrap.mine23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='wandau-main-style-css'  href='../wp-content/themes/wandau/css/stylee23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='wandau-stylesheet-css'  href='../wp-content/themes/wandau/stylee23c.css?ver=5.7' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='../wp-content/plugins/elementor/assets/lib/animations/animations.minaeb9.css?ver=3.1.4' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='../wp-content/plugins/elementor/assets/css/frontend.minaeb9.css?ver=3.1.4' media='all' />
<link rel='stylesheet' id='elementor-post-11-css'  href='../wp-content/uploads/elementor/css/post-116667.css?ver=1615475306' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='../wp-content/uploads/elementor/css/global4183.css?ver=1615475307' media='all' />
<link rel='stylesheet' id='elementor-post-20-css'  href='../wp-content/uploads/elementor/css/post-20dfe5.css?ver=1615738821' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7' media='all' />
<script id='comments-js-extra'>
var comment_data = {"name":"Name is required","email":"Email is required","comment":"Comment is required"};
</script>
<script src='../wp-content/themes/wandau/js/commentse23c.js?ver=5.7' id='comments-js'></script>
<script src='../wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/20.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../index341b.html?p=20' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embede549.json?url=http%3A%2F%2Fwandau.themezinho.net%2Fabout%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embeda8e1?url=http%3A%2F%2Fwandau.themezinho.net%2Fabout%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-32x32.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-180x180.png" />
<meta name="msapplication-TileImage" content="http://wandau.themezinho.net/wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-270x270.png" />
</head>
<body class="page-template page-template-page-builder page-template-page-builder-php page page-id-20 elementor-default elementor-kit-11 elementor-page elementor-page-20">
<div class="preloader" id="preloader">
  <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
  </svg>
  <div class="inner">
    <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
    <figure><img src="../wp-content/uploads/2021/03/preloader.png" alt="Wandau | Art &amp; History Museum WordPress Theme"></figure>
    <small>LOADING</small> </div>
  <!-- end inner --> 
</div>



</div>

<!-- end preloder -->
<div class="page-transition">
  <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
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
  <figure class="logo"> <img src="../wp-content/uploads/2021/03/logo-light.png" alt="Wandau | Art &amp; History Museum WordPress Theme"> </figure>
  <!-- end logo -->
  <div class="inner">
        <div class="widget_text widget aside"><div class="textwidget custom-html-widget"> <figure><img src="../wp-content/uploads/2021/03/image07.jpg" alt="Image"></figure>
          <p>It speedily me addition <strong>weddings vicinity</strong> in pleasure. Happiness commanded an conveying breakfast in. Regard her say warmly elinor. Him these are visit front end for <u>seven walls</u>. Money eat scale now ask law learn.</p>
      </div></div><div class="widget_text widget aside"><h6 class="widget-title">Opening Hours</h6><div class="textwidget custom-html-widget"><p>Tuesday ‒ Friday: 09:00 ‒ 17:00<br>
        Friday ‒ Monday: 10:00 ‒ 20:00</p></div></div>      </div>
  <!-- end inner -->
  <div class="display-mobile">
        <div class="custom-menu">
      <ul>
                <li> <a href="#">Eng</a> </li>
                <li> <a href="#">Rus</a> </li>
              </ul>
    </div>
    <!-- end custom-menu -->
        <div class="site-menu">
      <ul id="menu-main-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="../collections/index.html" class="nav-link" data-text="Collections">Collections</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-20 current_page_item active menu-item-457 nav-item"><a title="About" href="index.html" class="nav-link" aria-current="page" data-text="About">About</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="../contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
</ul>    </div>
    <!-- end site-menu --> 
  </div>
  <!-- end display-mobile --> 
</aside>
<!-- end side-widget -->

<nav class="navbar">
 <div class="logo"> <a href="../index.html"> <img src="../wp-content/uploads/2021/03/logo.png"  srcset="http://wandau.themezinho.net/wp-content/uploads/2021/03/logo@2x.png"  alt="Wandau | Art &amp; History Museum WordPress Theme"></a></div>
    
 <div class="custom-menu">
    <ul>
            <li> <a href="#">Eng</a> </li>
            <li> <a href="#">Rus</a> </li>
          </ul>
  </div>
    <div class="site-menu">
    <ul id="menu-main-menu-1" class="nav-menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="../collections/index.html" class="nav-link" data-text="Collections">Collections</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-20 current_page_item active menu-item-457 nav-item"><a title="About" href="index.html" class="nav-link" aria-current="page" data-text="About">About</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="../contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
</ul>  </div>
    <div class="search-button"> <i class="far fa-search"></i> </div>
  <!-- end search-button -->
  	

	
	  <div class="hamburger-menu">
    <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
      <path class="line line-top" d="M0,9h30"/>
      <path class="line line-center" d="M0,15h30"/>
      <path class="line line-bottom" d="M0,21h30"/>
    </svg>
  </div>
  <!-- end hamburger-menu -->
    <div class="navbar-button"> <a href="../login.php">Sign in</a> </div>
  <!-- end navbar-button -->
  </nav>
<header class="page-header" style="background: url(../wp-content/uploads/2021/03/page-header.jpg) center #ffffff;">
  <div class="inner">
    <svg width="580" height="400" class="svg-morph">
      <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
    </svg>
    <h1>Hello!</h1>
        <p>Thank you for joining!

		<div>

		
		</div>


</p>
      </div>
  <!-- end inner --> 
</header>
<!-- end navbar -->
<div link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Welcome</h2>

<div class="card">
  <img src="../avatar.jpg" alt="John" style="width:100%">
  <h1>
  <?php echo $_SESSION["user_name"] ?>
  </h1>

  <p class="title"><?php echo $_SESSION["user_role"] ?></p>
  <p><?php echo $_SESSION["user_nickname"] ?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
</div>
		
					<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b662e02" data-id="b662e02" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-d6ee02b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d6ee02b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-72f24d0" data-id="72f24d0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3987eca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3987eca" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-233bcc0" data-id="233bcc0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e42d13c elementor-widget elementor-widget-horizontal-image-scroll" data-id="e42d13c" data-element_type="widget" data-widget_type="horizontal-image-scroll.default">
				<div class="elementor-widget-container">
			<div class="horizontal-scroll">
  <div class="scroll-inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="5">
    <div class="scroll-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
           
          </div>
          <!-- end col-3 -->
          
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
            <figure class="image-box" data-scroll data-scroll-speed="0"> <img src="../wp-content/uploads/2021/03/about-image01.jpg" alt="Image"> </figure>
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-193c9d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="193c9d7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fe9075" data-id="0fe9075" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-490ee4b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="490ee4b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-016b6b1" data-id="016b6b1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0bd8790 elementor-widget elementor-widget-section-title" data-id="0bd8790" data-element_type="widget" data-widget_type="section-title.default">
				<div class="elementor-widget-container">
			<div class="section-title text-left">
      <h6>DON’T MISS THE OPPORTUNITY</h6>
    <h2>Women To Watch</h2>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1eda90c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1eda90c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-90f471e" data-id="90f471e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8f8e1eb elementor-widget elementor-widget-image-box-carousel" data-id="8f8e1eb" data-element_type="widget" data-widget_type="image-box-carousel.default">
				<div class="elementor-widget-container">
			<div class="image-box-carousel swiper-container">
  <div class="swiper-wrapper">
        <div class="swiper-slide">
      		<figure>
      <img src="../wp-content/uploads/2021/03/carousel-image01.jpg" alt="2011: Organic Materials">
			</figure>
      		<div class="content-box">
            <h5>2011: Organic Materials</h5>
                  <a href="#" class="custom-link">Read More</a>
      			</div>
    </div>
        <div class="swiper-slide">
      		<figure>
      <img src="../wp-content/uploads/2021/03/carousel-image02.jpg" alt="2013: Methal Matters">
			</figure>
      		<div class="content-box">
            <h5>2013: Methal Matters</h5>
                  <a href="#" class="custom-link">Read More</a>
      			</div>
    </div>
        <div class="swiper-slide">
      		<figure>
      <img src="../wp-content/uploads/2021/03/carousel-image03.jpg" alt="2015: Organic Matters">
			</figure>
      		<div class="content-box">
            <h5>2015: Organic Matters</h5>
                  <a href="#" class="custom-link">Read More</a>
      			</div>
    </div>
        <div class="swiper-slide">
      		<figure>
      <img src="../wp-content/uploads/2021/03/carousel-image04.jpg" alt="2018: Metal">
			</figure>
      		<div class="content-box">
            <h5>2018: Metal</h5>
                  <a href="#" class="custom-link">Read More</a>
      			</div>
    </div>
        <div class="swiper-slide">
      		<figure>
      <img src="../wp-content/uploads/2021/03/carousel-image05.jpg" alt="2021: Paper Work">
			</figure>
      		<div class="content-box">
            <h5>2021: Paper Work</h5>
                  <a href="#" class="custom-link">Read More</a>
      			</div>
    </div>
      </div>
  <!-- end swiper-wrapper --> 
</div>
<!-- end image-box-carousel -->

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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0f366b2 elementor-section-full_width elementor-section-height-full elementor-section-items-stretch elementor-section-height-default" data-id="0f366b2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e5498c2" data-id="e5498c2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e8e9952 elementor-widget elementor-widget-side-image" data-id="e8e9952" data-element_type="widget" data-widget_type="side-image.default">
				<div class="elementor-widget-container">
			<figure class="side-image " data-scroll data-scroll-speed="2"> <img src="../wp-content/uploads/2021/03/side-imag05.jpg" alt="Image"></figure>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-09c6adc" data-id="09c6adc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c45bace elementor-widget elementor-widget-side-arts" data-id="c45bace" data-element_type="widget" data-widget_type="side-arts.default">
				<div class="elementor-widget-container">
			<div class="side-arts">
  <div class="titles">
        <h6>Visit the Wandau Museum</h6>
            <h2>Antique Piece</h2>
      </div>
  <!-- end titles -->
  <ul>
        <li data-scroll data-scroll-speed="0.5">
            <figure> <img src="../wp-content/uploads/2021/03/art-thumb01.jpg" alt="Image"> </figure>
          </li>
        <li data-scroll data-scroll-speed="0.5">
            <figure> <img src="../wp-content/uploads/2021/03/art-thumb02.jpg" alt="Image"> </figure>
          </li>
        <li data-scroll data-scroll-speed="0.5">
            <figure> <img src="../wp-content/uploads/2021/03/art-thumb04.jpg" alt="Image"> </figure>
          </li>
        <li data-scroll data-scroll-speed="0.5">
            <figure> <img src="../wp-content/uploads/2021/03/art-thumb05.jpg" alt="Image"> </figure>
          </li>
      </ul>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-053f630 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="053f630" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6d1b323" data-id="6d1b323" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ba959d0 elementor-widget elementor-widget-counter-box" data-id="ba959d0" data-element_type="widget" data-widget_type="counter-box.default">
				<div class="elementor-widget-container">
			<div class="counter-box" data-scroll data-scroll-speed="0">
    <span class="odometer" data-count="15" data-status="yes">0</span>
      <span class="value">k</span>
      <p>MORE THAN 15,000<br>
MEMBERS</p>
  </div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a2aa399" data-id="a2aa399" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a709894 elementor-widget elementor-widget-counter-box" data-id="a709894" data-element_type="widget" data-widget_type="counter-box.default">
				<div class="elementor-widget-container">
			<div class="counter-box" data-scroll data-scroll-speed="0">
    <span class="odometer" data-count="3" data-status="yes">0</span>
      <span class="value">M</span>
      <p>3 MILLION VISITORS</p>
  </div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3712cdf" data-id="3712cdf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-bdd9862 elementor-widget elementor-widget-counter-box" data-id="bdd9862" data-element_type="widget" data-widget_type="counter-box.default">
				<div class="elementor-widget-container">
			<div class="counter-box" data-scroll data-scroll-speed="0">
    <span class="odometer" data-count="5500" data-status="yes">0</span>
      <span class="value">+</span>
      <p><p>MORE THAN 5.500<br />COLLECTION</p></p>
  </div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2b42b77" data-id="2b42b77" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3bc5e6d elementor-widget elementor-widget-counter-box" data-id="3bc5e6d" data-element_type="widget" data-widget_type="counter-box.default">
				<div class="elementor-widget-container">
			<div class="counter-box" data-scroll data-scroll-speed="0">
    <span class="odometer" data-count="800" data-status="yes">0</span>
      <span class="value">K</span>
      <p><p>DAILY TICKET<br />SALES</p></p>
  </div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e249b56 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e249b56" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-97fb0bd" data-id="97fb0bd" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-6186ea2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6186ea2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9f4965f" data-id="9f4965f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-aa4032b elementor-widget elementor-widget-section-title" data-id="aa4032b" data-element_type="widget" data-widget_type="section-title.default">
				<div class="elementor-widget-container">
			<div class="section-title text-center">
      <div class="icon"><img src="../wp-content/uploads/2021/03/title-shape.png" alt="Featured Artists"></div>
        <h6>Visit the National Wandau Museum</h6>
    <h2>Featured Artists</h2>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-36df184 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="36df184" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c137f0f" data-id="c137f0f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e98426f elementor-widget elementor-widget-image-content-box" data-id="e98426f" data-element_type="widget" data-widget_type="image-content-box.default">
				<div class="elementor-widget-container">
			<div class="image-content-box" data-scroll data-scroll-speed="-1">
  <figure> <img src="../wp-content/uploads/2021/03/image-content-box01-1.jpg" alt="Cable Griffith – Ghost Tree"> </figure>
  <div class="content-box">
        <h3>Cable Griffith – Ghost Tree</h3>
            <p><strong>2018 </strong>Original acrylic on paper</p>      </div>
  <!-- end content-box --> 
  
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-99e2a5e" data-id="99e2a5e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e9a8734 elementor-widget elementor-widget-image-content-box" data-id="e9a8734" data-element_type="widget" data-widget_type="image-content-box.default">
				<div class="elementor-widget-container">
			<div class="image-content-box" data-scroll data-scroll-speed="1">
  <figure> <img src="../wp-content/uploads/2021/03/image-content-box02-1.jpg" alt="Modern Home with Shark"> </figure>
  <div class="content-box">
        <h3>Modern Home with Shark</h3>
            <p><strong>2019 </strong>Original acrylic on paper</p>      </div>
  <!-- end content-box --> 
  
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fe2b5bb" data-id="fe2b5bb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-954557a elementor-widget elementor-widget-image-content-box" data-id="954557a" data-element_type="widget" data-widget_type="image-content-box.default">
				<div class="elementor-widget-container">
			<div class="image-content-box" data-scroll data-scroll-speed="-0.5">
  <figure> <img src="../wp-content/uploads/2021/03/image-content-box03-1.jpg" alt="Love Love Me Do Bull Terrier"> </figure>
  <div class="content-box">
        <h3>Love Love Me Do Bull Terrier</h3>
            <p><strong>2021 </strong>Original acrylic on paper</p>      </div>
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ae08eab elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ae08eab" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-442d792" data-id="442d792" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-18c5f0a elementor-widget elementor-widget-testimonial-box" data-id="18c5f0a" data-element_type="widget" data-widget_type="testimonial-box.default">
				<div class="elementor-widget-container">
			<div class="testimonial-box" data-scroll data-scroll-speed="0">
  <div class="content-box">
        <p>“This is not a museum'. Magritte might have said of here. If it were a museum We would stand for Museum of Many Artists. MoMa curates UK art and international artists. While a museum displays curated work on museum”</p>
      </div>
  <!-- end content-box -->
  
    <h6>We Curate - You Buy Art Online</h6>
  </div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ae73c4" data-id="2ae73c4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-baf49f6 elementor-widget elementor-widget-testimonial-box" data-id="baf49f6" data-element_type="widget" data-widget_type="testimonial-box.default">
				<div class="elementor-widget-container">
			<div class="testimonial-box" data-scroll data-scroll-speed="0">
  <div class="content-box">
        <p>“This is not a museum'. Magritte might have said of here. If it were a museum We would stand for Museum of Many Artists. MoMa curates UK art and international artists. While a museum displays curated work on museum”</p>
      </div>
  <!-- end content-box -->
  
    <h6>We Curate - You Buy Art Online</h6>
  </div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		<section class="content-section no-spacing" data-background="#F1EDD5" >
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
			  <script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-468" method="post" data-id="468" data-name="" ><div class="mc4wp-form-fields"><div class="inner">
	<div class="card" <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

<input type="email" placeholder="Enter your e-mail address">
<input type="submit" value="SIGN UP">
</div>
<small>Will be used in accordance with our 
<a href="../privacy-policy/index.html">Privacy Policy</a></small></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1617619049" /><input type="hidden" name="_mc4wp_form_id" value="468" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div>
          <!-- end form -->
          <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="../wp-content/uploads/2021/03/newsletter-image.png" alt="Sign up to get the latest news"></figure>
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
<footer class="footer" style="  ">
  <div class="container">
    <div class="row">
                  <div class="col-lg-4 col-md-6">
        <div class="widget_text widget footer-widget"><h6 class="widget-title">About Museum</h6><div class="textwidget custom-html-widget"><ul class="footer-menu">
              <li><a href="#">About us </a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">National work</a></li>
              <li><a href="#">International work</a></li>
            </ul></div></div>      </div>
                  <div class="col-lg-4 col-md-6">
        <div class="widget_text widget footer-widget"><h6 class="widget-title">Connect Us</h6><div class="textwidget custom-html-widget"><ul class="social-media">
              <li><a href="#"><i class="fab fa-facebook-f"></i> /wandau-uk</a></li>
              <li><a href="#"><i class="fab fa-twitter"></i> /wandau-museum</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i> /wandau-tv</a></li>
            </ul></div></div>      </div>
                  <div class="col-lg-4">
        <div class="widget_text widget footer-widget"><h6 class="widget-title">Visit Us Now</h6><div class="textwidget custom-html-widget"><address class="address">
            Cromwell Road New Town SW7 <strong>London - England</strong> <i class="fas fa-info-circle"></i> +44 (0)20 7942 2000
            </address></div></div>      </div>
                </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="footer-bottom">
    <div class="container"> <span class="copyright">&copy; 2021 Wandau | Art &amp; History Museum</span> <span class="creation">Site created by <a href="https://themezinho.net/">themezinho</a></span> </div>
    <!-- end container --> 
  </div>
  <!-- end footer-bottom --> 
</footer>
<!-- end footer -->
</div>
</div>

<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script src='../wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script src='../wp-includes/js/dist/hooks.minf521.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
<script src='../wp-includes/js/dist/i18n.min87d6.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction/u0004ltr': [ 'ltr' ] } );
</script>
<script src='../wp-includes/js/dist/vendor/lodash.minf492.js?ver=4.17.19' id='lodash-js'></script>
<script id='lodash-js-after'>
window.lodash = _.noConflict();
</script>
<script src='../wp-includes/js/dist/url.minacd8.js?ver=0ac7e0472c46121366e7ce07244be1ac' id='wp-url-js'></script>
<script id='wp-api-fetch-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script src='../wp-includes/js/dist/api-fetch.minf3b9.js?ver=a783d1f442d2abefc7d6dbd156a44561' id='wp-api-fetch-js'></script>
<script id='wp-api-fetch-js-after'>
wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "../wp-json/index.html" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "37d14959a5" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "../wp-admin/admin-ajaxf809.html?action=rest-nonce";
</script>
<script id='contact-form-7-js-extra'>
var wpcf7 = [];
</script>
<script src='../wp-content/plugins/contact-form-7/includes/js/index91d5.js?ver=5.4' id='contact-form-7-js'></script>
<script src='../wp-content/themes/wandau/js/bootstrap.mine23c.js?ver=5.7' id='bootstrap-js'></script>
<script src='../wp-content/themes/wandau/js/gsap.mine23c.js?ver=5.7' id='gsap-js'></script>
<script src='../wp-content/themes/wandau/js/locomotive-scroll.mine23c.js?ver=5.7' id='locomotive-scroll-js'></script>
<script src='../wp-content/themes/wandau/js/ScrollTrigger.mine23c.js?ver=5.7' id='scroll-trigger-js'></script>
<script src='../wp-content/themes/wandau/js/kinetic-slidere23c.js?ver=5.7' id='kinetic-slider-js'></script>
<script src='../wp-content/themes/wandau/js/fancybox.mine23c.js?ver=5.7' id='fancybox-js'></script>
<script src='../wp-content/themes/wandau/js/odometer.mine23c.js?ver=5.7' id='odometer-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script id='wandau-scripts-js-extra'>
var data = {"enable_preloader":"1","enable_smooth_scroll":"1"};
</script>
<script src='../wp-content/themes/wandau/js/scriptse23c.js?ver=5.7' id='wandau-scripts-js'></script>
<script src='../wp-includes/js/wp-embed.mine23c.js?ver=5.7' id='wp-embed-js'></script>
<script src='../wp-content/plugins/mailchimp-for-wp/assets/js/forms.min7bcd.js?ver=4.8.3' id='mc4wp-forms-api-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/webpack.runtime.minaeb9.js?ver=3.1.4' id='elementor-webpack-runtime-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/frontend-modules.minaeb9.js?ver=3.1.4' id='elementor-frontend-modules-js'></script>
<script src='../wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/share-link/share-link.minaeb9.js?ver=3.1.4' id='share-link-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false,"isImprovedAssetsLoading":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.1.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"landing-pages":true},"urls":{"assets":"http:////wandau.themezinho.net//wp-content//plugins//elementor//assets//"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":20,"title":"About%20%E2%80%93%20Wandau%20%7C%20Art%20%26%20History%20Museum%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script src='../wp-content/plugins/elementor/assets/js/frontend.minaeb9.js?ver=3.1.4' id='elementor-frontend-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.minaeb9.js?ver=3.1.4' id='preloaded-elements-handlers-js'></script>
</body></html>