<?php
    include_once '../model/livraison.php';
    include_once '../controller/livraisonC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new livraisonC();
    if (
      isset($_POST["nom"]) && 
      isset($_POST["prenom"]) && 

        isset($_POST["adresse"]) && 
        isset($_POST["telephone"])
    ) {
        if (          
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["adresse"]) && 
            !empty($_POST["telephone"])
            
        ) {
            $user = new livraison(
              $_POST['nom'],
              $_POST['prenom'],

                $_POST['adresse'],
                $_POST['telephone']
            );
            $userC->ajouterlivraison($user);
            header('Location:afficherLivraison.php');
        }
        else
            $error = "Missing information";
    }

    
?>


    
      
        

<!doctype html>
<html lang="en-US">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title>Contact &#8211; El Artisto</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="El Artisto &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="El Artisto &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/el.artisto.tn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7"}};
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
<link rel='stylesheet' id='elementor-post-22-css'  href='../wp-content/uploads/elementor/css/post-2289f0.css?ver=1615738445' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7' media='all' />
<script id='comments-js-extra'>
var comment_data = {"name":"Name is required","email":"Email is required","comment":"Comment is required"};
</script>
<script src='../wp-content/themes/wandau/js/commentse23c.js?ver=5.7' id='comments-js'></script>
<script src='../wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/22.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../index0345.html?p=22' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed0d1d.json?url=http%3A%2F%2Fwandau.themezinho.net%2Fcontact%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed7c76?url=http%3A%2F%2Fwandau.themezinho.net%2Fcontact%2F&amp;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-32x32.png" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-180x180.png" />
<meta name="msapplication-TileImage" content="http://wandau.themezinho.net/wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-270x270.png" />
</head>
<body class="page-template page-template-page-builder page-template-page-builder-php page page-id-22 elementor-default elementor-kit-11 elementor-page elementor-page-22">
<div class="preloader" id="preloader">
  <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
  </svg>
  <div class="inner">
    <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
    <figure><img src="../wp-content/uploads/2021/03/preloader.png" alt="El Artisto"></figure>
    <small>LOADING</small> </div>
  <!-- end inner --> 
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
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item"><a title="Commande" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i></li>
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
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item"><a title="Contact" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i></li>
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
    <div class="navbar-button"> <a href="../visit/index.html">GET A TICKET</a> </div>
  <!-- end navbar-button -->
  </nav>
<header class="page-header" style="background: url(../wp-content/uploads/2021/03/page-header.jpg) center #ffffff;">
  <div class="inner">
    <svg width="580" height="400" class="svg-morph">
      <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
    </svg>
    <h1>LIVRAISONS</h1>
        
      </div>
  <!-- end inner --> 
</header>
<!-- end navbar -->

		<div data-elementor-type="wp-page" data-elementor-id="22" class="elementor elementor-22" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-eba2c41 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eba2c41" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-641f230" data-id="641f230" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-f1b7471 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f1b7471" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eea3fcf" data-id="eea3fcf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-59c34c2 elementor-widget elementor-widget-section-title" data-id="59c34c2" data-element_type="widget" data-widget_type="section-title.default">
				<div class="elementor-widget-container">
			<div class="section-title text-center">
      <div class="icon"><img src="../wp-content/uploads/2021/03/title-shape.png" alt="Commandes"></div>
        <h2>Ajouter une livraison    
        
        </h2>
         <!-- <button><a href="afficherlivraison.php">Retour à la liste</a></button>-->
        
        
         <div id="error">
            <?php echo $error; ?>
        </div>
        <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
				</div>
			</div>
		</div>
	</div>
        <br>
		<br>
		<br>
        <form action="" method="POST">
            <table border="1" align="center">

            <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input class="form-control" type="text"  name="nom" id="nom" ></td>
                </tr>
                      
                <tr>
                    <td>
                        <label for="nom">Prénom:
                        </label>
                    </td>
                    <td><input class="form-control" type="text"  name="prenom" id="prenom"></td>
                </tr>
                


                
                <tr>
                    <td>
                        <label for="adresse">adresse de livraison:
                        </label>
                    </td>
                    <td><input class="form-control" type="text" name="adresse" id="adresse" maxlength="20"></td>
                </tr>
				
               
                
                
                <tr>
                    <td>
                        <label for="telephone">Numéro de téléphone:
                        </label>
                    </td>
                    <td>
                        <input class="form-control" type="int" name="telephone" id="telephone" pattern="[0-9]+" >
                    </td>
                </tr>
           
                
                <tr>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>

                    
                </tr>


            </table>
			<br>
		<br>
		<br>
        </form>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-d3f0f88 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d3f0f88" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8dea19" data-id="d8dea19" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
							
				
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9598ed3" data-id="9598ed3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								
			

<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>  		</div>
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
		<section class="content-section no-spacing" data-background="#F1EDD5" >
  <div class="container">
    <div class="row">
      <div class="col-12">
        
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

<!-- end content-section -->

<!-- end footer -->
</div>
</div>
<script src="http://code.jivosite.com/widget/lNHgYjgm1A" async></script>
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
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
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
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false,"isImprovedAssetsLoading":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.1.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"landing-pages":true},"urls":{"assets":"http:\/\/wandau.themezinho.net\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":22,"title":"Contact%20%E2%80%93%20Wandau%20%7C%20Art%20%26%20History%20Museum%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script src='../wp-content/plugins/elementor/assets/js/frontend.minaeb9.js?ver=3.1.4' id='elementor-frontend-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/preloaded-elements-handlers.minaeb9.js?ver=3.1.4' id='preloaded-elements-handlers-js'></script>

       
        </body>
</html>



