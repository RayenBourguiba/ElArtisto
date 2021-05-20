<?PHP
include_once '../../contoller/livraisonC.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/integrationartisto/ElArtisto-main/model/livraison.php';
require_once("../front/includes/header.php");


$livraisonC = new livraisonC();
$listeUsers = $livraisonC->afficherlivraison();

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
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit" href="../visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a title="Exhibitions" href="../exhibitions/index.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a title="Collections" href="../collections/index.html" class="nav-link" data-text="Collections">Collections</a><i></i></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="About" href="../about/index.html" class="nav-link" data-text="About">About</a><i></i></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item">
							<a title="Commande" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i>
						</li>
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
					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item active menu-item-456 nav-item">
						<a title="Contact" href="index.html" class="nav-link" aria-current="page" data-text="Contact">Contact</a><i></i>
					</li>
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
				<h1>Livraison</h1>
				<p>Passer votre livraison 

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
													

															<body>
																<hr>
																<table border=1 align='center'>
																	<tr>
																		<th>Id livraison</th>
																		<th>Nom</th>
																		<th>Prénom</th>
																		<th>Adresse </th>
																		<th>Téléphone</th>
																		<th>Supprimer</th>
																		<th>Modifier</th>
																		
																	</tr>

																	<?PHP
																	foreach ($listeUsers as $user) {
																	?>
																		<tr>
																			<td><?PHP echo $user['id']; ?></td>
																			<td><?PHP echo $user['nom']; ?></td>
																			<td><?PHP echo $user['prenom']; ?></td>

																			<td><?PHP echo $user['adresse']; ?></td>
																			<td><?PHP echo $user['telephone']; ?></td>

																			<td>
																				<form method="POST" action="supprimerLivraison.php">
																					<input type="submit" name="supprimer" value="Supprimer">
																					<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">

																				</form>
																			</td>
																			<td>
																				<a href="modifierLivraison.php?id=<?PHP echo $user['id']; ?>">
																					<input type="submit" name="modifier" value="Modifier">
																				</a>
																			</td>
																			
																		</tr>
																	<?PHP
																	}
																	?>
																</table>
															</body>
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

									<!-- end content-section -->
									<?php require_once("./includes/footer.php"); ?>