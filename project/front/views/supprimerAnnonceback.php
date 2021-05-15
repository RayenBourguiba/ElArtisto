<?PHP

include_once '../models/Annonce.php';
include_once '../controllers/AnnonceC.php';

$annoncec = new AnnonceC();

    $annoncec->supprimerAnnonce($_GET['id']);
    //echo $_GET['id'];
    header('Location:annoncesback.php');
    

?>