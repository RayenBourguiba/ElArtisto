<?php

include_once '../../contoller/livraisonC.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/integrationartisto/ElArtisto-main/model/livraison.php';
require_once("../front/includes/header.php");

use Exception as GlobalException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new livraisonC();
if(isset($_POST['Confirmer']))
  {
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
                $_POST['telephone'],
                $_GET['idCommande']
            );
            $userC->ajouterLivraison($user);
    
    
            header('Location:annonces.php');
        } else
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
    $mail->addAddress($_POST['Email']);
    $mail->isHTML(true);
    $mail->Subject = 'Thank you for your purchase '.$_POST["nom"].' '.$_POST["prenom"].'';
    $message = file_get_contents('receiptmailCommande.phtml'); 
    // VARIABLES
        $message = str_replace('%name%',$_POST["nom"].$_POST["prenom"],$message);
        
    // VARIABLES
    $mail->msgHTML($message);
    

    
    $mail->send();
    
    }
    catch(GlobalException $e)
    {
        echo "message could not be sent";
        echo 'Mailer error: '.$mail->ErrorInfo;
    }
    //$commandeC->payerboost($_POST['id']);
  }



?>


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
            <figure class="logo"> <img src="../../assets/img/logo-light.png" alt="Wandau | Art &amp; History Museum WordPress Theme"> </figure>
            <!-- end logo -->
            <div class="inner">
                <div class="widget_text widget aside">
                    <div class="textwidget custom-html-widget">
                        <figure><img src="../../assets/img/image07.jpg" alt="Image"></figure>
                        <p>It speedily me addition <strong>weddings vicinity</strong> in pleasure. Happiness commanded an conveying breakfast in. Regard her say warmly elinor. Him these are visit front end for <u>seven walls</u>. Money eat scale now ask law learn.</p>
                    </div>
                </div>
                <div class="widget_text widget aside">
                    <h6 class="widget-title">Opening Hours</h6>
                    <div class="textwidget custom-html-widget">
                        <p>Tuesday ‒ Friday: 09:00 ‒ 17:00<br>
                            Friday ‒ Monday: 10:00 ‒ 20:00</p>
                    </div>
                </div>
            </div>
            <!-- end inner -->
            <div class="display-mobile">
                <div class="custom-menu">

                </div>
                <!-- end custom-menu -->
                <div class="site-menu">
                    <ul id="menu-main-menu" class="menu">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="../collections/index.html" class="nav-link" data-text="Collections">Collections</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item"><a title="Commande" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i></li>
                    </ul>
                </div>

                <!-- end site-menu -->
            </div>
            <!-- end display-mobile -->
        </aside>
        <!-- end side-widget -->



        <nav class="navbar">
            <div class="logo"> <a href="../index.html"> <img src="../../assets/img/logo.png" alt="Wandau | Art &amp; History Museum WordPress Theme"></a></div>
            <div class="custom-menu">

            </div>
            <div class="site-menu">
                <ul id="menu-main-menu-1" class="nav-menu">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="../collections/index.html" class="nav-link" data-text="Collections">Collections</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item"><a title="Contact" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i></li>
                </ul>
            </div>
            <div class="search-button"> <i class="far fa-search"></i> </div>
            <!-- end search-button -->


            <div class="hamburger-menu">
                <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
                    <path class="line line-top" d="M0,9h30" />
                    <path class="line line-center" d="M0,15h30" />
                    <path class="line line-bottom" d="M0,21h30" />
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
                <h1>Ajouter<br>Livraison</h1>
                <p>a regularly updated website or web page, typically one run by an individual or small group, that is
                    written in an informal or conversational style.

                </p>
            </div>
            <!-- end inner -->
        </header>
        <!-- end navbar -->
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
                                                                        <td><input class="form-control" type="text" name="nom" id="nom"></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <label for="nom">Prénom:
                                                                            </label>
                                                                        </td>
                                                                        <td><input class="form-control" type="text" name="prenom" id="prenom"></td>
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
                                                                            <input class="form-control" type="int" name="telephone" id="telephone" pattern="[0-9]+">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <label for="Email">Email:
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <input class="form-control" type="text" name="Email" id="Email" >
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <input type="submit" value="Confirmer" name="Confirmer">
                                                                        </td>
                                                                        <td>
                                                                            <input type="reset" value="Annuler">
                                                                        </td>


                                                                    </tr>


                                                                </table>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <div class="col-lg-6">
                  
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



                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
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
                </script><!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-468" method="post" data-id="468" data-name="">
                    <div class="mc4wp-form-fields">
                        <div class="inner">

                            <!-- end content-section -->

                            <?php require_once("./includes/footer.php"); ?>