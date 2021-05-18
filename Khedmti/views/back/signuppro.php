<?php
include '../../entity/adherant.php'; 
include '../../controller/adhC.php';


if (isset($_POST['user_name']) ){
     
    $adhC= new  adhC();
    $adh= new adh($_POST['user_name'],$_POST['user_nickname'],$_POST['user_email'],$_POST['user_password'],$_POST['user_photo'],$_POST['registered_on'],$_POST['user_role']
     );
            session_start();
            $_SESSION['user_name']=$adh->getuser_name();
            $_SESSION['user_password']=$adh->getuser_password();
            $_SESSION['user_id']=$adh->getuser_id();
            $_SESSION['user_role']=$adh->getuser_role();
            $_SESSION['user_nickname']=$adh->getuser_nickname();
            $_SESSION['user_photo']=$adh->getuser_photo();

    $adhC->ajouteradh($adh);
    header('Location: aftersignup/aftersignup.php');
//var_dump($besoin);
}


?>
