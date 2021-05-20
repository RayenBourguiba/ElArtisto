<?PHP
require_once "../back/includes/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/integrationartisto/ElArtisto-main/model/Annonce.php";
class AnnonceC{

	function afficherAnnonces(){
	$sql ="SELECT * FROM annonce";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		$liste = $liste->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function AfficherPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM annonce LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	public function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM annonce";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	function afficherAnnonce($id){
	$sql="SELECT categorie,nom,prix,descr,img,boosted,host FROM annonce WHERE id = :id";
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
$sql="INSERT INTO annonce (categorie,nom,prix,descr,img,host)
VALUES (:categorie,:nom,:prix,:descr,:img,:host)";
$db = config::getConnexion();
try{
$query = $db->prepare($sql);

$query->execute([
'categorie' => $Annonce->getCategorie(),
'nom' => $Annonce->getNom(),
'prix' => $Annonce->getPrix(),
'descr' => $Annonce->getDescr(),
'img' =>$Annonce->getImg(),
'host' =>$Annonce->getHost()
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
	$sql = "SELECT id,nom,prix,img,boosted from annonce where nom=:nom"; 
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
	$sql = "SELECT id,nom,prix,img,boosted from annonce where categorie=:categorie"; 
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
	$sql = "SELECT id,nom,prix,descr,img,boosted FROM annonce ORDER BY categorie ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function trierAnnoncesN(){
	$sql ="SELECT id,nom,prix,img,boosted FROM annonce ORDER BY nom ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function afficherAnnoncesB(){
	$sql ="SELECT * FROM annonce";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function afficherMesAnnonces($host){
	$sql ="SELECT * FROM annonce where host = '$host'";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		$liste = $liste->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function rechercherAnnonceID($id) {            
	$sql = "SELECT * from annonce where id=:id"; 
	$db = config::getConnexion();
	try {
		$query = $db->prepare($sql);
		$query->execute([
			'id' => $id
		]); 
		$result = $query->fetch(); 
		return $result;
	}
	catch (PDOException $e) {
		$e->getMessage();
	}
}




}

?>