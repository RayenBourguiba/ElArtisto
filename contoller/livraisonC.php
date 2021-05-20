<?PHP
	require_once "../back/includes/config.php";
	
	include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/livraison.php';

	class livraisonC {
		
		function ajouterLivraison($livraison){
			$sql="INSERT INTO livraison ( nom, prenom, adresse,  telephone, idCommande) 
			VALUES (:nom,:prenom,:adresse,:telephone,:idCommande)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $livraison->getnom(),
					'prenom' => $livraison->getprenom(),
					'adresse' => $livraison->getadresse(),
					'telephone' => $livraison->gettelephone(),
					'idCommande' => $livraison->getIdCommande()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherLivraison(){
			
			$sql="SELECT * FROM livraison";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerLivraison($id){
			$sql="DELETE FROM livraison WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierLivraison($livraison, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE livraison SET 
					nom = :nom,
					prenom = :prenom,
						adresse = :adresse, 
						telephone = :telephone
						
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $livraison->getnom(),
					'prenom' => $livraison->getprenom(),

					'adresse' => $livraison->getadresse(),
					
					'telephone' => $livraison->gettelephone(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererLivraison($id){
			$sql="SELECT * from livraison where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererLivraison1($id){
			$sql="SELECT * from livraison where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>