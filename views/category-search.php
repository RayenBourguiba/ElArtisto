<?php $current_page = "Search Eesult"; ?>
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

                    <?php 
                        if(isset($_POST['search-keyword'])) {
                            $url = "http://localhost/rayenfinal/views/category-search.php?key=".$_POST['search-keyword']."&cat_id=".$_POST['category-id'];
                            header("Location: {$url}");
                        }
                    ?>

                    <?php
                        if(isset($_GET['key'])) {
                            $keyword = $_GET['key'];
                            $cat_id = $_GET['cat_id'];
                            $sql = "SELECT * FROM posts WHERE post_status = :status AND post_title LIKE :title AND post_category_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':status' => 'Published',
                                ':title' => '%'. trim($keyword) .'%',
                                ':id' => $cat_id
                            ]);
                            $post_found = 0;
                            $count = $stmt->rowCount();
                            if($count == 0) {
                                $post_found = 0;
                            } else {
                                $post_found = $count;
                            }
                        }
                    ?>

                    <header class="page-header page-header-dark">
                        <div class="page-header-content pt-10">
                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h1 class="page-header-title mb-3">Search result for <?php echo $keyword; ?></h1>
                                        <p class="page-header-text">Total posts found: <?php echo $post_found; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </header>
                    <section class="bg-white py-10">
                        <div class="container">
                            
                            <?php
                                $sql = "SELECT * FROM posts WHERE post_status = :status AND post_title LIKE :title AND post_category_id = :id";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':status' => 'Published',
                                    ':title' => '%'. trim($keyword) .'%',
                                    ':id' => $cat_id
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
                            <h1>Search Result:</h1>
                            <hr />
                            <div class="row">
                                <?php 
                                    $sql = "SELECT * FROM posts WHERE post_status = :status AND post_title LIKE :title AND post_category_id = :id LIMIT $page_id, $post_per_page";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([
                                        ':status' => 'Published',
                                        ':title' => '%'. trim($keyword) .'%',
                                        ':id' => $cat_id
                                    ]);
                                    $count = $stmt->rowCount();
                                    if($count == 0) {
                                        echo "No posts found! Try again";
                                    } else {
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
                                                    ><img class="card-img-top" src="./includes/img/<?php echo $post_image; ?>" alt="<?php echo $post_image; ?>" />
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
                                    }
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
                                                    echo '<li class="page-item"><a class="page-link" href="category-search.php?key='.$_GET['key'].'&cat_id='. $_GET['cat_id'] .'&page='. $prev .'" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a></li>';
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
                                                        echo '<li class="page-item active"><a class="page-link" href="category-search.php?key='.$_GET['key'].'&cat_id='.$_GET['cat_id'].'&page='. $i .'">' . $i . '</a></li>';
                                                    } else {
                                                        echo '<li class="page-item"><a class="page-link" href="category-search.php?key='.$_GET['key'].'&cat_id='.$_GET['cat_id'].'&page='. $i .'">' . $i . '</a></li>';
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
                                                    echo '<li class="page-item"><a class="page-link" href="category-search.php?key='.$_GET['key'].'&cat_id='.$_GET['cat_id'].'&page=' . $next . '" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a></li>';
                                                }
                                            ?>
                                            
                                        </ul>
                                    </nav>
                                <?php }
                            ?>

                        </div>

                        <div class="svg-border-rounded text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
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
                                <a href="privacy-policy.php">Privacy Policy</a>
                                &#xB7;
                                <a href="terms-conditions.php">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<?php require_once("./includes/footer.php"); ?>