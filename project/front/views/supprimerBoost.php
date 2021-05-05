<?PHP

include_once '../models/Boost.php';
include_once '../controllers/BoostC.php';

$boostc = new BoostC();

    $boostc->supprimerBoost($_GET['id']);
    header('Location:boosts.php');
    

?>