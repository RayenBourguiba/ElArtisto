<?php
include '../../model/adherant.php'; 
include '../../controller/AdherantC.php';

if (isset($_POST['mdp']) ){

    $adhC= new  adhC();
    $adh= new adh($_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],$_POST['typead'],$_POST['prof']
    );

    $adhC->AdherantC($adh);
    header('Location: Afficheradherant.php');
//var_dump($besoin);
}


?>


