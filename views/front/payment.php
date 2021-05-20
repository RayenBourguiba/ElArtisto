
<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/aReservation.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/anExhibition.php';
include_once '../../contoller/exhibitionFunctions.php';
include_once '../../contoller/reservationFunctions.php';
require_once("../front/includes/header.php");

use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';






$exhibition = null;
$Exhb = new anExhibition();
    if(isset($_GET['id'])){
    $exhibition = $Exhb->afficherEvent($_GET['id']);
}


// create user

if(isset($_POST["submit"]))
{
    $error = "";
    $reservation = null;
    
    
    

// create an instance of the controller

$aReservation = new aReservation();
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]))
{
if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]))
{
$reservation = new reservation( $_GET['id'], $_POST['firstname'], $_POST['lastname'], $_POST['email']);
$aReservation->ajouterReservation($reservation);


header('Location:exhibitions.php');

}
else
$error = "Missing information";
}




$mail = new PHPMailer(true);
    try
    {  
        

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'artisto1912@gmail.com';
    $mail->Password = 'artisto191201';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('no-reply@artisto.org',"L'Artisto");
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = 'Thank you for your purchase '.$_POST["firstname"].' '.$_POST["lastname"].'';
    $message = file_get_contents('receiptmail.phtml'); 
    // VARIABLES
        $message = str_replace('%name%',$_POST["firstname"].' '.$_POST["firstname"],$message);
        $message = str_replace('%eventtitle%',$exhibition['title'],$message);
        $message = str_replace('%reservationID%',$exhibition['id'],$message);
        $message = str_replace('%date%',$exhibition['datee'],$message);
        $message = str_replace('%total%',$exhibition['prix_ticket'],$message);
    // VARIABLES
    $mail->msgHTML($message);
    

    
    $mail->send();
    
    }
    catch(GlobalException $e)
    {
        echo "message could not be sent";
        echo 'Mailer error: '.$mail->ErrorInfo;
    }

}
       

?>


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
                        <h1>GET YOUR TICKET</h1>
                        <p>To purchase a ticket for the  event carefully fill the form down below..

                        </p>

                    </div>
                    <!-- end inner -->

                </header>
                <!-- end navbar -->
                                    <!-- #########################PHP###################################################################################### -->
                                    <section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-8">
        
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
                                        <br><small> <h6><?php echo ($exhibition['nplaces'] - $exhibition['ticketsReserved']); ?> Places Left</h6> </small> 
                                </div>
                            </div>
            </div>
            </div>
            </div>
                                    
            <br><br>
                                    
                    <div class="container">
                        <div class="row justify-content-center">

<!-- ####################################################################################################################### form -->
                            <div class="col-lg-4">
                                <aside class="sidebar widget-area">
                                    <div id="search-2" class="widget widget_search">
                                        <h6 class="widget-title">Personal Informations</h6>
                                        <form role="search" method="POST" class="search-form" action=""  >
                                            <small>Get your ticket for the event :<h6><?php echo $exhibition['title']; ?></h6> </small>
                                            

                                            

                                            <label>First Name:</label>
                                            <input type="text" class="search-field" placeholder="First Name &hellip;" value="" name="firstname" id="firstname" />

                                            <label>Last Name:</label>
                                            <input type="text" cols="40" rows="6" class="search-field" placeholder="Last Name &hellip;" value="" name="lastname" id="lastname"/>

                                            <label>Email:</label>
                                            <input type="email" class="search-field" placeholder="Email &hellip;" value="" name="email" id="email" />

                                            
                                            
                                        
                                    </div>

<!-- ####################################################################################################################### form -->
                                </aside>
                            </div>
                            
                            <div class="col-lg-4">
                                <aside class="sidebar widget-area">
                                    <div id="search-2" class="widget widget_search">
                                        <h6 class="widget-title">Credit Card Informations</h6>
                                    
                                            
                                            <label>CARD NUMBER</label>
                                            <input type="number" class="search-field" placeholder="XXXX-XXXX-XXXX-XXXX"  value="" name="" id=""  />

                                            <label>EXPIRY DATE</label>
                                            <input class="dateClass" type="date" id="datee" name="datee" />

                                            <script>
                                                var date = new Date().toISOString().substring(0, 10),
                                                    field = document.querySelector('#datee');
                                                field.value = date; 
                                            </script>

                                            <label>CCV</label>
                                            <input type="number" class="search-field" placeholder="CCV" value="" name="" id=""  />
                                            <br><h6><?php echo $exhibition['prix_ticket']; ?><small> DT</small></h6> 
                                            <input type="submit" class="search-submit" value="Get Your Ticket" name="submit"  />
                                            
                                        </form>
                                    </div>

