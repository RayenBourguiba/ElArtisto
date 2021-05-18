<?php 
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inspire - Admin and Dashboard Template</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
<h5><span class="badge badge-primary badge-pro float-right">745</span>Messages</h5>
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
<span class="badge badge-pill badge-primary badge-pro pull-right">2</span>
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
<li class="nav-item dropdown open">
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
<li class="active">
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
<h4 class="page-title">Dashboard</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="index.html">Home</a></li>
<li class="active">/ Dashboard</li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">

<div class="card-group">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="d-flex no-block align-items-center">
<div>
<div class="icon"><i class="lni-display"></i></div>
<p class="text-muted">New Clients</p>
</div>
<div class="ml-auto">
<h2 class="counter text-primary">234</h2>
</div>
</div>
</div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="d-flex no-block align-items-center">
<div>
<div class="icon"><i class="lni-pencil-alt"></i></div>
<p class="text-muted">Total Projects</p>
</div>
<div class="ml-auto">
<h2 class="counter text-success">1,390</h2>
</div>
</div>
</div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="d-flex no-block align-items-center">
<div>
<div class="icon"><i class="lni-empty-file"></i></div>
<p class="text-muted">Pending Invoices</p>
</div>
<div class="ml-auto">
<h2 class="counter text-info">5,723</h2>
</div>
</div>
</div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="d-flex no-block align-items-center">
<div>
<div class="icon"><i class="lni-cart"></i></div>
<p class="text-muted">All Projects</p>
</div>
<div class="ml-auto">
<h2 class="counter text-purple">2,396</h2>
</div>
</div>
</div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<h5 class="card-title">Business Overview</h5>
<div class="float-right">
<ul class="list-inline d-none d-sm-block">
<li>
<span class="status bg-primary"></span>
<span class="text-semibold">Return</span>
</li>
<li>
<span class="status bg-success"></span>
<span class="text-semibold">Revenue</span>
</li>
<li>
<span class="status bg-purple"></span>
<span class="text-semibold">Cost</span>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div id="morris-bar-example" style="height: 372px"></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="row">
<div class="col-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="sales-info">
<h3>14,0000</h3>
<span>Overall Performance</span>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="35" style="width: 75%"></div>
</div>
<p>42% higher than last month</p>
</div>
</div>
</div>
<div class="col-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="sales-info">
<h3>34,000</h3>
<span>Active Installations</span>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-success" role="progressbar" aria-valuenow="35" style="width: 55%"></div>
</div>
<p>19% less than last month</p>
</div>
</div>
</div>
<div class="col-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="sales-info">
<h3>11,279</h3>
<span>Total downloads</span>
</div>
<div class="progress progress-sm">
<div class="progress-bar bg-purple" role="progressbar" aria-valuenow="35" style="width: 35%"></div>
</div>
<p>73% higher than last month</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Best Performing Clients</h4>
<div class="selected float-right">
<select class="custom-select">
<option selected="selected" value="0">Monthly</option>
<option value="1">Daily</option>
<option value="2">Weekly</option>
<option value="3">Yearly</option>
</select>
</div>
</div>
<div class="table-overflow">
<table class="table table-lg">
<thead>
<tr>
<td class="text-dark text-semibold">Company Name</td>
<td class="text-dark text-semibold">Product</td>
<td class="text-dark text-semibold">Source</td>
<td class="text-dark text-semibold">Status</td>
<td class="text-dark text-semibold">Billed</td>
<td class="text-dark text-semibold">Paid</td>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="list-media">
<div class="list-item">
<div class="media-img">
<a class="btn btn-circle btn-info text-white">TM</a>
</div>
<div class="info">
<span class="title text-semibold">Tesla Motors</span>
</div>
</div>
</div>
</td>
<td>CRM Software</td>
<td>Onsite</td>
<td><a href="#" class="badge badge-danger">Processing</a></td>
<td>$423.00</td>
<td>$168.00</td>
 </tr>
