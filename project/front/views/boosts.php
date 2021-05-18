<?PHP

use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/SMTP.php';
require 'PHPmailer/src/PHPMailer.php';
include "../controllers/BoostC.php";
include_once '../models/Boost.php';

$boostc=new BoostC();
$listeBoosts=$boostc->afficherBoosts();

if(isset($_POST["Trier"])) 
{
    if($_POST["selon"]=="Type")
    $listeBoosts=$boostc->trierBoostsT();
    else 
    $listeBoosts=$boostc->trierBoostsP();
}

if(isset($_POST["Rechercher"])) 
{
    if($_POST["selon"]=="Type")
    $listeBoosts=$boostc->rechercherBoostT($_POST["valeur"]);
    else
    $listeBoosts=$boostc->rechercherBoostP($_POST["valeur"]);
}

if(isset($_POST["payer"]))
{
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
    $mail->setFrom('no-reply@artisto.org','Mailer');
    $mail->addAddress($_POST['Email']);
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation de paiement';
    $mail->Body = 'Cher(e) Mr/Mme '. $_POST['nom'].', Merci pour votre confiance! Votre paiement a été effectué avec succès.';
    
    $mail->send();
    echo "message has been sent";
    }
    catch(GlobalException $e)
    {
        echo "message could not be sent";
        echo 'Mailer error: '.$mail->ErrorInfo;

    }
    $boostc->payerboost($_POST['id']);
} 

?>

