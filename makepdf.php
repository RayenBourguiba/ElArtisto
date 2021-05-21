    <?php

    require_once __DIR__ . '/vendor/autoload.php';
    include "../model/livraison.php";
    include "../controller/livraisonC.php";



    $livraisonC = new livraisonC();
    $user = $livraisonC->recupererLivraison($_POST['id']);
    $id = $user['id'];
    $nom = $user['nom'];
    $prenom =$user['prenom'];
    $adresse =  $user['adresse'];
    $telephone =  $user['telephone'];

    $mpdf = new \Mpdf\Mpdf();

    $data = '';

    $data .= '<h1> Détails livraison</h1>';

    $data .= '<strong> Id </strong> ' . $id . '<br />' ;
    $data .= '<strong> NOM </strong> ' . $nom . '<br />' ;
    $data .= '<strong> Prenom </strong> ' . $prenom . '<br />' ;
    $data .= '<strong> Adresse </strong> ' . $adresse . '<br />' ;
    $data .= '<strong> Telephone </strong> ' . $telephone . '<br />' ;

    $mpdf->WriteHTML($data);
    $mpdf->Output('detail.pdf', 'd');

