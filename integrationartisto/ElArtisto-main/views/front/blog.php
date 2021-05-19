<?php $current_page = "Home"; ?>
<?php require_once("../front/includes/header.php"); ?>


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
                                title="Collections" href="annonces.php" class="nav-link" data-text="Collections">Annonces</a><i></i>
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
        <header class="page-header" style="background: url(../../assets/img/page-header.jpg) center #ffffff;">
            <div class="inner">
                <svg width="580" height="400" class="svg-morph">
                    <path id="svg_morph"
                          d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
                </svg>
                <h1>Our Blogs</h1>
                <p>a regularly updated website or web page, typically one run by an individual or small group, that is
                    written in an informal or conversational style.

                </p>
            </div>
            <!-- end inner -->
        </header>
        <!-- end navbar -->


        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>


                    <section class="bg-white py-10">
                        <!--Start-->
                        <div class="container">
                            <h1>Most popular post:</h1>
                            <hr/>
                            <?php
                            $sql4 = "SELECT * FROM posts WHERE post_status = :status ORDER BY post_views DESC LIMIT 0, 1";
                            $stmt = $pdo->prepare($sql4);
                            $stmt->execute([
                                ':status' => 'Published'
                            ]);
                            $post = $stmt->fetch(PDO::FETCH_ASSOC);
                            $post_id = $post['post_id'];
                            $post_title = $post['post_title'];
                            $post_detail = substr($post['post_detail'], 0, 300);
                            $post_author = $post['post_author'];
                            $post_date = $post['post_date'];
                            $post_image = $post['post_image'];
                            ?>
                            <a class="card post-preview post-preview-featured lift mb-5"
                               href="single.php?post_id=<?php echo $post_id; ?>">
                                <div class="row no-gutters">
                                    <div class="col-lg-5">
                                        <div class="post-preview-featured-img"
                                             style='background-image: url("../../assets/img/<?php echo $post_image; ?>")'></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <div class="py-5">
                                                <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                <p class="card-text">
                                                    <?php echo $post_detail; ?>
                                                </p>
                                            </div>
                                            <hr/>
                                            <div class="post-preview-meta">
                                                <img class="post-preview-meta-img" src="../../assets/img/<?php echo $post_image; ?>"/>
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
                            $sql = "SELECT * FROM posts WHERE post_status = :status";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':status' => 'Published'
                            ]);
                            $post_count = $stmt->rowCount();
                            $post_per_page = 3;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                                if ($page == 1) {
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
                            <hr/>
                            <div class="row">
                                <?php
                                $sql = "SELECT * FROM posts WHERE post_status = :status ORDER BY post_id DESC LIMIT $page_id, $post_per_page";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':status' => 'Published'
                                ]);
                                while ($posts = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $post_id = $posts['post_id'];
                                    $post_title = $posts['post_title'];
                                    $post_detail = substr($posts['post_detail'], 0, 140);
                                    $post_image = $posts['post_image'];
                                    $post_date = $posts['post_date'];
                                    $post_author = $posts['post_author'];
                                    $post_views = $posts['post_views'];
                                    ?>

                                    <div class="col-md-6 col-xl-4 mb-5">
                                        <a class="card post-preview lift h-100"
                                           href="single.php?post_id=<?php echo $post_id; ?>"
                                        ><img class="card-img-top" src="../../assets/img/<?php echo $post_image; ?>"
                                              alt="<?php echo $post_image; ?>"/>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                <p class="card-text"><?php echo $post_detail; ?></p>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <div class="post-preview-meta">
                                                    <img class="post-preview-meta-img" src="../../assets/img/<?php echo $post_image; ?>"/>
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
                                        if (isset($_GET['page'])) {
                                            $prev = $_GET['page'] - 1;
                                        } else {
                                            $prev = 0;
                                        }

                                        if ($prev + 1 <= 1) {
                                            echo '<li class="page-item disabled"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a></li>';
                                        } else {
                                            echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $prev . '" aria-label="Previous"><span aria-hidden="true">&#xAB;</span></a></li>';
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
                                                echo '<li class="page-item active"  ><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                                            } else {
                                                echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                                            }
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['page'])) {
                                            $next = $_GET['page'] + 1;
                                        } else {
                                            $next = 2;
                                        }

                                        if ($next - 1 >= $total_pager) {
                                            echo '<li class="page-item disabled"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a></li>';
                                        } else {
                                            echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $next . '" aria-label="Next"><span aria-hidden="true">&#xBB;</span></a></li>';
                                        }
                                        ?>

                                    </ul>
                                </nav>
                            <?php }
                            ?>

                            <h1 class="pt-5">Most viewed posts:</h1>
                            <hr/>
                            <div class="row">
                                <?php
                                $sql2 = "SELECT * FROM posts WHERE post_status = :status ORDER BY post_views DESC LIMIT 0, 3";
                                $stmt = $pdo->prepare($sql2);
                                $stmt->execute([
                                    ':status' => 'Published'
                                ]);
                                while ($posts = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $post_id = $posts['post_id'];
                                    $post_title = $posts['post_title'];
                                    $post_detail = substr($posts['post_detail'], 0, 140);
                                    $post_image = $posts['post_image'];
                                    $post_date = $posts['post_date'];
                                    $post_author = $posts['post_author'];
                                    $post_views = $posts['post_views']; ?>

                                    <div class="col-md-6 col-xl-4 mb-5">
                                        <a class="card post-preview lift h-100"
                                           href="single.php?post_id=<?php echo $post_id; ?>"
                                        ><img class="card-img-top" src="../../assets/img/<?php echo $post_image; ?>"
                                              alt="<?php echo $post_image; ?>"/>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $post_title; ?></h5>
                                                <p class="card-text"><?php echo $post_detail; ?></p>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <div class="post-preview-meta">
                                                    <img class="post-preview-meta-img" src="../../assets/img/<?php echo $post_image; ?>"/>
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

                            <h1 class="pt-5">Browse by categories:</h1>
                            <hr/>
                            <div class="row features text-center mb-5">
                                <?php
                                $sql1 = "SELECT * FROM categories WHERE category_status = :status";
                                $stmt = $pdo->prepare($sql1);
                                $stmt->execute([
                                    ':status' => 'Published'
                                ]);
                                while ($categories = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $category_id = $categories['category_id'];
                                    $category_title = $categories['category_name'];
                                    $total_posts = $categories['category_total_posts'];
                                    if ($total_posts > 0) {
                                        ?>
                                        <div class="col-lg-4 col-md-6 mb-5">
                                            <a class="card card-link border-top border-top-lg  lift"
                                               href="categories.php?category_id=<?php echo $category_id; ?>&category_name=<?php echo $category_title; ?>"
                                            >
                                                <div class="card-body p-5">
                                                    <div>
                                                        <i data-feather="user"></i></div>
                                                    <h6><?php echo $category_title; ?></h6>
                                                </div>
                                                <div class="card-footer bg-transparent pt-0 pb-5">
                                                    <!--<div class="badge badge-pill badge-dark font-weight-normal px-3 py-2"><?php echo $total_posts; ?>
                                                        Posts
                                                    </div>-->
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                }
                                ?>

                            </div>

                        </div>
                        <!--End-->

                </main>
            </div>


            <section class="content-section no-spacing" data-background="#F1EDD5">
                <div class="container">

                    <?php
                    if(isset($_COOKIE['_uid_']) || isset($_COOKIE['_uiid_']) || isset($_SESSION['login'])) { ?>
                        <form action="index.php" method="POST">
                            <?php
                            if(isset($_COOKIE['_uid_'])) {
                                $user_id = base64_decode($_COOKIE['_uid_']);
                            } else if(isset($_SESSION['user_id'])) {
                                $user_id = $_SESSION['user_id'];
                            } else {
                                $user_id = -1;
                            }
                            $sql = "SELECT * FROM users WHERE user_id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':id' => $user_id
                            ]);
                            $user = $stmt->fetch(PDO::FETCH_ASSOC);
                            $user_name = $user['user_name'];
                            $user_email = $user['user_email'];

                            if(isset($_POST['send'])) {
                                $message = trim($_POST['message']);
                                $sql = "INSERT INTO messages SET ms_username = :username, ms_useremail = :email, ms_detail = :detail, ms_date = :date";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':username' => $user_name,
                                    ':email' => $user_email,
                                    ':detail' => $message,
                                    ':date' => date("M n, Y") . ' at ' . date("h:i A")
                                ]);
                                echo "<p class='alert alert-success'>Message has been send successfully!</p>";
                            }
                            ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="text-dark" for="inputName">Full name</label>
                                    <input value="<?php echo $user_name; ?>" readonly="true" class="form-control py-4" id="inputName" type="text" placeholder="Full name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="text-dark" for="inputEmail">Email</label>
                                    <input value="<?php echo $user_email; ?>" readonly="true" class="form-control py-4" id="inputEmail" type="email" placeholder="name@example.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-dark" for="inputMessage">Message</label>
                                <textarea name="message" class="form-control py-3" id="inputMessage" type="text" placeholder="Enter your message..." rows="4"></textarea>
                            </div>
                            <div class="text-center">
                                <button name="send" class="btn btn-primary btn-marketing mt-4" type="submit">Submit Request</button>
                            </div>
                        </form>



                        <table class="table table-bordered table-hover mt-5" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Your messages:</th>
                                <th>Answers:</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql1 = "SELECT * FROM messages WHERE ms_useremail = :email";
                            $stmt1 = $pdo->prepare($sql1);
                            $stmt1->execute([
                                ':email' => $user_email
                            ]);
                            while($ms = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                $ms_detail = $ms['ms_detail'];
                                $reply = $ms['reply']; ?>
                                <tr>
                                    <td><?php echo $ms_detail; ?></td>
                                    <td><?php echo $reply; ?></td>
                                </tr>
                            <?php }
                            ?>
                            </tbody>
                        </table>


                    <?php } else { ?>
                        <a href="./backend/sign-in.php">Sign in to contact us!</a>
                    <?php }
                    ?>


                </div>
                <!-- end container -->
            </section>
            <!-- end content-section -->
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