<!doctype html>
<html lang="en-US">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Collections &#8211; Wandau | Art &amp; History Museum WordPress Theme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Feed" href="feed.html" />
    <link rel="alternate" type="application/rss+xml" title="Wandau | Art &amp; History Museum WordPress Theme &raquo; Comments Feed" href="comments.html" />
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
        ! function(e, a, t) {
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
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
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
    <link rel='stylesheet' id='wp-block-library-css' href='includes/css/style.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='includes/css/styles91d5.css?ver=5.4' media='all' />
    <link rel='stylesheet' id='cinzel-google-fonts-css' href='https://fonts.googleapis.com/css?family=Cinzel%3A400%2C600&amp;ver=5.7' media='all' />
    <link rel='stylesheet' id='dm-sans-google-fonts-css' href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C500%2C700&amp;ver=5.7' media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='includes/css/fontawesome.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='fancybox-css' href='includes/css/fancybox.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='odometer-css' href='includes/css/odometer.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='swiper-css' href='includes/css/swiper.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='includes/css/bootstrap.mine23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='wandau-main-style-css' href='includes/css/stylee23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='wandau-stylesheet-css' href='includes/css/stylee23c.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='wandau-text-css' href='includes/css/text.css?ver=5.7' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='includes/css/elementor-icons.min21f9.css?ver=5.11.0' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='includes/css/animations.minaeb9.css?ver=3.1.4' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='includes/css/frontend.minaeb9.css?ver=3.1.4' media='all' />
    <link rel='stylesheet' id='elementor-post-11-css' href='includes/css/post-116667.css?ver=1615475306' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='includes/css/global4183.css?ver=1615475307' media='all' />
    <link rel='stylesheet' id='elementor-post-18-css' href='includes/css/post-1860e1.css?ver=1615486860' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7'
        media='all' />
    <script id='comments-js-extra'>
        var comment_data = {
            "name": "Name is required",
            "email": "Email is required",
            "comment": "Comment is required"
        };
    </script>
    <script src='includes/js/commentse23c.js?ver=5.7' id='comments-js'></script>
    <script src='includes/js/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
    <script src='includes/js/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/18.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.7" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='../index0735.html?p=18' />
    <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed49ea.json?url=http%3A%2F%2Fwandau.themezinho.net%2Fcollections%2F" />
    <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed696e?url=http%3A%2F%2Fwandau.themezinho.net%2Fcollections%2F&amp;format=xml" />
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="includes/img/cropped-apple-touch-icon-144-precomposed-32x32.png" sizes="32x32" />
    <link rel="icon" href="includes/img/cropped-apple-touch-icon-144-precomposed-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="includes/img/cropped-apple-touch-icon-144-precomposed-180x180.png" />
    <meta name="msapplication-TileImage" content="http://wandau.themezinho.net/wp-content/uploads/2021/03/cropped-apple-touch-icon-144-precomposed-270x270.png" />
</head>

<body class="page-template page-template-page-collections page-template-page-collections-php page page-id-18 elementor-default elementor-kit-11 elementor-page elementor-page-18">
    <div class="preloader" id="preloader">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
  </svg>
        <div class="inner">
            <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
            <figure><img src="includes/img/preloader.png" alt="L'artisto | Art &amp; History Museum WordPress Theme"></figure>
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
                <figure class="logo"> <img src="includes/img/logo-light.png" alt="L'artisto | Art &amp; History Museum WordPress Theme"> </figure>
                <!-- end logo -->
                <div class="inner">
                    <div class="widget_text widget aside">
                        <div class="textwidget custom-html-widget">
                            <figure><img src="includes/img/image07.jpg" alt="Image"></figure>
                            <p>It speedily me addition <strong>weddings vicinity</strong> in pleasure. Happiness commanded an conveying breakfast in. Regard her say warmly elinor. Him these are visit front end for <u>seven walls</u>. Money eat scale now
                                ask law learn.</p>
                        </div>
                    </div>
                    <div class="widget_text widget aside">
                        <h6 class="widget-title">Opening Hours</h6>
                        <div class="textwidget custom-html-widget">
                            <p>Tuesday ‒ Friday: 09:00 ‒ 17:00<br> Friday ‒ Monday: 10:00 ‒ 20:00</p>
                        </div>
                    </div>
                </div>
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
                        <ul id="menu-main-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-18 current_page_item active menu-item-458 nav-item"><a title="Annonces" href="annonces.php" class="nav-link" aria-current="page" data-text="Annonces">Annonces</a><i></i></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="../contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
                        </ul>
                    </div>
                    <!-- end site-menu -->
                </div>
                <!-- end display-mobile -->
            </aside>
            <!-- end side-widget -->

            <nav class="navbar">
                <div class="logo">
                    <a href="../index.html"> <img src="includes/img/logo.png" alt="L'artisto | Art &amp; History Museum WordPress Theme"></a>
                </div>
                <div class="custom-menu">
                    <ul>
                        <li> <a href="#">Eng</a> </li>
                        <li> <a href="#">Fr</a> </li>
                    </ul>
                </div>
                <div class="site-menu">
                    <ul id="menu-main-menu-1" class="nav-menu">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-18 current_page_item active menu-item-458 nav-item"><a title="Annonces" href="annonces.php" class="nav-link" aria-current="page" data-text="Annonces">Annonces</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="../contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
                    </ul>
                </div>
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
            </nav>
            <header class="page-header" style="background: url(includes/img/page-header.jpg) center #ffffff;">
                <div class="inner">
                    <svg width="580" height="400" class="svg-morph">
      <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
    </svg>
                    <h1>Pack Boosts</h1>
                    <p>Vous pouvez booster votre propre annonce pour vous garantir une meilleure visibilité

                    </p>
                </div>
                <!-- end inner -->
            </header>
            <!-- end navbar -->

            <section class="content-section">
                <div class="col-lg-4">
                    <aside class="sidebar widget-area">
                        <div id="search-2" class="widget widget_search">
                            <h6 class="widget-title">Boosts</h6>
                            <TABLE BORDER="1"> 
                    <CAPTION> Mes packs </CAPTION> 
                    
                         <TR> 
                            <TH> id </TH> 
                            <TH> type </TH> 
                            <TH> nombre </TH> 
                            <TH> prix </TH>
                            <TH> supprimer </TH>
                         </TR> 
                         <?PHP
                            foreach($listeBoosts as $Boost){
                                if($Boost['payed']==0){
                        ?>
                        <TR> 
                            <TD> <?PHP echo $Boost['id'];?> </TD> 
                            <TD> <?PHP echo $Boost['type'];?> </TD> 
                            <TD> <?PHP echo $Boost['nombre'];?> </TD> 
                            <TD> <?PHP echo $Boost['prixtotal'];?> </TD>
                            <TD>
                                <a href="supprimerBoost.php?id=<?PHP echo $Boost['id']; ?>"> Supprimer </a>
                            </TD>
                         </TR> 
                         <?PHP
                            }
                        }
                        ?>
                            </TABLE>
                            <form method="POST" action="" >
                        <label>
                                <select name="selon" class="comboboxc">
                                    <option value="" disabled selected>Selon..</option>
                                    <option value="Type" >Type</option>
                                    <option value="PrixT" >Prix total</option>
                                </select>     
                        </label>
                        <label>
                                <input type="search" class="search-field" placeholder="recherche.." value="" name="valeur" />
                        </label>
                        <input type="submit" class="search-submit" value="Trier" name="Trier" />
                        <input type="submit" class="search-submit" value="Rechercher" name="Rechercher" />
                        </form> 
                        </div>
                </div>
            </section>

            <section class="content-section">
                <div class="col-lg-4">
                    <aside class="sidebar widget-area">
                        <div id="search-2" class="widget widget_search">
                            <h6 class="widget-title">Passer au paiement</h6>
                            <form method="POST" class="search-form" action="">
                                <label>
                                <input type="search" class="search-field" placeholder="Id" value="" name="id" />
                            </label>
                            <label>
                                <input type="search" class="search-field" placeholder="Nom" value="" name="nom" />
                            </label>
                            <label>
                                <input type="search" class="search-field" placeholder="Email" value="" name="Email" />
                            </label>
                            <label>
                                <input type="search" class="search-field" placeholder="Num ° carte de crédit" value="" name="num" />
                            </label>
                            <label>
                                <input type="date" class="search-field" placeholder="date d'expiration" value="" name="date" />
                            </label>
                            <p></p>
                            <label>
                                <input type="search" class="search-field" placeholder="CCV" value="" name="CCV" />
                            </label>
                                <input type="submit" class="search-submit" value="Confirmer" name="payer" id="payer" />
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
    <script src='includes/js/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
    <script id='wp-polyfill-js-after'>
        ('fetch' in window) || document.write('<script src="includes/js/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>');
        (document.contains) || document.write('<script src="includes/js/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.DOMRect) || document.write('<script src="includes/js/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="includes/js/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
        (window.FormData && window.FormData.prototype.keys) || document.write('<script src="includes/js/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
        (Element.prototype.matches && Element.prototype.closest) || document.write('<script src="includes/js/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>');
        ('objectFit' in document.documentElement.style) || document.write('<script src="includes/js/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>');
    </script>
    <script src='includes/js/hooks.minf521.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
    <script src='includes/js/i18n.min87d6.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
    <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src='includes/js/lodash.minf492.js?ver=4.17.19' id='lodash-js'></script>
    <script id='lodash-js-after'>
        window.lodash = _.noConflict();
    </script>
    <script src='includes/js/url.minacd8.js?ver=0ac7e0472c46121366e7ce07244be1ac' id='wp-url-js'></script>
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
    <script src='includes/js/api-fetch.minf3b9.js?ver=a783d1f442d2abefc7d6dbd156a44561' id='wp-api-fetch-js'></script>
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
    <script src='includes/js/index91d5.js?ver=5.4' id='contact-form-7-js'></script>
    <script src='includes/js/bootstrap.mine23c.js?ver=5.7' id='bootstrap-js'></script>
    <script src='includes/js/gsap.mine23c.js?ver=5.7' id='gsap-js'></script>
    <script src='includes/js/locomotive-scroll.mine23c.js?ver=5.7' id='locomotive-scroll-js'></script>
    <script src='includes/js/ScrollTrigger.mine23c.js?ver=5.7' id='scroll-trigger-js'></script>
    <script src='includes/js/kinetic-slidere23c.js?ver=5.7' id='kinetic-slider-js'></script>
    <script src='includes/js/fancybox.mine23c.js?ver=5.7' id='fancybox-js'></script>
    <script src='includes/js/odometer.mine23c.js?ver=5.7' id='odometer-js'></script>
    <script src='includes/js/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
    <script id='wandau-scripts-js-extra'>
        var data = {
            "enable_preloader": "1",
            "enable_smooth_scroll": "1"
        };
    </script>
    <script src='includes/js/scriptse23c.js?ver=5.7' id='wandau-scripts-js'></script>
    <script src='includes/js/wp-embed.mine23c.js?ver=5.7' id='wp-embed-js'></script>
    <script src='includes/js/forms.min7bcd.js?ver=4.8.3' id='mc4wp-forms-api-js'></script>
</body>

</html>




