<?php $current_page = "Categories"; ?>
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
                                    title="Exhibitions" href="./exhibitions.html" class="nav-link" data-text="Exhibitions">Exhibitions</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype=""
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                                    title="Collections" href="./collections.html" class="nav-link" data-text="Collections">Collections</a><i></i>
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

                    <header class="page-header page-header-dark bg-secondary">
                        <div class="page-header-content">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 text-center">

                                        <h1 class="page-header-title">Welcome to <?php echo $_GET['category_name']; ?> Category</h1>
                                        <p class="page-header-text mb-5">Are you searching for some content that you haven't found yet? Try searching in the search box below!</p>
                                        <form class="page-header-signup mb-2 mb-md-0" action="category-search.php" method="POST">
                                            <div class="form-row justify-content-center">
                                                <div class="col-lg-6 col-md-8">
                                                    <div class="form-group mr-0 mr-lg-2">
                                                        <input name="search-keyword" class="" type="text" placeholder="Search keyword..."/>
                                                        <input name="category-id" value="<?php echo $_GET['category_id']; ?>" type="hidden"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4"><button class="" type="submit">Search</button></div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-waves text-white">
                            <svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                        }
                                        .b {
                                            clip-path: url(#a);
                                        }
                                        .d {
                                            opacity: 0.5;
                                            isolation: isolate;
                                        }
                                    </style>
                                    <clipPath id="a"><rect class="a" width="1920" height="75" /></clipPath>
                                </defs>
                                <title>wave</title>
                                <g class="b"><path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48" /></g>
                                <g class="b"><path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10" /></g>
                                <g class="b"><path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24" /></g>
                                <g class="b"><path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150" /></g>
                            </svg>
                        </div>
                    </header>
                    <section class="bg-white py-10">
                        <!--Start-->
                        <div class="container">
                        <h1>Most popular post:</h1>
                        <hr />
                            <?php 
                            $sql4 = "SELECT * FROM posts WHERE post_status = :status AND post_category_id = :id ORDER BY post_views DESC LIMIT 0, 1";
                            $stmt = $pdo->prepare($sql4);
                            $stmt->execute([
                                ':status' => 'Published',
                                ':id' => $_GET['category_id']
                            ]);
                            $post = $stmt->fetch(PDO::FETCH_ASSOC);
                            $post_id = $post['post_id'];
                            $post_title = $post['post_title'];
                            $post_detail = substr($post['post_detail'], 0, 300);
                            $post_author = $post['post_author'];
                            $post_date = $post['post_date'];
                            $post_image = $post['post_image'];
                        ?>
                            <a class="card post-preview post-preview-featured lift mb-5" href="single.php?post_id=<?php echo $post_id; ?>">
                                <div class="row no-gutters">
                                    <div class="col-lg-5"><div class="post-preview-featured-img" style='background-image: url("../../assets/img/<?php echo $post_image; ?>")'></div></div>
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <div class="py-5">
                                                <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                <p class="card-text">
                                                    <?php echo $post_detail; ?>
                                                </p>
                                            </div>
                                            <hr />
                                            <div class="post-preview-meta">
                                                <div class="post-preview-meta-details">
                                                    <div class="post-preview-meta-details-name"><?php echo $post_author; ?></div>
                                                    <div class="post-preview-meta-details-date"><?php echo $post_date; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <?php
                                $sql = "SELECT * FROM posts WHERE post_status = :status AND post_category_id = :id";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':status' => 'Published',
                                    ':id' => $_GET['category_id']
                                ]);
                                $post_count = $stmt->rowCount();
                                $post_per_page = 3;
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                    if($page == 1) {
                                        $page_id = 0;
                                    } else {
                                        $page_id = ($page * $post_per_page) - $post_per_page;
                                    }
                                } else {
                                    $page = 1;
                                    $page_id = 0;
                                }
                                $total_pager = ceil($post_count / $post_per_page);
                            ?>

                            <h1>Recent posting:</h1>
                            <hr />
                            <div class="row">
                                <?php
                                    $sql = "SELECT * FROM posts WHERE post_status = :status AND post_category_id = :id ORDER BY post_id DESC LIMIT $page_id, $post_per_page";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([
                                        ':status' => 'Published',
                                        ':id' => $_GET['category_id']
                                    ]);
                                    while($posts = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $post_id = $posts['post_id'];
                                        $post_title = $posts['post_title'];
                                        $post_detail = substr($posts['post_detail'], 0, 140); 
                                        $post_image = $posts['post_image'];
                                        $post_date = $posts['post_date'];
                                        $post_author = $posts['post_author'];
                                        $post_views = $posts['post_views'];
                                        ?>

                                            <div class="col-md-6 col-xl-4 mb-5">
                                                <a class="card post-preview lift h-100" href="single.php?post_id=<?php echo $post_id; ?>"
                                                    ><img class="card-img-top" src="../../assets/img/<?php echo $post_image; ?>" alt="<?php echo $post_image; ?>" />
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                        <p class="card-text"><?php echo $post_detail; ?></p>
                                                    </div>
                                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                                        <div class="post-preview-meta">
                                                            <div class="post-preview-meta-details">
                                                                <div class="post-preview-meta-details-name"><?php echo $post_author; ?></div>
                                                                <div class="post-preview-meta-details-date"><?php echo $post_date; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="post-preview-meta">
                                                            <?php echo $post_views; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                    <?php }
                                ?>
                            </div>

                            <?php
                                if ($post_count > $post_per_page) { ?>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-blog justify-content-center">
                                            <?php 
                                                if(isset($_GET['page'])) {
                                                    $prev = $_GET['page'] - 1;
                                                } else {
                                                    $prev = 0;
                                                }

                                                if($prev+1 <= 1) {
                                                    echo '<li class="page-item disabled"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a></li>';
                                                } else {
                                                    echo '<li class="page-item"><a class="page-link" href="categories.php?category_id='.$_GET['category_id'].'&category_name='. $_GET['category_name'] .'&page='. $prev .'" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a></li>';
                                                }
                                            ?>

                                            <?php 
                                                if (isset($_GET['page'])) {
                                                    $active = $_GET['page'];
                                                } else {
                                                    $active = 1;
                                                }
                                                for ($i = 1; $i <= $total_pager; $i++) {
                                                    if ($i == $active) {
                                                        echo '<li class="page-item active"><a class="page-link" href="categories.php?category_id='.$_GET['category_id'].'&category_name='.$_GET['category_name'].'&page='. $i .'">' . $i . '</a></li>';
                                                    } else {
                                                        echo '<li class="page-item"><a class="page-link" href="categories.php?category_id='.$_GET['category_id'].'&category_name='.$_GET['category_name'].'&page='. $i .'">' . $i . '</a></li>';
                                                    }
                                                    
                                                }
                                            ?>

                                            <?php 
                                                if(isset($_GET['page'])) {
                                                    $next = $_GET['page'] + 1;
                                                } else {
                                                    $next = 2;
                                                }

                                                if($next - 1 >= $total_pager) {
                                                    echo '<li class="page-item disabled"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a></li>';
                                                } else {
                                                    echo '<li class="page-item"><a class="page-link" href="categories.php?category_id='.$_GET['category_id'].'&category_name='.$_GET['category_name'].'&page=' . $next . '" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a></li>';
                                                }
                                            ?>
                                            
                                        </ul>
                                    </nav>
                                <?php }
                            ?>


                            <h1 class="pt-5">Most viewed posts:</h1>
                            <hr />
                            <div class="row">
                                <?php 
                                    $sql2 = "SELECT * FROM posts WHERE post_status = :status AND post_category_id = :id ORDER BY post_views DESC LIMIT 0, 3";
                                    $stmt = $pdo->prepare($sql2);
                                    $stmt->execute([
                                        ':status' => 'Published',
                                        ':id' => $_GET['category_id']
                                    ]);
                                    while($posts = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $post_id = $posts['post_id'];
                                        $post_title = $posts['post_title'];
                                        $post_detail = substr($posts['post_detail'], 0, 140); 
                                        $post_image = $posts['post_image'];
                                        $post_date = $posts['post_date'];
                                        $post_author = $posts['post_author'];
                                        $post_views = $posts['post_views']; ?>

                                            <div class="col-md-6 col-xl-4 mb-5">
                                                <a class="card post-preview lift h-100" href="single.php?post_id=<?php echo $post_id; ?>"
                                                    ><img class="card-img-top" src="../../assets/img/<?php echo $post_image; ?>" alt="<?php echo $post_image; ?>" />
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                        <p class="card-text"><?php echo $post_detail; ?></p>
                                                    </div>
                                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                                        <div class="post-preview-meta">
                                                            <div class="post-preview-meta-details">
                                                                <div class="post-preview-meta-details-name"><?php echo $post_author; ?></div>
                                                                <div class="post-preview-meta-details-date"><?php echo $post_date; ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="post-preview-meta">
                                                            <?php echo $post_views; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                    <?php }
                                ?>
                            </div>

                        </div>
                        <!--End-->   
                        <!--Waves-->
                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="widget_text widget footer-widget"><h6 class="widget-title">About Museum</h6>
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
                                        <div class="widget_text widget footer-widget"><h6 class="widget-title">Connect Us</h6>
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
                                        <div class="widget_text widget footer-widget"><h6 class="widget-title">Visit Us Now</h6>
                                            <div class="textwidget custom-html-widget">
                                                <address class="address">
                                                    Ariana <strong>Tunis Tunisia</strong> <i class="fas fa-info-circle"></i> +216 99
                                                    137
                                                    982
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end container -->
                            <div class="footer-bottom">
                                <div class="container"><span class="copyright">L'Artisto </span> <span class="creation">Site created by <a
                                                href="https://github.com/RayenBourguiba/ElArtisto">team EXELL</a></span></div>
                                <!-- end container -->
                            </div>
                            <!-- end footer-bottom -->
                        </footer>
                        <!-- end footer -->
        </div>
    </div>
<?php require_once("./includes/footer.php"); ?>
