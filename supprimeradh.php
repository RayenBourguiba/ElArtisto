<?PHP
include "../../controller/AdherantC.php";

$adhC=new adhC();
if (isset($_POST["id"])){
    $adhC->supprimeradh($_POST["id"]);

    header('Location: Afficheradherant.php');
}

?>