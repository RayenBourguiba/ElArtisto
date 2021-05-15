<?PHP
include "config.php";
require_once "../models/Boost.php";
class BoostC{

	function afficherBoosts(){
	$sql ="SELECT * FROM boost";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function ajouterBoost($Boost,$id_annonce){
$sql="INSERT INTO boost (id_annonce,type,nombre,prixtotal)
VALUES (:id_annonce,:type,:nombre,:prixtotal)";
$db = config::getConnexion();
try{
$query = $db->prepare($sql);

$query->execute([
'id_annonce' => $id_annonce,
'type' => $Boost->getType(),
'nombre' => $Boost->getNombre(),
'prixtotal' => $Boost->getNombre()*2
]);
}
catch (Exception $e){
echo 'Erreur: '.$e->getMessage();
}
try {
	$db = config::getConnexion();
	$query = $db->prepare(
	'UPDATE annonce SET
	boosted = 1
	WHERE id = :id_annonce'
	);
	$query->execute([
	'id_annonce' => $id_annonce
	]);
	echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
	$e->getMessage();
	}
}

function modifierBoost($Boost, $id){
try {
$db = config::getConnexion();
$query = $db->prepare(
'UPDATE boost SET
type = :type,
nombre = :nombre,
prixtotal = :prixtotal
WHERE id = :id'
);
$query->execute([
'type' => $Boost->getType(),
'nombre' => $Boost->getNombre(),
'prixtotal' => $Boost->getPrix(),
'id' => $id
]);
echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
$e->getMessage();
}
}

function supprimerBoost($id) {
	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'DELETE FROM boost WHERE id = :id'
		);
		$query->execute([
			'id' => $id
		]);
	} catch (PDOException $e) {
		$e->getMessage();
	}
}

function rechercherBoostT($type) {            
	$sql = "SELECT id,type,nombre,prixtotal from boost where type=:type"; 
	$db = config::getConnexion();
	try {
		$query = $db->prepare($sql);
		$query->execute([
			'type' => $type
		]); 
		$result = $query->fetchAll(); 
		return $result;
	}
	catch (PDOException $e) {
		$e->getMessage();
	}
}

function rechercherBoostP($prixtotal) {            
	$sql = "SELECT id,type,nombre,prixtotal from boost where prixtotal=:prixtotal"; 
	$db = config::getConnexion();
	try {
		$query = $db->prepare($sql);
		$query->execute([
			'prixtotal' => $prixtotal
		]); 
		$result = $query->fetchAll(); 
		return $result;
	}
	catch (PDOException $e) {
		$e->getMessage();
	}
}

function trierBoostsT(){
	$sql ="SELECT id,type,nombre,prixtotal FROM boost ORDER BY type ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function trierBoostsP(){
	$sql ="SELECT id,type,nombre,prixtotal FROM boost ORDER BY prixtotal ASC";
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