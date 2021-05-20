<?PHP
	include "../../contoller/commandeC.php";

	$commandeC=new commandeC();
	
	if (isset($_POST["id"])){
		$commandeC->supprimerCommande($_POST["id"]);
		header('Location:afficherCommande.php');
	}

?>