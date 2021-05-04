<?PHP
require_once "C://wamp64/www/khedmti/config.php";
require_once 'C://wamp64/www/khedmti/entity/adhs.php';

class adhC
{

    public function ajouteradh($adh)
    {
        $sql = "INSERT INTO adherant(id,mdp,nom,prenom,email,tel,typead,prof) 
			VALUES (:id,:mdp,:nom,:prenom,:email,:tel,:typead,:prof)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'id' => $adh->getid(),
                'mdp' => $adh->getmdp(),
                'nom' => $adh->getnom(),
                'prenom'=> $adh->getprenom(),
                'email' => $adh->getemail(),
                'tel' => $adh->gettel(),
                'typead' => $adh->gettypead(),
                'prof'=> $adh->getprof()
               
                

            ]);
            ?>
            <script> alert("adherant crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficheradh()
    {

        $sql = "SELECT * FROM adherant";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimeradh($id)
    {
        $sql = "DELETE FROM adherant WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }


    function recupereradh($id){
        $sql="SELECT * from adherant where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifieradh($adh, $id)
    {
        try {
            $db = config::getConnexion();
            $sql= "UPDATE adherant SET mdp =:mdp,nom =:nom,prenom =:prenom,email = :email, tel = :tel,typead = :typead,prof = :prof WHERE id =".$_GET['id'];
            $query = $db->prepare($sql);
            //  $query->bindValue(':id',1);
            $query->bindValue(':mdp', $adh->getmdp());
            $query->bindValue(':nom', $adh->getnom());
            $query->bindValue(':prenom', $adh->getprenom());
            $query->bindValue(':email', $adh->getemail());
            $query->bindValue(':tel', $adh->gettel());
           
            $query->bindValue(':typead', $adh->gettypead());
            $query->bindValue(':prof', $adh->getprof());
            var_dump($query);
            //die;
            $query->execute();
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recherche($search_value)
        {
            $sql="SELECT * FROM adherant where id like '$search_value' or mdp like '$search_value'or nom like '%$search_value%' or prenom like '%$search_value%' or email like '%$search_value%' or tel like '%$search_value%' or typead like '$search_value' or prof like '$search_value'";
    
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

        function sortv()
    {
        $sql = "SELECT * from adherant order by nom asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

