<?PHP

include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/Boost.php';
include_once '../../contoller/BoostC.php';

$boostc = new BoostC();

    $boostc->supprimerBoost($_GET['id']);
    header('Location:boosts.php');
    

?>