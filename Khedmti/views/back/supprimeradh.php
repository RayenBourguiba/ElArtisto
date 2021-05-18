<?PHP
include "../../controller/adhC.php";

$adhC=new adhC();
if (isset($_POST["user_id"])){
    $adhC->supprimeradh($_POST["user_id"]);

    header('Location: listeadh.php');
}

?>