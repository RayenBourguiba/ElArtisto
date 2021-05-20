<?PHP
include_once '../back/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/anExhibition.php';
class anExhibition{


    function afficherEvents(){
        $sql ="SELECT * FROM event";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    

    
	

    function ajouterExhibition($exhibition){
        $sql="INSERT INTO event (title, datee, heure, emplacment, categorie, prix_ticket,host,nplaces)
        VALUES (:title, :datee,:heure,:emplacment, :categorie, :prix_ticket,:host, :nplaces)";
        $db = config::getConnexion();
        try{
        $query = $db->prepare($sql);

        $query->execute(['title' => $exhibition->getTitle(),'datee' => $exhibition->getDate(),'heure' => $exhibition->getHeure(),'emplacment' => $exhibition->getEmplacement(),'categorie' => $exhibition->getCategorie(),'prix_ticket' => $exhibition->getPrix_ticket(),'host' => $exhibition->getHost(),'nplaces' => $exhibition->getNplaces()]);
        }
        catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
        }
    }

    function modifierExhibition($exhibition, $id){
        $sql="UPDATE event SET title = :title , datee = :datee, heure= :heure , emplacment = :emplacment , categorie = :categorie , prix_ticket = :prix_ticket ,host = :host ,nplaces = :nplaces WHERE id = '$id' ";
        
        $db = config::getConnexion();
        try{
        $query = $db->prepare($sql);

        $query->execute(['title' => $exhibition->getTitle(),'datee' => $exhibition->getDate(),'heure' => $exhibition->getHeure(),'emplacment' => $exhibition->getEmplacement(),'categorie' => $exhibition->getCategorie(),'prix_ticket' => $exhibition->getPrix_ticket(),'host' => $exhibition->getHost(),'nplaces' => $exhibition->getNplaces()]);
        }
        catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
        }
    }

        
        function rechercherEvent(string $critaire, string $data) { 
            if($data == ""){
                $sql = "SELECT * from event";
            }
            else{      
            switch ($critaire){
                case 'title':
                    $sql = "SELECT * from event where title = '$data'";
                break;
                case 'date':
                    $sql = "SELECT * from event where datee = '$data'";
                break;
                case 'host':
                    $sql = "SELECT * from event where host = '$data'";
                break;
                case 'id':
                    $sql = "SELECT * from event where id = '$data'";
                break;
            }   }  
            
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(); 
                
                $result = $query->fetchAll();               
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }

        function deleteExhb(string $id){
            $sql="delete from event where id = '$id'";
            $db = config::getConnexion();
            try{
            $query = $db->prepare($sql);
    
            $query->execute();
            }
            catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            }
        }

        function afficherEvent($id){
            $sql = "SELECT * from event where id = :id";
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

        function approveEvent($id){
            echo $id;
            $sql ="update event set status = :status where id = '$id' ";
            $db = config::getConnexion();
            try{
            $query = $db->prepare($sql);
    
            $query->execute(['status' => "approved"]);
            }
            catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            }
        }

        function AfficherPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM event LIMIT {$start},{$perPage}";
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
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM event";
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