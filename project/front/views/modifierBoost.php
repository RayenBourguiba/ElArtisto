<?PHP

include_once '../models/Boost.php';
include_once '../controllers/BoostC.php';

    $error = "";
    
    $boostc = new BoostC();
	
	if (
		isset($_POST["type"]) && 
        isset($_POST["nombre"]) 
	){
		if (
            !empty($_POST["type"]) && 
            !empty($_POST["nombre"]) 
        ) {
            $boost = new Boost(
            $_POST['type'],$_POST['nombre']    
			);
			
            $boostc->modifierBoost($annonce, $_GET['id']);
            header('Location:boosts.php');
        }
        else
            $error = "Missing information";
	}


?>