<?PHP
	 
include_once '../../contoller/commandeC.php';
include_once '../../contoller/AnnonceC.php';
require_once("../front/includes/header.php");


   
	
$annonceC = new AnnonceC();

	$commandeC=new commandeC();
	$listeUsers=$commandeC->afficherCommande();
	

	
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
      <figure class="logo"> <img src="../../assets/img/logo-light.png"
          alt="Wandau | Art &amp; History Museum WordPress Theme"> </figure>
      <!-- end logo -->
      <div class="inner">
        <div class="widget_text widget aside">
          <div class="textwidget custom-html-widget">
            <figure><img src="../../assets/img/image07.jpg" alt="Image"></figure>
            <p>It speedily me addition <strong>weddings vicinity</strong> in pleasure. Happiness commanded an conveying
              breakfast in. Regard her say warmly elinor. Him these are visit front end for <u>seven walls</u>. Money
              eat scale now ask law learn.</p>
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
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
                href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                title="Exhibitions" href="../exhibitions/index.html" class="nav-link"
                data-text="Exhibitions">Exhibitions</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                title="Collections" href="../collections/index.html" class="nav-link"
                data-text="Collections">Collections</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About"
                href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456"
              class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item">
              <a title="Commande" href="index.html" class="nav-link" aria-current="page"
                data-text="Contact">Contact</a><i></i></li>
          </ul>
        </div>

        <!-- end site-menu -->
      </div>
      <!-- end display-mobile -->
    </aside>
    <!-- end side-widget -->



    <nav class="navbar">
      <div class="logo"> <a href="../index.html"> <img src="../../assets/img/logo.png"
            alt="Wandau | Art &amp; History Museum WordPress Theme"></a></div>
      <div class="custom-menu">
      </div>
      <div class="site-menu">
        <ul id="menu-main-menu-1" class="nav-menu">
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
              href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
              title="Exhibitions" href="../exhibitions/index.html" class="nav-link"
              data-text="Exhibitions">Exhibitions</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
              title="Collections" href="../collections/index.html" class="nav-link"
              data-text="Collections">Collections</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About"
              href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item">
            <a title="Contact" href="index.html" class="nav-link" aria-current="page"
              data-text="Contact">Contact</a><i></i></li>
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
          <path id="svg_morph"
            d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
        </svg>
        <h1>Liste Des<br>Commandes</h1>
        <p>a regularly updated website or web page, typically one run by an individual or small group, that is
          written in an informal or conversational style.

        </p>
      </div>
      <!-- end inner -->
    </header>
    <!-- end navbar -->
    <!-- end navbar -->

    <div data-elementor-type="wp-page" data-elementor-id="22" class="elementor elementor-22"
      data-elementor-settings="[]">
      <div class="elementor-section-wrap">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-eba2c41 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="eba2c41" data-element_type="section"
          data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="elementor-container elementor-column-gap-default">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-641f230"
              data-id="641f230" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <section
                  class="elementor-section elementor-inner-section elementor-element elementor-element-f1b7471 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="f1b7471" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div
                      class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eea3fcf"
                      data-id="eea3fcf" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                          class="elementor-element elementor-element-59c34c2 elementor-widget elementor-widget-section-title"
                          data-id="59c34c2" data-element_type="widget" data-widget_type="section-title.default">
                          <div class="elementor-widget-container">
                            <div class="section-title text-center">




                              <form class="d-none d-sm-inline-block" action="" method="POST">
                                <div class="input-group input-group-navbar">
                                  <input type="search" class="form-control" name="keyword" id="searchBox"
                                    oninput="textChanged()"
                                    value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"
                                    placeholder="Search here..." required="" />
                                  <select id="factor" class="form-control">
                                    <option value="nom">Nom</option>
                                    <option value="quantite">Quantite</option>
                                    <option value="Prix">Prix</option>
                                    <option value="Prix Total">Prix Total</option>
                                    <option value="Mode de paiement">Mode de paiement</option>
                                  </select>
                                  <i class="align-middle" data-feather="search"></i>


                                </div>
                              </form>


                              <div align='center' class="form-group">






                                </h2>

                                <body>
                                  <br>
                                  <table id="users" class="table table-hover my-0">

                                    <?php

                  if(ISSET($_POST['search'])){
                    ?>
                                    <table id="users" class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th>Nom</th>
                                          <th>image </th>
                                          <th>Quantité</th>
                                          <th>Prix</th>
                                          <th>Prix Total</th>
                                          <th>Mode de paiement</th>
                                          <th>Supprimer</th>
                                          <th>Modifier</th>


                                        </tr>
                                      <tbody>

                                        <tr>
                                          <td><?php echo $annonce['nom']?></td>
                                          <td>
                                            <figure> <img src="<?PHP echo $annonce['img']; ?>"
                                                alt="<?PHP echo $annonce['nom']; ?>"> </figure>
                                          </td>

                                          <td><?php echo $row['quantite']?></td>
                                          <td><?php echo $row['Prix']?></td>
                                          <td><?php echo $row['prix_total']?></td>
                                          <td>
                                            <?PHP echo $row['modeP'] ?>
                                          </td>
                                        </tr>

                                      </tbody>
                                    </table>

                                    <?php   
                  }else{
                    ?>
                                    <thead>
                                      <tr>
                                        <th>Nom</th>
                                        <th>image </th>
                                        <th>Quantité</th>
                                        <th>Prix</th>
                                        <th>Prix Total</th>
                                        <th>Mode de paiement</th>
                                        <th>Supprimer</th>
                                        <th>Modifier</th>



                                      </tr>
                                    </thead>

                                    <?PHP
                   foreach($listeUsers as $user){ $annonce = $annonceC->rechercherAnnonceID($user['idPro']);
                    ?>

                                    <tr>
                                      <td>
                                        <?PHP echo $annonce['nom']; ?>
                                      </td>
                                      <td>
                                        <figure> <img src="<?PHP echo $annonce['img']; ?>"
                                            alt="<?PHP echo $annonce['nom']; ?>"> </figure>
                                      </td>
                                      <td>
                                        <?PHP echo $user['quantite']; ?>
                                      </td>
                                      <td>
                                        <?PHP echo $user['Prix']; ?>
                                      </td>
                                      <td>
                                        <?PHP echo $user['prix_total']; ?>
                                      </td>
                                      <td>
                                        <?PHP echo $user['modeP']; ?>
                                      </td>

                                      <td>
                                        <form method="POST" action="supprimerCommande.php">
                                          <input type="submit" name="supprimer" value="supprimer">
                                          <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                                        </form>
                                      </td>
                                      <td>
                                        <a href="modifierCommande.php?id=<?PHP echo $user['id']; ?>">
                                          <input type="submit" name="modifier" value="Modifier">

                                        </a>
                                      </td>



                                    </tr>
                                    <?PHP
                  }
                  ?>


                                    </script>
                                    <?PHP
                  }
                  ?>
                                </body>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>



                <section
                  class="elementor-section elementor-inner-section elementor-element elementor-element-d3f0f88 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="d3f0f88" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                    <div
                      class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8dea19"
                      data-id="d8dea19" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">


                      </div>
                    </div>
                    <div
                      class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9598ed3"
                      data-id="9598ed3" data-element_type="column">
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

              <!-- end content-section -->


              </table>
              

              <script>
                function textChanged() {
                  // Declare variables
                  var input, filter, table, tr, td, i, txtValue, j = 0;
                  input = document.getElementById("searchBox");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("users");
                  tr = table.getElementsByTagName("tr");

                  switch (document.getElementById("factor").value) {
                    case "nom":
                      j = 0;
                      break;
                    case "quantite":
                      j = 2;
                      break;
                    case "Prix":
                      j = 3;
                      break;
                    case "Prix total":
                      j = 4;
                      break;
                    case "Mode de paiement":
                      j = 5;
                      break;


                  }

                  // Loop through all table rows, and hide those who don't match the search query
                  for (i = 0; i < tr.length; i++) {

                    td = tr[i].getElementsByTagName("td")[j]; // td = tr[i].getElementsByTagName("td")[j]; 

                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[0].style.display = "";
                        tr[i].style.display = "";
                      } else {
                        tr[0].style.display = "";
                        tr[i].style.display = "none";
                      }
                    }
                  }

                }
              </script>

              <?php require_once("./includes/footer.php"); ?>