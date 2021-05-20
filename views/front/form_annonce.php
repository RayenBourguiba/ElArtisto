<?PHP
include_once '../../contoller/AnnonceC.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/Annonce.php';
require_once("../front/includes/header.php");



function ajouter(string $img): void{
    $error = "";

    // create user
    $annonce = null;

    // create an instance of the controller
    $annoncec = new AnnonceC();
if (isset($_POST["categorie"]) && isset($_POST["nom"]) && isset($_POST["prix"]) && isset($_POST["descr"]) && isset($img) )
{  
if (!empty($_POST["categorie"]) && !empty($_POST["nom"]) && !empty($_POST["prix"]) && !empty($_POST["descr"]) && !empty($img)) 
{
$annonce = new Annonce($_POST['categorie'], $_POST['nom'], $_POST['prix'], $_POST['descr'], $img, $_SESSION['user_id'] );
$annoncec->ajouterAnnonce($annonce);
header('Location:annonces.php');
}
else
$error = "Missing information";
}
}


if(isset($_POST["submit"]))
{
    $img="uploads/".$_FILES['file']['name'];
    $tp=pathinfo($img,PATHINFO_EXTENSION);
    if($_FILES['file']['size']>500000)
    {
        print "file is too large";
    }
    else
    {
        if ($tp=="")
        {
            ajouter($img);
        }
        else if($tp!="jpg" && $tp!="png")
        {
            print "only jpg png files are allowed";
        }
        else
        { 
            move_uploaded_file($_FILES['file']['tmp_name'],$img);
            ajouter($img);
    
        }
    }   
}

?>

<!-- end page-transition -->
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
                                    title="Contact" href="profileAnnonces.php" class="nav-link" data-text="Contact">Profile</a><i></i>
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
                                title="Collections" href="./annonces.php" class="nav-link" data-text="Collections">Annonces</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a
                                title="About" href="blog.php" class="nav-link" data-text="About">Blog</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a
                                title="Contact" href="profileAnnonces.php" class="nav-link"
                                data-text="Contact">Profile</a><i></i></li>
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
            if(!isset($_SESSION['user_id']))
            header('Location:annonces.php');
            ?>

            <!-- end navbar-button -->
        </nav>
        <header class="page-header" style="background: url(../../assets/img/page-header.jpg) center #ffffff;">
            <div class="inner">
                <svg width="580" height="400" class="svg-morph">
                    <path id="svg_morph"
                          d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
                </svg>
                <h1>Annonces</h1>
                <p>Vous pouvez créer votre propre annonce, la booster ou encore remplir votre panier pour passer vos commandes
                </p>
            </div>
            <!-- end inner -->
        </header>
        <!-- end navbar -->

            <section class="content-section">
                <div class="col-lg-4">
                    <aside class="sidebar widget-area">
                        <div id="search-2" class="widget widget_search">
                            <h6 class="widget-title">Votre annonce</h6>
                            <form method="POST" class="search-form" action="" enctype="multipart/form-data">

                                <label>
                                <select name="categorie" class="comboboxc">
                                    <option value="" disabled selected>Catégorie</option>
                                    <option value="Tableaux" >Tableaux de peinture</option>
                                    <option value="Dessins" >Dessins</option>
                                    <option value="Livres" >Livres</option>
                                    <option value="BD" >Bandes Dessinées</option>
                                    <option value="Sculptures">Sculptures</option>
                                    <option value="Instruments">Instruments de musique</option>
                                    <option value="Caricatures" >Caricatures</option>
                                    <option value="Photographies" >Photographies</option>
                                </select>     
                            </label>
                                <label>
                                <input type="search" class="search-field" placeholder="Nom de l'article" value="" name="nom" required pattern="[0-9a-zA-Z-\.]{1,20}" />
                            </label>
                                <label>
                                <input type="search" class="search-field" placeholder="Prix" value="" name="prix" />
                            </label>
                                <label>
                                <textarea rows="4" cols="50" name="descr" class="descr" placeholder="Description" required pattern="[0-9a-zA-Z-\.]{0,50}"></textarea>
                            </label>
                                </label>
                                <label>
                                    <label for="fileupload"> Téléchargez vos photos</label>
                                <input type="file" class="boutonfile" id="file" name="file" multiple>
                                </label>
                                <input type="submit" class="search-submit" value="Créer" name="submit" />
                                <div class="pagination-bar">
                                </div>
                        </div>
                </div>
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
<a href="../privacy-policy/index.html">Privacy Policy</a></small></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input
                                            type="hidden" name="_mc4wp_timestamp" value="1617619617" /><input type="hidden" name="_mc4wp_form_id" value="468" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                        <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / Mailchimp for WordPress Plugin -->
                                </div>
                                <!-- end form -->
                                <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="includes/img/newsletter-image.png" alt="Sign up to get the latest news"></figure>
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
                                        <li><a href="#"><i class="fab fa-facebook-f"></i> /wandau-uk</a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i> /wandau-museum</a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i> /wandau-tv</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget_text widget footer-widget">
                                <h6 class="widget-title">Visit Us Now</h6>
                                <div class="textwidget custom-html-widget"><address class="address">
            Cromwell Road New Town SW7 <strong>London - England</strong> <i class="fas fa-info-circle"></i> +44 (0)20 7942 2000
            </address></div>
                            </div>
                        </div>
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
    <script src='../../assets/js/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
    <script id='wp-polyfill-js-after'>
        ('fetch' in window) || document.write('<script src="../../assets/js/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>');
        (document.contains) || document.write('<script src="../../assets/js/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.DOMRect) || document.write('<script src="../../assets/js/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="../../assets/js/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
        (window.FormData && window.FormData.prototype.keys) || document.write('<script src="../../assets/js/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
        (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="../../assets/js/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>');
        ('objectFit' in document.documentElement.style) || document.write('<script src="../../assets/js/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
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
    <script src='../../assets/js/api-fetch.minf3b9.js?ver=a783d1f442d2abefc7d6dbd156a44561' id='wp-api-fetch-js'></script>
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
</body>

</html>