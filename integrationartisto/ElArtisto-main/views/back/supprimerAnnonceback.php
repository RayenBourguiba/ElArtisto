<?PHP

include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/Annonce.php';
include_once '../../contoller/AnnonceC.php';

$annoncec = new AnnonceC();

    $annoncec->supprimerAnnonce($_GET['id']);
    //echo $_GET['id'];
    header('Location:annonces.php');
    

?>