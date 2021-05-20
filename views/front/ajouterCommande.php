<?php
include_once '../../contoller/commandeC.php';
include_once '../../contoller/AnnonceC.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/integrationartisto/ElArtisto-main/model/commande.php';
require_once("../front/includes/header.php");


$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new commandeC();
$annonceC = new AnnonceC();
$annonce = $annonceC->rechercherAnnonceID($_GET['id']);

if (
  isset($_POST["idPro"]) &&
  isset($_POST["quantite"]) &&
  isset($_POST["Prix"]) &&
  isset($_POST["prix_total"]) &&
  isset($_POST["modeP"])


) {
  if (
    !empty($_POST["idPro"]) &&
    !empty($_POST["quantite"]) &&
    !empty($_POST["Prix"]) &&
    !empty($_POST["prix_total"]) &&
    !empty($_POST["modeP"])


  ) {
    $user = new commande(
      $_POST['idPro'],
      $_POST['quantite'],
      $_POST['Prix'],
      $_POST['prix_total'],
      $_POST['modeP']


    );
    
    $theID = $userC->ajouterCommande($user, $_GET['id']);
    header('Location:ajouterlivraison.php?idCommande='.$theID);
  } else
    $error = "Missing information";
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
                <div class="widget_text widget aside">
                    <h6 class="widget-title">The Team</h6>
                    <div class="textwidget custom-html-widget">
                        <p>Rayen BOURGUIBA<br>Walid MAALEJ<br>Yasmine BEN
                            ABDA<br>Cyrine ESSID<br>
                            Riham MATOUSSI</p>
                    </div>
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
                        <li itemscope="itemscope" itemtype="" id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="visit.html" class="nav-link" data-text="Visit">Visit</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype="" id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="exhibitions.php" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
                        <li itemscope="itemscope" itemtype="" id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="annonces.php" class="nav-link" data-text="Collections">Annonces</a><i></i></li>
                        <li itemscope="itemscope" itemtype="" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="blog.php" class="nav-link" data-text="About">Blog</a><i></i>
                        </li>
                        <?php if (isset($_SESSION['user_id'])) { ?>
                            <li itemscope="itemscope" itemtype="" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="exhibitionProfile.php?username=<?php echo $_SESSION['user_nickname'];   ?>" class="nav-link" data-text="Contact">Profile</a><i></i>
                            </li>
                        <?php } ?>
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
                    <li itemscope="itemscope" itemtype="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="./visit.html" class="nav-link" data-text="Visit">Visit</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="exhibitions.php" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="annonces.php" class="nav-link" data-text="Collections">Annonces</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="blog.php" class="nav-link" data-text="About">Blog</a><i></i>
                    </li>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <li itemscope="itemscope" itemtype="" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact" href="exhibitionProfile.php?username=<?php echo $_SESSION['user_nickname'];  ?>" class="nav-link" data-text="Contact">Profile</a><i></i></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="search-button"><i class="fas fa-search"></i></div>
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
                <h1>Commande</h1>
                <p>Passer votre commande. 

                </p>


            </div>

            <!-- end inner -->

        </header>

<hr>

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
        <label for="idPro">id produit:
        </label>
      </td>
      <td><input class="form-control" type="text" name="idPro" id="idPro" value="<?php echo $_GET['id']; ?>" readonly maxlength="20"></td>
    </tr>


    <tr>
      <td>
        <label for="quantite">Quantité:
        </label>
      </td>
      <td><input class="form-control" type="int" name="quantite" id="quantite" pattern="[0-9]+" oninput="textChanged()"></td>
    </tr>

    <tr>
      <td>
        <label for="Prix">Prix Unitaire:
        </label>
      </td>
      <td>
        <input class="form-control" type="double" name="Prix" id="Prix" value="<?php echo $annonce['prix'] ?>" pattern="[0-9]+" readonly />
      </td>
    </tr>

    <tr>
      <td>
        <label for="prix_total">Prix Total:
        </label>
      </td>
      <td>
        <input class="form-control" type="double" name="prix_total" id="prix_total"  readonly />
      </td>
    </tr>

          
    <tr>
      <td>
        <label> Mode de paiement:
        </label>
      </td>
      <td>
        <select name="modeP" id="modeP" style="length: 60px" required>
          <option value="choisir mode de payement">choisir mode</option>

          <option value="A la commande" name="A la commande">A la commande</option>
          <option value="En ligne" name="En ligne">En ligne</option>
          <option value="Virement" name="Virement">Virement</option>
        </select>
      </td>
    </tr>




    <tr>
      <td></td>
      <td>
        <input type="submit" value="Envoyer">
      </td>
      <td>
        <input type="reset" value="Annuler">
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

              <!-- end footer -->
            </div>
          </div>
          <script>
            function textChanged() {
              var input, output;
              inputQuantite = document.getElementById("quantite").value;
              inputPrix = document.getElementById("Prix").value;
              output = document.getElementById("prix_total");

              output.value = inputQuantite * inputPrix;
            }
          </script>

                <?php require_once("./includes/footer.php"); ?>