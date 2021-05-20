<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/anExhibition.php';
include_once '../../contoller/exhibitionFunctions.php';
require_once("../front/includes/header.php");
$exhibition = null;
$error = "";


$Exhb = new anExhibition();
    if(isset($_GET['id'])){
    $exhibition = $Exhb->afficherEvent($_GET['id']);
}


if(isset($_POST["deleteBtn"])){
  $Exhb->deleteExhb($_GET['id']);
  
  header('Location:exhibitions.php');
  
}

if(isset($_POST["editBtn"])){
if ( isset($_POST["title"]) && isset($_POST["datee"]) && isset($_POST["emplacement"]) && isset($_POST["heure"]) && isset($_POST["categorie"]) && isset($_POST["prix_ticket"]) && isset($_POST["host"]) && isset($_POST["nplaces"]))
{
if (!empty($_POST["title"]) && !empty($_POST["datee"]) && !empty($_POST["emplacement"]) && !empty($_POST["heure"]) && !empty($_POST["categorie"]) && !empty($_POST["prix_ticket"]) && !empty($_POST["categorie"]) && !empty($_POST["host"]) && !empty($_POST["nplaces"]))
{
$exhibition = new exhibition( $_POST['title'], $_POST['datee'], $_POST['emplacement'], $_POST['heure'], $_POST['categorie'], $_POST['prix_ticket'],$_POST["host"],$_POST["nplaces"]);
$Exhb->modifierExhibition($exhibition,$_GET['id']);

header('Location:exhibitions.php');

}
else
$error = "Missing information";
}
}


?>

<link rel='stylesheet' id='edits-css' href='../../assets/css/myEdits.css' media='all' />
<div class="smooth-scroll">
    <div class="section-wrapper" data-scroll-section>
        <div class="search-box">
            <div class="container">
                <div class="form">
                    <h3>SEARCH BLOG</h3>
                    <form action="">
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
            <figure class="logo"><img src="../../assets/img/logo-light.png" alt="L'artisto"></figure>
            <!-- end logo -->
            <div class="inner">
                <div class="widget_text widget aside">
                    <div class="textwidget custom-html-widget">
                        <figure><img src="../../assets/img/us.png" alt="Image"></figure>
                        <p>This project was developed by <strong>EXCELL TEAM</strong> as their second year web project
                            the theme is <u>Art &amp; Culture</u>. Briefly the project will be EPIC !</p>
                    </div>
                </div>
                <div class="widget_text widget aside"><h6 class="widget-title">The Team</h6>
                    <div class="textwidget custom-html-widget"><p>Rayen BOURGUIBA<br>Walid MAALEJ<br>Yasmine BEN
                            ABDA<br>Cyrine ESSID<br>
                            Riham MATOUSSI</p></div>
                </div>
            </div>
            <!-- end inner -->
            <div class="display-mobile">
                <div class="custom-menu">
                    <ul>
                        <li><a href="#">Eng</a></li>
                    </ul>
                </div>
                <!-- end custom-menu -->
                <div class="site-menu">
                    <ul id="menu-main-menu" class="menu">
                        <li itemscope="itemscope" itemtype=""
                            id="menu-item-460"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a
                                    title="Visit" href="visit.html" class="nav-link" data-text="Visit">Visit</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype=""
                            id="menu-item-459"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                                    title="Exhibitions" href="exhibitions.php" class="nav-link"
                                    data-text="Exhibitions">Exhibitions</a><i></i></li>
                        <li itemscope="itemscope" itemtype=""
                            id="menu-item-458"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                                    title="Collections" href="annonces.php" class="nav-link"
                                    data-text="Collections">Annonces</a><i></i></li>
                        <li itemscope="itemscope" itemtype=""
                            id="menu-item-457"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a
                                    title="About" href="blog.php" class="nav-link" data-text="About">Blog</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype=""
                            id="menu-item-456"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a
                                    title="Contact" href="contact.html" class="nav-link" data-text="Contact">Contact</a><i></i>
                        </li>
                    </ul>
                </div>
                <!-- end site-menu -->
            </div>
            <!-- end display-mobile -->
        </aside>
        <!-- end side-widget -->

        <nav class="navbar">
            <div class="logo"><a href="./index.php"> <img src="../../assets/img/logo.png" alt="L'Artisto"></a></div>
            <div class="custom-menu">

            </div>
            <div class="site-menu">
                <ul id="menu-main-menu-1" class="nav-menu">
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a
                                title="Visit" href="./visit.html" class="nav-link" data-text="Visit">Visit</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                                title="Exhibitions" href="exhibitions.php" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                                title="Collections" href="annonces.php" class="nav-link" data-text="Collections">Annonces</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a
                                title="About" href="blog.php" class="nav-link" data-text="About">Blog</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a
                                title="Contact" href="./contact.html" class="nav-link"
                                data-text="Contact">Contact</a><i></i></li>
                </ul>
            </div>
            <div class="search-button"><i class="fas fa-search"></i></div>
            <!-- end search-button -->


            <div class="hamburger-menu">
                <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
                    <path class="line line-top" d="M0,9h30"/>
                    <path class="line line-center" d="M0,15h30"/>
                    <path class="line line-bottom" d="M0,21h30"/>
                </svg>
            </div>
            <!-- end hamburger-menu -->
