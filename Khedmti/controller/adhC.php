<?PHP
require_once "C://wamp64/www/khedmti/config.php";
require_once 'C://wamp64/www/khedmti/entity/adherant.php';

class adhC
{

    public function ajouteradh($adh)
    {
        $sql = "INSERT INTO users(user_id,user_name,user_nickname,user_email,user_password,user_photo,registered_on,user_role) 
			VALUES (:user_id,:user_name,:user_nickname,:user_email,:user_password,:user_photo,:registered_on,:user_role)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'user_id' => $adh->getuser_id(),
                'user_name' => $adh->getuser_name(),
                'user_nickname' => $adh->getuser_nickname(),
                'user_email'=> $adh->getuser_email(),
                'user_password' => $adh->getuser_password(),
                'user_photo' => $adh->getuser_photo(),
                'registered_on' => $adh->getregistered_on(),
                'user_role'=> $adh->getuser_role()
               
                

            ]);
            ?>
            <script> alert("users crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficheradh()
    {

        $sql = "SELECT * FROM users where user_role='Subscriber'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function afficheradmin()
    {

        $sql = "SELECT * FROM users where user_role='Admin'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimeradh($user_id)
    {
        $sql = "DELETE FROM users WHERE user_id= :user_id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':user_id', $user_id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }


    function recupereradh($user_id){
        $sql="SELECT * from users where user_id=$user_id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recuperer($user_name){
       $sql="SELECT * from users where user_name='$user_name'";
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




   /* function modifieradh($adh, $user_id)
    {
        try {
            $db = config::getConnexion();
            $sql= "UPDATE users SET user_name =:user_name,user_nickname =:user_nickname,user_email =:user_email,user_password = :user_password, user_photo = :user_photo,registered_on = :registered_on,user_role = :user_role WHERE user_id =".$_GET['user_id'];
            $query = $db->prepare($sql);
            //  $query->bindValue(':user_id',1);
            $query->bindValue(':user_name', $adh->getmdp());
            $query->bindValue(':user_nickname', $adh->getnom());
            $query->bindValue(':user_email', $adh->getprenom());
            $query->bindValue(':user_password', $adh->getemail());
            $query->bindValue(':user_photo', $adh->gettel());
           
            $query->bindValue(':registered_on', $adh->gettypead());
            $query->bindValue(':user_role', $adh->getprof());
            var_dump($query);
            //die;
            $query->execute();
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    } */


    function recherche($search_value)
        {
            $sql="SELECT * FROM users where (user_role='Subscriber') AND (user_name like '%$search_value%' or user_nickname like '%$search_value%' or user_email like '%$search_value%' or registered_on like '%$search_value%')";
    
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

        function rechercheadmin($search_value)
        {
            $sql="SELECT * FROM users where (user_role='Admin') AND (user_name like '%$search_value%' or user_nickname like '%$search_value%' or user_email like '%$search_value%' or registered_on like '%$search_value%')";
    
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
        $sql = "SELECT * from users where user_role='Subscriber'order by user_name asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function sortvadmin()
    {
        $sql = "SELECT * from users where user_role='Admin'order by user_name asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



        function AffichermPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM users where user_role ='Subscriber' LIMIT {$start},{$perPage}";
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
    

    function AffichermPagineradmin($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM users where user_role ='Admin' LIMIT {$start},{$perPage}";
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
    

    public function calcTotalRowsadmin($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM users where user_role='Admin'";
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
    
    
   public function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM users where user_role='Subscriber'";
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