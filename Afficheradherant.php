<?php

require_once "../../controller/AdherantC.php";

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inspire - Admin and Dashboard Template</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
<div class="app header-default side-nav-dark">
<div class="layout">

<div class="header navbar">
<div class="header-container">
<div class="nav-logo">
<a href="index.html">
<b><img src="assets/img/logo.png" alt=""></b>
<span class="logo">
<img src="assets/img/logo-text.png" alt="">
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
<img src="assets/img/users/avatar-2.jpg" alt="">
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
<img src="assets/img/users/avatar-3.jpg" alt="">
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
<img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="">
</a>
<ul class="dropdown-menu dropdown-md">
<li>
<ul class="list-media">
<li class="list-item avatar-info">
<div class="media-img">
<img src="assets/img/avatar/avatar.jpg" alt="">
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
<a href=#"#">Dashboard 2</a>
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
<a href=#"calendar.html">Calendar</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"chat-app.html">Chat App</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"contact.html">Contact</a>
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
<a href=#"cards.html">Cards</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"lists.html">Lists</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"typography.html">Typography</a>
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
<a href=#"modals.html">Modals</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"notifications.html">Notifications</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"popover.html">Popover</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"slider-progress.html">Progress Bars</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"tabs.html">Tabs</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"tooltips.html">Tooltips</a>
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
<a href=#"material-icons.html">Material Design</a>
</li>
</ul>
</li>
<li class="nav-item dropdown open">
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
<li class="active">
<a href="form-elements.html">Form Elements</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"form-layouts.html">Form Layouts</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"form-validation.html">Form Validation</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-control-panel"></i>
</span>
<span class="title">Tables</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="basic-table.html">Basic Table</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"data-table.html">Data Table</a>
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
<a href=#"chartjs.html">ChartJs</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"charts-flot.html">Flot Chart</a>
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
<a href=#"vector-map.html">Vector Map</a>
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
<a href=#"profile.html">Profile</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"invoice.html">Invoice</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"faq.html">FAQ</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"login.html">Login</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"sign-up.html">Sign Up</a>
</li>
<li><span class="badge badge-primary badge-pro float-right">Pro</span>
<a href=#"404.html">404</a>
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
<h4 class="page-title">Form Elements</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="index.html">Forms</a></li>
<li class="active"> / Form elements</li>
</ol>
</div>
</div>
</div>


<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">liste adherant</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="ajout_adh.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Ajouter mission</a>
            </div>
        </div>
      <!--  <div claa="form-group">
<form method="get" action="listemadh.php"  class="mb-4">
<input type="text" class="form-control" name="recherche" placeholder="volontaire">
<input type="submit" class="btn btn-primary"  value="Chercher">
</form>
</div>-->
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <?php
                      
                        $adh=new adhC();
                        //$listeadh=$adh->afficheradh();
                        $listeadh=$adh->sortv();
                        ?>
                        <?php
                        // pagination 
                        

//pagination

/*$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

//echo $page;
//echo $perpage;


$listebesoin = $besoin->AffichermPaginer($page, $perpage);
$totalP = $besoin->calcTotalRows($perpage);*/

// end pagination 
                        ?>
                        <?php
                        if(isset($_GET['recherche']))
                        {
                         $search_value=$_GET["recherche"];
                         
                        $listeadh= $adh->recherche($search_value);
                        }
                        ?>
                        <div class="form-group">
<form method="get" action="listeadh.php"  class="mb-4">
<input type="text" class="form-control" name="recherche" placeholder="adherant">
<input type="submit" class="btn btn-primary"  value="Chercher"></div>
<div>
<form method="POST" action="../../views/back/listeadh1.php">
                                        <button type="submit"  id="sort"  class="btn btn-secondary">trie </button>
                                    
                                        </form>  
</div>
</form>
                        <thead>
                        <tr>
                     
                            <th>id  </th>
                            <th>mdp  </th>
                            <th>nom </th>
                            <th>prenom </th>
                            <th>email  </th>
                            <th>tel </th>
                            <th>typead </th>
                            <th>prof  </th>
                            
                            

                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php
                            foreach($listeadh as $row){
                            ?>
                        
                            <td><?php
                                echo $row['id']
                                ?></td>
                                <td><?php
                                echo $row['mdp']
                                ?></td>
                            <td><?php
                                echo $row['nom']
                                ?></td>


                            <td><?php
                                echo $row['prenom']
                                ?></td>
                                <td><?php
                                echo $row['email']
                                ?></td>
                                <td><?php
                                echo $row['tel']
                                ?></td>
                                <td><?php
                                echo $row['typead']
                                ?></td>
                                <td><?php
                                echo $row['prof']
                                ?></td>
                                

                            </td>
                            
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                <a class="dropdown-item" href="modifieradh.php?id=<?PHP echo $row['id']; ?>"<i class="fa fa-pencil m-r-5"></i> Editer</a>
                                    <input class="btn btn-danger" type="submit" value="supprimer">
                                    <input  type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                        <i class="fa fa-pencil m-r-5"></i> modifier</a>
                                        <form method="post" action="supprimeradh.php">
                                            <input class="btn btn-danger" type="submit" value="supprimer">
                                            <input  type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                        </form>


                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <?PHP
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
//
// }
//for ($x = 1; $x <= $totalP; $x++) :

?>

    
<!--pagination end-->
                </div>
            </div>
        </div>
    </div>
</div>







<div class="sidebar-overlay" data-reff=""></div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/Chart.bundle.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>