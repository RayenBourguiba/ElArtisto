<?php session_start(); ?>
<?php ob_start(); ?>
<?php require_once("../../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - L'Artisto</title>
        <link rel="icon" href="../../assets/img/cropped-apple-touch-icon-144-precomposed-32x32.png">
        <link href="../../assets/css/back/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="../../assets/img/80x80.png" />
        <script data-search-pseudo-elements defer src="../../assets/js/back/all.min.js"></script>
        <script src="../../assets/js/back/feather.min.js"></script>
    </head>

<?php
    if(isset($_SESSION['login']) && $_SESSION['user_role'] == 'admin') {
        // it's ok
    } else {
        header("Location: ../back/signin.php");
    }
?>