<!--            <div class="navbar-button"><a href="./visit.html">SIGN IN</a></div>-->
<!--            <div class="navbar-button"><a href="./visit.html">SIGN UP</a></div>-->

            <?php
            $curr_page = basename(__FILE__);
            require_once("./includes/registration.php");
            ?>

            <!-- end navbar-button -->
        </nav>
        
<header class="page-header" style="background: url(../../assets/img/page-header.jpg) center #ffffff;">
  <div class="inner">
    <svg width="580" height="400" class="svg-morph">
      <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
    </svg>
    <h1>Edit Your Exhibition</h1>
        <p>Here you can edit your exhibition

</p>
      </div>
  <!-- end inner --> 
</header>
<!-- end navbar -->

<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-8">
        
<!-- <div id="post-418" class="blog-post post-418 post type-post status-publish format-standard has-post-thumbnail hentry category-collections category-museums category-wandau-events">
    <figure class="post-image" data-scroll data-scroll-speed="0"> <img src="../../assets/img/recent-news02.jpg" alt="Advantage but Practice Guide To Knots Kit"> </figure>
    <div class="post-content"><small class="date">
	  March 8, 2021    </small>
    <h3 class="post-title"><a href="../advantage-but-practice-guide-to-knots-kit/index.html">
      Advantage but Practice Guide To Knots Kit      </a></h3>
    <div class="author post-author"><a class="author-link-thumb" href="../author/admin/index.html"><img src="../../assets/img/80x80.png" alt="Wandau"></a> <span> by <a class="author-link" href="../author/admin/index.html"><strong>L'Artisto</strong></a></span></div>  </div>
</div> -->
<!-- ######################################################------------------PHP-----------------########################## -->

                            
                            <div id="post-421" class="blog-post post-421 post type-post status-publish format-standard has-post-thumbnail hentry category-art-galleries category-exhibitions category-membership" >
                            <?php if($exhibition['status']=="pending"){ echo "<h6 style=color:red >Pending</h6>"; } ?>
                            <figure class="post-image" data-scroll data-scroll-speed="0"> <img src="../../assets/img/recent-news02.jpg" alt="Advantage but Practice Guide To Knots Kit"> </figure>

                            <div class="post-content">                            
<small class="date">
                                    
	  <?php echo $exhibition['datee']; echo '&nbsp at &nbsp'; echo $exhibition['heure'];echo '&nbsp in &nbsp'; echo $exhibition['emplacment'];    ?></small>
              
                                    <h3 class="post-title"><a><?php echo $exhibition['title'];    ?></a></h3>
                                    
                                    <div class="author post-author">
                                        <a class="author-link-thumb" href="../author/admin/index.html"><img src="../../assets/img/title-shape.png" alt="L'Artisto"></a> <span> by <a class="author-link" href="../author/admin/index.html"><strong><?php echo $exhibition['host'];    ?></strong></a></span>
                                        </div>
                                        <br><small> <h6><?php echo ($exhibition['nplaces'] - $exhibition['ticketsReserved']); ?> Places Left <?php if((($exhibition['nplaces'] - $exhibition['ticketsReserved'])!=0) && $exhibition['status']=="approved"){ ?><a class="date" id="theID" href="payment.php?id=<?php echo $exhibition['id'];?>">Get Your Ticket</a><?php } ?></h6> </small> 
                                </div>
                            </div>
                          
<!-- ######################################################------------------PHP-----------------########################## -->
<?php if(isset($_SESSION['user_nickname']) ){ ?>  
<?php if($exhibition['host']==$_SESSION['user_nickname'] ){ ?> 
<aside class="sidebar widget-area">
                                    <div id="search-2" class="widget widget_search">
                                        <h6 class="widget-title">HERE YOU CAN EDIT YOUR EXHIBITION</h6>
                                        <form role="search" method="POST" class="search-form" action="">

                                            <label>Title:</label>
                                            <input type="text" class="search-field" placeholder="Title …" value="<?php echo $exhibition['title'];    ?>" name="title" id="title">

                                            <label>Full Adress:</label>
                                            <textarea type="text" cols="40" rows="6" class="search-field" placeholder="Full Address …"  name="emplacement" id="emplacement"><?php echo $exhibition['emplacment'];    ?></textarea>

                                            <label>Start date:</label>
                                            <input class="dateClass" type="date" id="datee" name="datee" value="<?php echo $exhibition['datee'];    ?>">

                                            


                                            <label>Starting Time:</label>
                                            <input type="time" class="dateClass" placeholder="Starting Time …" value="<?php echo $exhibition['heure'];    ?>" name="heure" id="heure">

                                            <label>Category:</label>
                                            <input type="text" class="search-field" placeholder="Category …" value="<?php echo $exhibition['categorie'];    ?>" name="categorie" id="categorie">

                                            <label>Ticket Price:</label>
                                            <input type="number" class="search-field" placeholder="Ticket Price DT …" value="<?php echo $exhibition['prix_ticket'];    ?>" name="prix_ticket" id="prix_ticket">

                                            <label>Places Available:</label>
                                            <input type="number" class="search-field" step="1" placeholder="0" value="<?php echo $exhibition['nplaces'];    ?>" name="nplaces" id="nplaces" min="0">

                                            <br><input type="submit" class="search-submit" value="Edit" name="editBtn">
                                            <input type="submit" class="search-submit" value="Delete" name="deleteBtn">

                                            
                                        </form>
                                    </div>

<!-- ####################################################################################################################### form -->
                                </aside>
 <?php }} ?>
