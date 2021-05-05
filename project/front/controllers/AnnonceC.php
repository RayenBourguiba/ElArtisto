<?PHP
include "config.php";
require_once "../models/Annonce.php";
class AnnonceC{

	function afficherAnnonces(){
	$sql ="SELECT id,nom,prix,img FROM annonce";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

	function afficherAnnonce($id){
	$sql="SELECT categorie,nom,prix,descr,img FROM annonce WHERE id = :id";
	$db = config::getConnexion();
	try{
	$query = $db->prepare($sql);
	
	$query->execute([
	'id' => $id
	]);
	return $query->fetch();
	}
	catch (Exception $e){
	echo 'Erreur: '.$e->getMessage();
	}
}

function ajouterAnnonce($Annonce){
$sql="INSERT INTO annonce (categorie,nom,prix,descr,img)
VALUES (:categorie,:nom,:prix,:descr,:img)";
$db = config::getConnexion();
try{
$query = $db->prepare($sql);

$query->execute([
'categorie' => $Annonce->getCategorie(),
'nom' => $Annonce->getNom(),
'prix' => $Annonce->getPrix(),
'descr' => $Annonce->getDescr(),
'img' =>$Annonce->getImg()
]);
}
catch (Exception $e){
echo 'Erreur: '.$e->getMessage();
}
}

function modifierAnnonce($Annonce, $id){
try {
$db = config::getConnexion();
$query = $db->prepare(
'UPDATE annonce SET
nom = :nom,
prix = :prix,
descr = :descr
WHERE id = :id'
);
$query->execute([
'nom' => $Annonce->getNom(),
'prix' => $Annonce->getPrix(),
'descr' => $Annonce->getDescr(),
'id' => $id
]);
echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
$e->getMessage();
}
}

function supprimerAnnonce($id) {
	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'DELETE FROM annonce WHERE id = :id'
		);
		$query->execute([
			'id' => $id
		]);
	} catch (PDOException $e) {
		$e->getMessage();
	}
}

function rechercherAnnonceN($nom) {            
	$sql = "SELECT id,nom,prix,img from annonce where nom=:nom"; 
	$db = config::getConnexion();
	try {
		$query = $db->prepare($sql);
		$query->execute([
			'nom' => $nom
		]); 
		$result = $query->fetchAll(); 
		return $result;
	}
	catch (PDOException $e) {
		$e->getMessage();
	}
}

function rechercherAnnonceC($categorie) {            
	$sql = "SELECT id,nom,prix,img from annonce where categorie=:categorie"; 
	$db = config::getConnexion();
	try {
		$query = $db->prepare($sql);
		$query->execute([
			'categorie' => $categorie
		]); 
		$result = $query->fetchAll(); 
		return $result;
	}
	catch (PDOException $e) {
		$e->getMessage();
	}
}

function trierAnnoncesC(){
	$sql ="SELECT id,nom,prix,img FROM annonce ORDER BY categorie ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function trierAnnoncesN(){
	$sql ="SELECT id,nom,prix,img FROM annonce ORDER BY nom ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

}

?>