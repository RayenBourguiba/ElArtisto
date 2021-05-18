<?php session_start(); ?>
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
    <Body background="background.jpg"> <br>  
<div class="app header-default side-nav-dark">
<div class="layout">


<a href="index.html">
<b><img src="assets/img/logo.png" alt=""></b>
<span class="logo">
<img src="assets/img/logo-text.png" alt="">
</span>
</a>
</div>



<div class="container-fluid" >
<div class="row">
<div class="col-lg-6 col-md-12 col-xs-12">
<div class="card">
<div class="card-header border-bottom">
<h4 class="card-title">Sign up!</h4>
</div>
<div class="card-body">
<p class="card-description">



Enter your information below
</p>
<div class="page-wrapper">
        <div class="content">
            <div>
               <form  method="post" action="signuppro.php">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Username<span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="required" type="text" name="user_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nickname<span class="text-danger"></span></label>
                            <input class="form-control" type="text" placeholder="optional" name="user_nickname">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> E-mail adress </label>
                            <input class="form-control" type="text"  placeholder="required" name="user_email"></input>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password </label>
                            <input class="form-control" type="password" placeholder="required" name="user_password"></input>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Profile picture </label>
                            <input class="form-control" type="text" name="user_photo"></input>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Rgistration date </label>
                            <input class="form-control" placeholder="dd/mm/yyyy" type="text" name="registered_on"></input>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            
                            <label for="user_role">Role</label>
                             <select class="form-control form-control-sm" id="user_role"type="text" name="user_role">
                             <option>Subscriber</option>
                             <option>Admin</option>

</select>
                            
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
        
                      
                        <button type="submit" name="ajouter" class="btn btn-common mr-3">sign up</button>
                        <a class="btn btn-light" href="aftersignup/aftersignup.php">cancel</a>
                        
                                       
                         
                    </div>
                    <div class="text-center"> have an account already ? <a href="login.php">Login</a></div>

                </form> 
            </div>
        </div>
    </div>
</div>


</div>




</form>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>




</div>
</div>
</div>



</div>
</div>
</div>




</div>



</div>
</div>
</div>






</div>
</div>

</form>
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
</body>
</html>
   