<!-- ######################################################------------------PHP-----------------########################## -->
      </div>
      <!-- end col-8 -->
           
                
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
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
<input type="email" placeholder="Enter your e-mail address">
<input type="submit" value="SIGN UP">
</div>
<small>Will be used in accordance with our 
<a href="./privacy-policy.html">Privacy Policy</a></small></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1617619125" /><input type="hidden" name="_mc4wp_form_id" value="468" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div>
          <!-- end form -->
          <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="../../assets/img/newsletter-image.png" alt="Sign up to get the latest news"></figure>
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
        <div class="widget_text widget footer-widget"><h6 class="widget-title">About Museum</h6><div class="textwidget custom-html-widget"><ul class="footer-menu">
              <li><a href="#">About us </a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">National work</a></li>
              <li><a href="#">International work</a></li>
            </ul></div></div>      </div>
                  <div class="col-lg-4 col-md-6">
        <div class="widget_text widget footer-widget"><h6 class="widget-title">Connect Us</h6><div class="textwidget custom-html-widget"><ul class="social-media">
              <li><a href="#"><i class="fab fa-facebook-f"></i> /L'Artisto-tn</a></li>
              <li><a href="#"><i class="fab fa-twitter"></i> /L'Artisto-tn</a></li>
              <li><a href="#"><i class="fab fa-youtube"></i> /L'Artisto-tn</a></li>
            </ul></div></div>      </div>
                  <div class="col-lg-4">
        <div class="widget_text widget footer-widget"><h6 class="widget-title">Visit Us Now</h6><div class="textwidget custom-html-widget"><address class="address">
            Ariana <strong>Tunis Tunisia</strong> <i class="fas fa-info-circle"></i> +216 99 137 982
            </address></div></div>      </div>
                </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="footer-bottom">
    <div class="container"> <span class="copyright">L'Artisto </span> <span class="creation">Site created by <a href="https://github.com/RayenBourguiba/ElArtisto">team EXELL</a></span> </div>
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
})();</script><script src='../../assets/js/wp-polyfill.min89b1.js' id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="../../assets/js/wp-polyfill-fetch.min6e0e.js"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="../../assets/js/wp-polyfill-node-contains.min2e00.js"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="../../assets/img/wp-polyfill-dom-rect.min2e00.js"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="../../assets/img/wp-polyfill-url.min5aed.js"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="../../assets/img/wp-polyfill-formdata.mine9bd.js"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="../../assets/img/wp-polyfill-element-closest.min4c56.js"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="../../assets/img/wp-polyfill-object-fit.min531b.js"></scr' + 'ipt>' );
</script>
<script src='../../assets/img/hooks.minf521.js' id='wp-hooks-js'></script>
<script src='../../assets/img/i18n.min87d6.js' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script src='../../assets/img/lodash.minf492.js' id='lodash-js'></script>
<script id='lodash-js-after'>
window.lodash = _.noConflict();
</script>
<script src='../../assets/img/url.minacd8.js' id='wp-url-js'></script>
<script id='wp-api-fetch-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script src='../../assets/img/api-fetch.minf3b9.js' id='wp-api-fetch-js'></script>
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
<script src='../../assets/js/index91d5.js' id='contact-form-7-js'></script>
<script src='../../assets/js/bootstrap.mine23c.js' id='bootstrap-js'></script>
<script src='../../assets/js/gsap.mine23c.js' id='gsap-js'></script>
<script src='../../assets/js/locomotive-scroll.mine23c.js' id='locomotive-scroll-js'></script>
<script src='../../assets/js/ScrollTrigger.mine23c.js' id='scroll-trigger-js'></script>
<script src='../../assets/js/kinetic-slidere23c.js' id='kinetic-slider-js'></script>
<script src='../../assets/js/fancybox.mine23c.js' id='fancybox-js'></script>
<script src='../../assets/js/odometer.mine23c.js' id='odometer-js'></script>
<script src='../../assets/js/swiper.min48f5.js' id='swiper-js'></script>
<script id='wandau-scripts-js-extra'>
var data = {"enable_preloader":"1","enable_smooth_scroll":"1"};
</script>
<script src='../../assets/js/scriptse23c.js' id='wandau-scripts-js'></script>
<script src='../../assets/js//wp-embed.mine23c.js' id='wp-embed-js'></script>
<script src='../../assets/js/forms.min7bcd.js' id='mc4wp-forms-api-js'></script>
</body></html>