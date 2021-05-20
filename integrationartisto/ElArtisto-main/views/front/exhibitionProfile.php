<?php
include_once "../../contoller/exhibitionFunctions.php";
include_once "../../contoller/adhC.php";
require_once("../front/includes/header.php");


$Exhb = new anExhibition();
$listExhibitions = $Exhb->afficherEvents();


if(isset($_POST["searchBtn"])){
    $listExhibitions = null ;
    $listExhibitions = $Exhb->rechercherEvent($_POST["factor"],$_POST["searchBox"]);
    
}

if(isset($_POST["deleteBtn"])){
    $Exhb->deleteExhb($_POST['deleteBtn']);
    
    header("Refresh:0");
    
}

?>


            <!-- end page-transition -->
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
                                    title="Contact" href="exhibitionProfile.php?username=<?php echo $_SESSION['user_nickname'];   ?>" class="nav-link" data-text="Contact">Profile</a><i></i>
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
                    <?php if(isset($_SESSION['user_id'])){ ?>
                    <li itemscope="itemscope" itemtype=""
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a
                                title="Contact" href="exhibitionProfile.php?username=<?php echo $_SESSION['user_nickname'];   ?>" class="nav-link"
                                data-text="Contact">Profile</a><i></i></li>
                                <?php } ?>
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
<?php if(isset($_SESSION['user_id'])){ ?>
<form action="hostExhibition.php">
                    <input type="submit" value="HOST AN EXHIBITION" class="centerbutton">
                </form>
                <?php } ?>
            <?php
            $curr_page = basename(__FILE__);
            require_once("./includes/registration.php");
            if(!isset($_SESSION['user_id']))
            header('Location:exhibitions.php');
            ?>

            <!-- end navbar-button -->
        </nav>
        <header class="page-header" style="background: url(../../assets/img/page-header.jpg) center #ffffff;">

            <div class="inner">
                <svg width="580" height="400" class="svg-morph">
                    <path id="svg_morph"
                          d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
                </svg>
                <h1>Exhibitions</h1>
                    <p>Here you can find where you can express yourself and share your passion with other artists, enjoy your stay and don't forget "DO NOT STOP CREATING!"

                    </p>

               
            </div>
            
            <!-- end inner -->
            
        </header>
        
        <!-- end navbar -->
            <!-- end navbar -->

            <section class="content-section" id="container0">
                <div class="container" id="container1">
                    <div class="row justify-content-center" id="container2">
                        <div class="col-lg-8" id="bigDiv">
                        <!------------------------------------- PHP #####################################################################-->
                        <?php      foreach ($listExhibitions as $exhibition){ 
                            if($exhibition['host'] == $_GET['username'] )  { 
                                if((isset($_SESSION['user_nickname']) && ($_SESSION['user_nickname'] == $_GET['username'])) ) {
                                ?>
                            
                            <div id="post-421" class="blog-post post-421 post type-post status-publish format-standard has-post-thumbnail hentry category-art-galleries category-exhibitions category-membership" <?php if($exhibition['status']=="pending"){ echo "style=background-color:#E0E0E0"; } ?> >
                                <div class="post-content">                            <?php if($exhibition['status']=="pending"){ echo "<h6 style=color:red >Pending</h6>"; } ?>
<small class="date">
                                    
	  <?php echo $exhibition['datee']; echo '&nbsp at &nbsp'; echo $exhibition['heure'];echo '&nbsp in &nbsp'; echo $exhibition['emplacment'];    ?></small>
              
                                    <h3 class="post-title"><a href="myExhibition.php?id=<?php echo $exhibition['id'];    ?>" id="theTitle" class="ksm"><?php echo $exhibition['title'];    ?></a></h3>
                                    
                                    <div class="author post-author">
                                        <a class="author-link-thumb"><img src="../../assets/img/title-shape.png" alt="L'Artisto"></a> <span> by <a class="author-link" href="../author/admin/index.html"><strong><?php echo $exhibition['host'];    ?></strong></a></span>
                                        </div>
                                        <br><small> <h6><?php echo ($exhibition['nplaces'] - $exhibition['ticketsReserved']); ?> Places Left <?php if((($exhibition['nplaces'] - $exhibition['ticketsReserved'])!=0) && $exhibition['status']=="approved"){ ?><a class="date" id="theID" href="payment.php?id=<?php echo $exhibition['id'];?>">Get Your Ticket</a><?php } ?></h6> </small> 
                                </div>
                            </div>
                            <?php }else{  if($exhibition['status']=="approved"){ ?>
                                <div id="post-421" class="blog-post post-421 post type-post status-publish format-standard has-post-thumbnail hentry category-art-galleries category-exhibitions category-membership" <?php if($exhibition['status']=="pending"){ echo "style=background-color:#E0E0E0"; } ?> >
                                <div class="post-content">                            <?php if($exhibition['status']=="pending"){ echo "<h6 style=color:red >Pending</h6>"; } ?>
<small class="date">
                                    
	  <?php echo $exhibition['datee']; echo '&nbsp at &nbsp'; echo $exhibition['heure'];echo '&nbsp in &nbsp'; echo $exhibition['emplacment'];    ?></small>
              
                                    <h3 class="post-title"><a href="myExhibition.php?id=<?php echo $exhibition['id'];    ?>" id="theTitle" class="ksm"><?php echo $exhibition['title'];    ?></a></h3>
                                    
                                    <div class="author post-author">
                                        <a class="author-link-thumb"><img src="../../assets/img/title-shape.png" alt="L'Artisto"></a> <span> by <a class="author-link" href="../author/admin/index.html"><strong><?php echo $exhibition['host'];    ?></strong></a></span>
                                        </div>
                                        <br><small> <h6><?php echo ($exhibition['nplaces'] - $exhibition['ticketsReserved']); ?> Places Left <?php if((($exhibition['nplaces'] - $exhibition['ticketsReserved'])!=0) && $exhibition['status']=="approved"){ ?><a class="date" id="theID" href="payment.php?id=<?php echo $exhibition['id'];?>">Get Your Ticket</a><?php } ?></h6> </small> 
                                </div>
                            </div>
                       <?php }}}}  ?>
                            <!------------------------------------- PHP #####################################################################-->
                        </div>
                        <!-- end col-8 -->
                        <div class="col-lg-4">
                            <aside class="sidebar widget-area">

                            <!-- Search########################################################################################## -->
                                <div id="search-2" class="widget widget_search">
                                    <h6 class="widget-title">Search</h6>
                                    
                                    <form method="post"  action="">

                                        <label>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" name="searchBox" id="searchBox" oninput="textChanged()" />
                                        </label>

                                        <select name="factor" class="dateClass">
                                        
                                        <option value="title">Title</option>
                                        <option value="date">Date</option>
                                        <option value="host">Host</option>
                                        </select>
                        
                                        <label>
                                        <input  type="submit" class="search-submit" name="searchBtn" value="Search.."  />
                                        </label>

                                    </form>
                            <!-- Search########################################################################################## -->

                                </div>
                                <div id="categories-2" class="widget widget_categories">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul>
                                        <li class="cat-item cat-item-4"><a href="../category/art-galleries/index.html">Art Galleries</a>
                                        </li>
                                        <li class="cat-item cat-item-5"><a href="../category/collections/index.html">Collections</a>
                                        </li>
                                        <li class="cat-item cat-item-3"><a href="exhibitions.php">Exhibitions</a>
                                        </li>
                                        <li class="cat-item cat-item-9"><a href="../category/fundraising/index.html">Fundraising</a>
                                        </li>
                                        <li class="cat-item cat-item-6"><a href="../category/membership/index.html">Membership</a>
                                        </li>
                                        <li class="cat-item cat-item-7"><a href="../category/museums/index.html">Museums</a>
                                        </li>
                                        <li class="cat-item cat-item-8"><a href="../category/wandau-events/index.html">L'Artisto Events</a>
                                        </li>
                                    </ul>

                                </div>
                                <div id="media_gallery-2" class="widget widget_media_gallery">
                                    <h6 class="widget-title">Gallery</h6>
                                    <div id='gallery-1' class='gallery galleryid-1 gallery-columns-2 gallery-size-thumbnail'>
                                        
                                        <figure class='gallery-item'>
                                            <div class='gallery-icon portrait'>
                                                <a href='../../assets/img/collection07.jpg'><img width="150" height="150" src="../../assets/img/collection07-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" /></a>
                                            </div>
                                        </figure>
                                        <figure class='gallery-item'>
                                            <div class='gallery-icon portrait'>
                                                <a href='../../assets/img/collection04.jpg'><img width="150" height="150" src="../../assets/img/collection04-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" /></a>
                                            </div>
                                        </figure>
                                        <figure class='gallery-item'>
                                            <div class='gallery-icon portrait'>
                                                <a href='../../assets/img/collection03.jpg'><img width="150" height="150" src="../../assets/img/collection03-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" /></a>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div id="recent-comments-2" class="widget widget_recent_comments">
                                    <h6 class="widget-title">Recent Comments</h6>
                                    <ul id="recentcomments">
                                        <li class="recentcomments"><span class="comment-author-link"><a onclick="passValue()" href='https://wordpress.org/' rel='external nofollow ugc' class='url'>A WordPress Commenter</a></span> on <a href="../hello-world/index.html#comment-1">Fertile Beloved Evident Through no Service</a></li>
                                    </ul>
                                </div>
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

<!-- JAVASCRIPT -------------------------------------------------------------------------------------------------------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
function textChanged(){
    // Declare variables
  var input, filter, table, tr, td, i, txtValue,j,container1,container2,bigDiv,container0;
  input = document.getElementById("searchBox");
 
  filter = input.value.toUpperCase();
  container0 = document.getElementById("container0");
  container1 = container0.getElementById("container1");
  container2 = container1.getElementById("container2");
  bigDiv = container2.getElementById("bigDiv");
  table = bigDiv.getElementsByTagName("div");
  for(i=0; i<table.length;i++){
    tr = table[i].getElementsByTagName("a");
    console.log(tr.value);
  }

  
  
/*
  for (i = 0; i < tr.length; i++) {
  

       td =  tr[i].getElementsByTagName("a")[1];
        console.log(td.value);
    }*/
}
  // Loop through all table rows, and hide those who don't match the search query
  
    
   // td = tr[i].getElementsByTagName("td")[j]; 
    
   
    /*if (td) {
        
      txtValue = td.value;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[0].style.display = "";
        tr[i].style.display = "";
      } else {
        tr[0].style.display = "";
        tr[i].style.display = "none";
      }
    }
  }*/


</script>



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