<!-- ####################################################################################################################### form -->
                                </aside>
                            </div>
                            <!-- end col-4 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
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
                                            (function() {
                                                window.mc4wp = window.mc4wp || {
                                                    listeners: [],
                                                    forms: {
                                                        on: function(evt, cb) {
                                                            window.mc4wp.listeners.push({
                                                                event: evt,
                                                                callback: cb
                                                            });
                                                        }
                                                    }
                                                }
                                            })();
                                        </script>
                                        <!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-468" method="post" data-id="468" data-name="">
                                            <div class="mc4wp-form-fields">
                                                <div class="inner">
                                                    <input type="email" placeholder="Enter your e-mail address">
                                                    <input type="submit" value="SIGN UP">
                                                </div>
                                                <small>Will be used in accordance with our 
<a href="./privacy-policy.html">Privacy Policy</a></small></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input
                                                type="hidden" name="_mc4wp_timestamp" value="1617619125" /><input type="hidden" name="_mc4wp_form_id" value="468" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                            <div class="mc4wp-response"></div>
                                        </form>
                                        <!-- / Mailchimp for WordPress Plugin -->
                                    </div>
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
                                            <li><a href="#"><i class="fab fa-facebook-f"></i> /L'Artisto-tn</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i> /L'Artisto-tn</a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i> /L'Artisto-tn</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget_text widget footer-widget">
                                    <h6 class="widget-title">Visit Us Now</h6>
                                    <div class="textwidget custom-html-widget"><address class="address">
            Ariana <strong>Tunis Tunisia</strong> <i class="fas fa-info-circle"></i> +216 99 137 982
            </address></div>
                                </div>
                            </div>
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
        <script>
            (function() {
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
        <script src='../../assets/js/wp-polyfill.min89b1.js' id='wp-polyfill-js'></script>
        <script id='wp-polyfill-js-after'>
            ('fetch' in window) || document.write('<script src="../../assets/js/wp-polyfill-fetch.min6e0e.js"></scr' + 'ipt>');
            (document.contains) || document.write('<script src="../../assets/js/wp-polyfill-node-contains.min2e00.js"></scr' + 'ipt>');
            (window.DOMRect) || document.write('<script src="../../assets/img/wp-polyfill-dom-rect.min2e00.js"></scr' + 'ipt>');
            (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="../../assets/img/wp-polyfill-url.min5aed.js"></scr' + 'ipt>');
            (window.FormData && window.FormData.prototype.keys) || document.write('<script src="../../assets/img/wp-polyfill-formdata.mine9bd.js"></scr' + 'ipt>');
            (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="../../assets/img/wp-polyfill-element-closest.min4c56.js"></scr' + 'ipt>');
            ('objectFit' in document.documentElement.style) || document.write('<script src="../../assets/img/wp-polyfill-object-fit.min531b.js"></scr' + 'ipt>');
        </script>
        <script src='../../assets/img/hooks.minf521.js' id='wp-hooks-js'></script>
        <script src='../../assets/img/i18n.min87d6.js' id='wp-i18n-js'></script>
        <script id='wp-i18n-js-after'>
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
        </script>
        <script src='../../assets/img/lodash.minf492.js' id='lodash-js'></script>
        <script id='lodash-js-after'>
            window.lodash = _.noConflict();
        </script>
        <script src='../../assets/img/url.minacd8.js' id='wp-url-js'></script>
        <script id='wp-api-fetch-js-translations'>
            (function(domain, translations) {
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
        <script src='../../assets/img/api-fetch.minf3b9.js' id='wp-api-fetch-js'></script>
        <script id='wp-api-fetch-js-after'>
            wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("../wp-json/index.html"));
            wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("37d14959a5");
            wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
            wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
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
            var data = {
                "enable_preloader": "1",
                "enable_smooth_scroll": "1"
            };
        </script>
        <script src='../../assets/js/scriptse23c.js' id='wandau-scripts-js'></script>
        <script src='../../assets/js//wp-embed.mine23c.js' id='wp-embed-js'></script>
        <script src='../../assets/js/forms.min7bcd.js' id='mc4wp-forms-api-js'></script>
    </body>

    </html>