<tr>
<td>
<div class="list-media">
<div class="list-item">
<div class="media-img">
<a class="btn btn-circle btn-danger text-white">SM</a>
</div>
<div class="info">
<span class="title text-semibold">Samsung</span>
</div>
</div>
</div>
</td>
<td>GIS Software</td>
<td>Marketplace</td>
<td><a href="#" class="badge badge-success">Done</a></td>
<td>$665.67</td>
<td>$665.67</td>
</tr>
<tr>
<td>
<div class="list-media">
<div class="list-item">
<div class="media-img">
<a class="btn btn-circle btn-success text-white">DR</a>
</div>
<div class="info">
<span class="title text-semibold">Dropbox Inc.</span>
</div>
</div>
</div>
</td>
<td>Accounting Software</td>
<td>Others</td>
<td><a href="#" class="badge badge-info">On-hold</a></td>
<td>$576.00</td>
<td>$476.00</td>
</tr>
<tr>
<td>
<div class="list-media">
<div class="list-item">
<div class="media-img">
<a class="btn btn-circle btn-primary text-white">UD</a>
</div>
<div class="info">
<span class="title text-semibold">UIdeck</span>
</div>
</div>
</div>
</td>
<td>Sales Dashboard</td>
<td>Marketplace</td>
<td><a href="#" class="badge badge-success">Done</a></td>
<td>$234.00</td>
<td>$234.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-xs-12">
<div class="card">
<div class="card-body text-center">
<h4 class="header-title">Earning Sources</h4>
<ul class="list-inline widget-chart m-t-20 text-center">
<li>
<h4 class=""><b>3654</b></h4>
<p class="text-muted m-b-0">Marketplace</p>
</li>
<li>
<h4 class=""><b>954</b></h4>
<p class="text-muted m-b-0">On Site</p>
</li>
<li>
<h4 class=""><b>262</b></h4>
<p class="text-muted m-b-0">Others</p>
</li>
</ul>
<div id="morris-donut-example" style="height: 240px"></div>
</div>
</div>
</div>
</div>
 <div class="row">
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">To Do Task List</h4>
<div class="card-toolbar">
<ul>
<li>
<a class="text-gray" href="#">
<i class="lni-more-alt"></i>
</a>
</li>
</ul>
</div>
</div>
<ul class="list-task list-group">
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="followUp" checked="">
<label class="custom-control-label" for="followUp">Follow up clients</label>
</div><span class="badge badge-danger">Missed</span>
</div>
</li>
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="JoinMeeting" checked="">
<label class="custom-control-label" for="JoinMeeting">Join business meeting</label>
</div>
</div>
</li>
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="brainstorm" checked="">
<label class="custom-control-label" for="brainstorm">Discuss about new project</label>
</div>
<span class="badge badge-warning">Today</span>
</div>
</li>
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="newFunnel">
<label class="custom-control-label" for="newFunnel">Design a new funnel</label>
</div>
</div>
</li>
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="makeAnewOrder">
<label class="custom-control-label" for="makeAnewOrder">Make a new app</label>
</div>
<span class="badge badge-success">3 weeks</span>
</div>
</li>
<li class="list-group-item border-0" data-role="task">
<div class="d-flex w-100 justify-content-between align-items-center">
<div class="custom-control custom-checkbox material-checkbox">
<input type="checkbox" class="custom-control-input" id="generalThings">
<label class="custom-control-label" for="generalThings">Send materials</label>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="follow">
<div class="card">
<div class="card-header">
<h4 class="card-title">New Clients</h4>
<div class="card-toolbar">
<ul>
<li>
<a class="text-gray" href="#">
<i class="lni-more-alt"></i>
</a>
</li>
</ul>
</div>
</div>
<ul class="list-media">
<li class="list-item">
<div class="client-item">
<div class="media-img">
<img src="assets/img/avatar/user1.png" alt="">
</div>
<div class="info">
<span class="title text-semibold">Johny Vinno</span>
<div class="float-item">
<button class="btn btn-common btn-rounded">Follow</button>
</div>
</div>
</div>
</li>
<li class="list-item">
<div class="client-item">
<div class="media-img">
<img src="assets/img/avatar/user2.png" alt="">
</div>
<div class="info">
<span class="title text-semibold">Robinson</span>
<div class="float-item">
<button class="btn btn-common btn-rounded">Follow</button>
</div>
</div>
</div>
</li>
<li class="list-item">
<div class="client-item">
<div class="media-img">
<img src="assets/img/avatar/user3.png" alt="">
</div>
<div class="info">
<span class="title text-semibold">Chris Anderson</span>
<div class="float-item">
<button class="btn btn-common btn-rounded">Follow</button>
</div>
</div>
</div>
</li>
<li class="list-item">
<div class="client-item">
<div class="media-img">
<img src="assets/img/avatar/user4.png" alt="">
</div>
<div class="info">
<span class="title text-semibold">Kornelia Sturb</span>
<div class="float-item">
<button class="btn btn-common btn-rounded">Follow</button>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="coming-event">
<div class="card">
<div class="card-header">
<h4 class="card-title">Upcoming Event</h4>
<div class="card-toolbar">
<ul>
<li>
 <a class="text-gray" href="#">
<i class="lni-more-alt"></i>
</a>
</li>
</ul>
</div>
</div>
<ul class="event-item">
<li>
<a href="#">
<div class="media">
<div class="img-thumb">
<img class="img-fluid" src="assets/img/event/img-1.jpg" alt="">
</div>
<div class="text">
<h5 class="text-link">Inspire Team</h5>
<p class="day">MAY 11, 2020</p>
<p>Efficiently unleash information </p>
</div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="media">
<div class="img-thumb">
<img class="img-fluid" src="assets/img/event/img-2.jpg" alt="">
</div>
<div class="text">
<h5 class="text-link">Marketing Products</h5>
<p class="day">MAY 18, 2020</p>
<p>Efficiently unleash information </p>
</div>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


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


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/dashborad1.js"></script>
</body>
</html>