<?PHP
include_once '../models/Annonce.php';
include_once '../controllers/AnnonceC.php';

$error = "";

// create user
$annonce = null;

// create an instance of the controller
$annoncec = new AnnonceC();
if (
isset($_POST["categorie"]) &&
isset($_POST["nom"]) &&
isset($_POST["prix"]) &&
isset($_POST["descr"]) 
) {
if (
!empty($_POST["categorie"]) &&
!empty($_POST["nom"]) &&
!empty($_POST["prix"]) &&
!empty($_POST["descr"]) 
) {
$annonce = new Annonce(
$_POST['categorie'],
$_POST['nom'],
$_POST['prix'],
$_POST['descr'],
$_POST['photo']

);
$annoncec->ajouterAnnonce($annonce);
//header('Location:afficherAnnonces.php');
}
else
$error = "Missing information";
}

?>