
<?PHP
require_once "../back/includes/config.php";
	 include_once $_SERVER['DOCUMENT_ROOT']."/integrationartisto/ElArtisto-main/model/commande.php";

	class commandeC {
		
		function ajouterCommande($commande,$idPro): int{
			$sql="INSERT INTO commande ( idPro,  quantite, Prix, prix_total,modeP) 
			VALUES (:idPro, :quantite, :Prix, :prix_total, :modeP)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'idPro' => $idPro,
					'quantite' => $commande->getquantite(),
					'Prix' => $commande->getPrix(),
					'prix_total' => $commande->getprix_total(),
					'modeP' => $commande->getmodeP(),
				]);	
				$last_id = $db->lastInsertId();
				return $last_id;

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommande(){
			
			$sql="SELECT commande.id,commande.idPro,annonce.nom,annonce.img,commande.quantite,commande.Prix,commande.prix_total,commande.modeP
			FROM commande,annonce
			WHERE  commande.idPro =annonce.id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCommande($id){
			$sql="DELETE FROM commande WHERE id= :id";
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
		function modifierCommande($commande, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
						quantite = :quantite,
						prix_total = :prix_total,
                        modeP = :modeP
					WHERE id = :id'
				);
				$query->execute([
					'quantite' => $commande->getquantite(),
					'prix_total' => $commande->getprix_total(),					
                    'modeP' => $commande->getmodeP(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererCommande($id){
			$sql="SELECT * from commande where id=$id";
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

		function recupererCommande1($id){
			$sql="SELECT * from commande where id=$id";
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
		function recherche($search_value)
        {
            $sql="SELECT * FROM commande where 
			 id like '$search_value' or
			 idPro like '$search_value'
			 or quantite like '%$search_value%' 
			 or Prix like '%$search_value%' 
			 or prix_total like '%$search_value%' 
			 or modeP like '%$search_value%'";

            //global $db;
            $db =Config::getConnexion();

            try{
                $result=$db->query($sql);

                return $result;

            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

		function AffichermPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM commande LIMIT {$start},{$perPage}";
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
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM commande ";
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

	
	}

?>