<?php $current_page = "Post detail"; ?>
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

        </div>
        <!-- end custom-menu -->
        <div class="site-menu">
          <ul id="menu-main-menu" class="menu">
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-460"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
                href="visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-459"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
                title="Exhibitions" href="exhibitions/index.html" class="nav-link"
                data-text="Exhibitions">Exhibitions</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-458"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
                title="Collections" href="annonces.php" class="nav-link"
                data-text="Collections">Annonces</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-457"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="Blog"
                href="blog.php" class="nav-link" data-text="Blog">Blog</a><i></i></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-456"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact"
                href="contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
          </ul>
        </div>
        <!-- end site-menu -->
      </div>
      <!-- end display-mobile -->
    </aside>
    <!-- end side-widget -->

    <nav class="navbar">
      <div class="logo"> <a href="index.php"> <img src="../../assets/img/logo.png"
            alt="Wandau | Art &amp; History Museum WordPress Theme"></a></div>
      <div class="custom-menu">

      </div>
      <div class="site-menu">
        <ul id="menu-main-menu-1" class="nav-menu">
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460 nav-item"><a title="Visit"
              href="visit/index.html" class="nav-link" data-text="Visit">Visit</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459 nav-item"><a
              title="Exhibitions" href="exhibitions/index.html" class="nav-link"
              data-text="Exhibitions">Exhibitions</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458 nav-item"><a
              title="Collections" href="annonces.php" class="nav-link"
              data-text="Collections">Annonces</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-457 nav-item"><a title="Blog"
              href="blog.php" class="nav-link" data-text="Blog">Blog</a><i></i></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456 nav-item"><a title="Contact"
              href="contact/index.html" class="nav-link" data-text="Contact">Contact</a><i></i></li>
        </ul>
      </div>
      <div class="search-button"> <i class="fas fa-search"></i> </div>
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


        <?php
        if(isset($_GET['post_id'])) {
            $post_id = $_GET['post_id'];
            $sql = "SELECT * FROM posts WHERE post_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $post_id
            ]);
            $post = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            if($count == 0) {
                header("Location: index.php");
            }
            $post_title = $post['post_title'];

            $post_category_id = $post['post_category_id'];
            $sql = "SELECT * FROM categories WHERE category_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $post_category_id
            ]);
            $category = $stmt->fetch(PDO::FETCH_ASSOC);

            $post_detail = $post['post_detail'];
            $post_author = $post['post_author'];
            $post_image = $post['post_image'];

            $sql1 = "UPDATE posts SET post_views = post_views + 1 WHERE post_id = :id";
            $stmt = $pdo->prepare($sql1);
            $stmt->execute([
                ':id' => $post_id
            ]);

        } else {
            header("Location: index.php");
        }
        ?>


        <!-- end navbar-button -->
    </nav>
    <header class="page-header" style="background: url(../../assets/img/<?php echo $post_image;?>) center #ffffff;">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                      d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
            </svg>
            <h1><?php echo $post_title; ?></h1>
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
                        <div class="container">
                            <!--start post content-->
                            <div>
                                <h1><?php echo $post_title; ?></h1>
                                <p class="lead">
                                    <?php echo $post_detail; ?>
                                </p>
                            </div>
                            <!--end post content-->

                            <!--start comment section-->
                            <div class="pt-5 col-lg-8 col-xl-9">
                                <div class="d-flex align-items-center justify-content-between flex-column flex-md-row">
                                    <h2 class="mb-0">Comments</h2>
                                </div>
                                <hr class="mb-4" />
                                <?php 
                                    $sql = "SELECT * FROM comments WHERE com_post_id = :id";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([
                                        ':id' => $_GET['post_id']
                                    ]);
                                    $count = $stmt->rowCount();
                                    if($count == 0) {
                                        echo "No comments";
                                    } else {
                                        $sql1 = "SELECT * FROM comments WHERE com_post_id = :id";
                                        $stmt1 = $pdo->prepare($sql1);
                                        $stmt1->execute([
                                            ':id' => $_GET['post_id']
                                        ]);
                                        while($comments = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                            $user_name = $comments['com_user_name'];
                                            $com_date = $comments['com_date'];
                                            $com_detail = $comments['com_detail']; 
                                            $com_status = $comments['com_status'];
                                            $com_user_id = $comments['com_user_id'];
                                            // com status unpproved and com_user_id == singedInUserID
                                            if(isset($_SESSION['user_id'])) {
                                                $signed_in_user_id = $_SESSION['user_id'];
                                            } else if(isset($_COOKIE['_uid_'])) {
                                                $signed_in_user_id = base64_decode($_COOKIE['_uid_']);
                                            } else  {
                                                $signed_in_user_id = -1;
                                            }

                                            if($com_status == 'unapproved' && $com_user_id == $signed_in_user_id) { ?>
                                                <div class="card mb-5">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <div class="mr-2 text-dark">
                                                            <?php echo $user_name; ?>
                                                            <div class="text-xs text-muted"><?php echo $com_date; ?></div>
                                                        </div>
                                                        <div class="h5"><span class="badge badge-warning-soft text-warning font-weight-normal">Awaiting Response</span></div>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php echo $com_detail; ?>
                                                    </div>
                                                </div>
                                           <?php } else if($com_status == 'approved') { ?>
                                                <div class="card mb-5">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <div class="mr-2 text-dark">
                                                            <?php echo $user_name; ?>
                                                            <div class="text-xs text-muted"><?php echo $com_date; ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php echo $com_detail; ?>
                                                    </div>
                                                </div>
                                            <?php }
                                            ?>

                                            

                                        <?php }
                                    }
                                ?>
                                
                                <?php 
                                    if(isset($_COOKIE['_uid_']) || isset($_COOKIE['_uiid_']) || isset($_SESSION['login'])) { ?>
                                        <div class="card">
                                            <div class="card-header">Add Comment</div>
                                            <div class="card-body">
                                                <?php 
                                                    if(isset($_POST['submit'])) {
                                                        $comments = trim($_POST['comments']);
                                                        $sql = "INSERT INTO comments (com_post_id, com_detail, com_user_id, com_user_name, com_date, com_status) VALUES (:post_id, :com_detail, :user_id, :user_name, :com_date, :com_status)";
                                                        $stmt = $pdo->prepare($sql);

                                                        if(isset($_SESSION['user_id'])) {
                                                            $signed_in_user_id = $_SESSION['user_id'];
                                                        } else if(isset($_COOKIE['_uid_'])) {
                                                            $signed_in_user_id = base64_decode($_COOKIE['_uid_']);
                                                        } else  {
                                                            $signed_in_user_id = -1;
                                                        }

                                                        $sql2 = "SELECT * FROM users WHERE user_id = :id";
                                                        $stmt2 = $pdo->prepare($sql2);
                                                        $stmt2->execute([
                                                            ':id' => $signed_in_user_id
                                                        ]);
                                                        $result = $stmt2->fetch(PDO::FETCH_ASSOC);
                                                        $user_name = $result['user_name'];

                                                        $stmt->execute([
                                                            ':post_id' => $_GET['post_id'],
                                                            ':com_detail' => $comments,
                                                            ':user_id' => $signed_in_user_id,
                                                            ':user_name' => $user_name,
                                                            ':com_date' => date("M n, Y") . ' at ' . date("h:i A"),
                                                            ':com_status' => 'unapproved'
                                                        ]);
                                                        header("Location: single.php?post_id={$_GET['post_id']}");
                                                    }
                                                ?>
                                                <form action="single.php?post_id=<?php echo $_GET['post_id']; ?>" method="POST">
                                                    <textarea name="comments" placeholder="Type here..." class="form-control mb-2" rows="4"></textarea>
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm mr-2">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                   <?php } else {
                                        echo "<a href='./backend/signin.php'>Sign in to comment</a>";
                                   }
                                ?>
                                

                            </div>
                            <!--end comment section end-->
                        </div>

                    </section>
                </main>
            </div>
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