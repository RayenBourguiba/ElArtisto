<?PHP
include_once '../back/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/aReservation.php';

class aReservation{


    function afficherEvents(){
        $sql ="SELECT reservation.id,reservation.reference,reservation.firstname,reservation.lastname,reservation.email,event.title FROM reservation INNER JOIN event ON reservation.id=event.id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    

    
	

    function ajouterReservation($reservation){
        $sql="INSERT INTO reservation (id, firstname, lastname, email)
        VALUES (:id, :firstname,:lastname,:email)";

        $increment="update event set ticketsReserved = (ticketsReserved + 1) where id = :id  ";

        $db = config::getConnexion();
        try{
        $query = $db->prepare($sql);
        $query->execute(['id' => $reservation->getId(),'firstname' => $reservation->getFirstname(),'lastname' => $reservation->getLastname(), 'email' => $reservation->getEmail()]);
        
        $query = $db->prepare($increment);
        $query->execute(['id' => $reservation->getId()]);
    
        }
        catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
        }
    }

    
        
        function rechercherEvent(string $critaire, string $data) { 
            if($data == ""){
                $sql = "SELECT id,title,datee,heure,emplacment,categorie,prix_ticket,host from event";
            }
            else{      
            switch ($critaire){
                case 'title':
                    $sql = "SELECT id,title,datee,heure,emplacment,categorie,prix_ticket,host from event where title = '$data'";
                break;
                case 'date':
                    $sql = "SELECT id,title,datee,heure,emplacment,categorie,prix_ticket,host from event where datee = '$data'";
                break;
                case 'host':
                    $sql = "SELECT id,title,datee,heure,emplacment,categorie,prix_ticket,host from event where host = '$data'";
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

        function deleteReservation(string $reference){
            $decrement="update event set ticketsReserved = (ticketsReserved - 1) where id = (select id from reservation where reference = '$reference' )  ";
            $sql="delete from reservation where reference = '$reference'";
            $db = config::getConnexion();
            try{
            $query = $db->prepare($decrement);
            $query->execute();
            
            $query = $db->prepare($sql);
            $query->execute();
            
            }
            catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            }
        }



}
?>