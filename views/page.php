<?php require_once("./includes/header.php"); ?>


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
                <figure class="logo"><img src="./includes/img/logo-light.png" alt="L'artisto"></figure>
                <!-- end logo -->
                <div class="inner">
                    <div class="widget_text widget aside">
                        <div class="textwidget custom-html-widget">
                            <figure><img src="./includes/img/us.png" alt="Image"></figure>
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
                                        title="Exhibitions" href="exhibitions.html" class="nav-link"
                                        data-text="Exhibitions">Exhibitions</a><i></i></li>
                            <li itemscope="itemscope" itemtype=""
                                id="menu-item-458"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                                        title="Collections" href="collections.html" class="nav-link"
                                        data-text="Collections">Collections</a><i></i></li>
                            <li itemscope="itemscope" itemtype=""
                                id="menu-item-457"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a
                                        title="About" href="about.html" class="nav-link" data-text="About">About</a><i></i>
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
                <div class="logo"><a href="./index.php"> <img src="./includes/img/logo.png" alt="L'Artisto"></a></div>
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
                                    title="Exhibitions" href="./exhibitions.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype=""
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                                    title="Collections" href="./collections.html" class="nav-link" data-text="Collections">Collections</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype=""
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a
                                    title="About" href="./about.html" class="nav-link" data-text="About">About</a><i></i>
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

                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary">
                        <div class="page-header-content pt-10">
                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h1 class="page-header-title mb-3">Post Title</h1>
                                        <p class="page-header-text">Date, category, time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                        </div>
                    </header>
                    <section class="bg-white py-10">
                        <div class="container">
                            <div>
                                <h1>This is a basic content page.</h1>
                                <p class="lead">You can use this page as a starting point to create your own custom pages, or choose an already built example page to start development!</p>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui quisquam animi temporibus ipsum iusto necessitatibus laudantium beatae. Eligendi dolorum laudantium numquam? Officiis nemo error animi aliquam dolor consequatur ducimus unde.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui repellat magni eaque beatae explicabo fugit placeat earum, dolores quaerat aperiam vero adipisci quidem minus officiis blanditiis unde? Incidunt, ea ad.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sed illum soluta, quaerat et deleniti magnam laudantium, non omnis numquam quos placeat. Porro autem consectetur dolor minima voluptatum modi maiores.</p>
                            </div>

                        </div>


                    </section>
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-4 pb-4 mt-auto bg-dark footer-dark">
                    <div class="container">
                        <hr class="my-1" />
                        <div class="row align-items-center">
                            <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#">Privacy Policy</a>
                                &#xB7;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<?php require_once("./includes/footer.php"); ?>