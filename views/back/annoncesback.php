
<?PHP
include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/Annonce.php';
include_once '../../contoller/AnnonceC.php';

$annoncec=new AnnonceC();

$listeAnnonces=$annoncec->afficherAnnonces();

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 4;
$listeAnnonces = $annoncec->AfficherPaginer($page, $perpage);
$totalP = $annoncec->calcTotalRows($perpage);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inspire - Admin and Dashboard Template</title>

    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="includes/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="includes/css/main.css">

    <link rel="stylesheet" type="text/css" href="includes/css/responsive.css">
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">

            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="index.html">
                            <b><img src="includes/img/mini logo.png" alt=""></b>
                            <span class="logo">
<img src="includes/img/logo-text.png" alt="">
</span>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="search-box">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <i class="lni-search"></i>
                        </li>
                        <li class="massages dropdown dropdown-animated scale-left">
                            <span class="counter">3</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-envelope"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <div class="dropdown-item align-self-center">
                                        <h5><span class="badge badge-primary float-right">745</span>Messages</h5>
                                    </div>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
Amanda Robertson
</span>
                                                    <span class="sub-title">Dummy text of the printing and typesetting industry.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="includes/img/users/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
Danny Donovan
</span>
                                                    <span class="sub-title">It is a long established fact that a reader will</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="includes/img/users/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
Frank Handrics
</span>
                                                    <span class="sub-title">You have 87 unread messages</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
<a href="#" class="text-gray">View All</a>
</span>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-alarm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <h5 class="n-title text-center">
                                        <i class="lni-alarm"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="lni-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
5 new messages
</span>
                                                    <span class="sub-title">4 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
4 new comments
</span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="lni-users"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
3 Friend Requests
</span>
                                                    <span class="sub-title">a day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-purple">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
2 new messages
</span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
<a href="#" class="text-gray">Check all notifications</a>
</span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="includes/img/avatar/avatar.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item avatar-info">
                                            <div class="media-img">
                                                <img src="includes/img/avatar/avatar.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Tomas Murray</span>
                                                <span class="sub-title">UI/UX Desinger</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="lni-cog"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-envelope"></i>
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-primary pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-lock"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
                                <span class="title">Dashboard</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "#">Dashboard 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-cloud"></i>
</span>
                                <span class="title">Apps</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="email.html">Email</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "calendar.html">Calendar</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "chat-app.html">Chat App</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "contact.html">Contact</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-layers"></i>
</span>
                                <span class="title">UI Elements</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="alert.html">Alert</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badge</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "cards.html">Cards</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "lists.html">Lists</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-timer"></i>
</span>
                                <span class="title">Components</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="accordion.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="dropdown.html">Dropdown</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "modals.html">Modals</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "notifications.html">Notifications</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "popover.html">Popover</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "slider-progress.html">Progress Bars</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "tabs.html">Tabs</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-package"></i>
</span>
                                <span class="title">Icons</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="line-icons.html">Line Icons</a>
                                </li>
                                <li>
                                    <a href="fontawesome-icons.html">Font Awesome</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "material-icons.html">Material Design</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-files"></i>
</span>
                                <span class="title">Forms</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "form-layouts.html">Form Layouts</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "form-validation.html">Form Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-control-panel"></i>
</span>
                                <span class="title">Annonces</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li >
                                    <a href="boostsback.php">Boosts</a>
                                </li>
                                <li class="active"><span class="badge badge-primary badge-pro float-right"></span>
                                    <a href="annoncesback.php">Annonces</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#">
                                    <span class="icon-holder">
<i class="lni-pie-chart"></i>
</span>
                                    <span class="title">Charts</span>
                                    <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                                </a>
                                <ul class="dropdown-menu sub-down">
                                    <li>
                                        <a href="charts-morris.html">Marris Chart</a>
                                    </li>
                                    <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                        <a href=# "chartjs.html">ChartJs</a>
                                    </li>
                                    <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                        <a href=# "charts-flot.html">Flot Chart</a>
                                    </li>
                                </ul>
                            </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-map-marker"></i>
</span>
                                <span class="title">Map</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="google-map.html">Google Map</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="badge badge-primary badge-pro float-right">Pro</span>
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
<i class="lni-files"></i>
</span>
                                <span class="title">Pages</span>
                                <span class="arrow">
<i class="lni-chevron-right"></i>
</span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "profile.html">Profile</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "invoice.html">Invoice</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "faq.html">FAQ</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "login.html">Login</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "sign-up.html">Sign Up</a>
                                </li>
                                <li><span class="badge badge-primary badge-pro float-right">Pro</span>
                                    <a href=# "404.html">404</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="page-container">

                <div class="main-content">
                    <div class="container-fluid">

                        <div class="breadcrumb-wrapper row">
                            <div class="col-12 col-lg-3 col-md-6">
                                <h4 class="page-title">Table</h4>
                            </div>
                            <div class="col-12 col-lg-9 col-md-6">
                                <ol class="breadcrumb float-right">
                                    <li><a href="#">Annonces</a></li>
                                    <li class="active"> / Basic Table</li>
                                </ol>
                            </div>
                        </div>

                    </div>

<?PHP foreach($listeAnnonces as $Annonce){ ?>
<tr>
<div class="media-img">
<td><a class="btn btn-circle btn-info text-white"><?php echo strval( $Annonce['id'] )  ?></a></td>
</div>
<td>
<div class="list-media">
<div class="list-item">
<div class="info">
<figure><img src="<?PHP echo $Annonce ['img']; ?>" alt="<?PHP echo $Annonce ['nom']; ?>" ></figure>
<span class="title text-semibold"><h3><?PHP echo $Annonce['nom']; ?></h3></span>
<span class="title text-semibold"><h4><?PHP echo $Annonce['descr']; ?></h4></span>
<a href="supprimerAnnonceback.php?id=<?PHP echo $Annonce['id']; ?>"> Supprimer </a>
</div>
</div>
</div>
</td>
</tr>
<?php } ?>

<nav aria-label="Page navigation example">
                <ul class="pagination pagination-blog justify-content-center">

                    <?php

                    for ($x = 1; $x <= $totalP; $x++) :

                    ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a></li>

                    <?php endfor; ?>
                </u1>
            </nav>


                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
                            <span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
                        </div>
                    </div>
                </footer>

            </div>

        </div>
    </div>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="includes/js/jquery-min.js"></script>
    <script src="includes/js/popper.min.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/jquery.app.js"></script>
    <script src="includes/js/main.js"></script>
</body>

</html>