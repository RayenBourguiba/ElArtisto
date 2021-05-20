
<?php require_once('./includes/header.php'); ?>
<?PHP
	include "../../contoller/commandeC.php";
  include "../../contoller/annonceC.php";
	
  $annonceC = new AnnonceC();
	$commande=new commandeC();
	$listeUsers=$commande->afficherCommande();
                         
  $commandeC=new commandeC();
	
	if (isset($_POST["id"])){
		$commandeC->supprimerCommande($_POST["id"]);
		header("Refresh:0");
	}            



						 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 2;
$listeUsers = $commande->AffichermPaginer($page, $perpage);


$totalP = $commande->calcTotalRows($perpage);


                        ?>
    <body class="nav-fixed">
        <?php require_once('./includes/top-navbar.php'); ?>
        

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php 
                    $curr_page = basename(__FILE__);
                    require_once("./includes/left-sidebar.php");
                ?>
            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark " style="background-color:#c9ab81">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="layout"></i></div>
                                    <span>Table Commandes</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Table Commandes</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                <table id="users" class="table table-hover my-0">

<?php

if(ISSET($_POST['search'])){
?>
<table id="users" class="table table-bordered">
  <thead>
    <tr>
      <th>Nom</th>
      <th>image </th>
      <th>Quantité</th>
      <th>Prix</th>
      <th>Prix Total</th>
      <th>Mode de paiement</th>
      <th>Supprimer</th>
      <th>Modifier</th>


    </tr>
  <tbody>

    <tr>
      <td><?php echo $annonce['nom']?></td>
      <td>
        <figure> <img src="<?PHP echo $annonce['img']; ?>"
            alt="<?PHP echo $annonce['nom']; ?>"> </figure>
      </td>

      <td><?php echo $row['quantite']?></td>
      <td><?php echo $row['Prix']?></td>
      <td><?php echo $row['prix_total']?></td>
      <td>
        <?PHP echo $row['modeP'] ?>
      </td>
    </tr>

  </tbody>
</table>

<?php   
}else{
?>
<thead>
  <tr>
    <th>Nom</th>
    <th>image </th>
    <th>Quantité</th>
    <th>Prix</th>
    <th>Prix Total</th>
    <th>Mode de paiement</th>
    <th>Supprimer</th>
    



  </tr>
</thead>

<?PHP
foreach($listeUsers as $user){ $annonce = $annonceC->rechercherAnnonceID($user['idPro']);
?>

<tr>
  <td>
    <?PHP echo $annonce['nom']; ?>
  </td>
  <td>
    <figure> <img width="50" height="50" src="../front/<?PHP echo $annonce['img']; ?>"
        alt="<?PHP echo $annonce['nom']; ?>"> </figure>
  </td>
  <td>
    <?PHP echo $user['quantite']; ?>
  </td>
  <td>
    <?PHP echo $user['Prix']; ?>
  </td>
  <td>
    <?PHP echo $user['prix_total']; ?>
  </td>
  <td>
    <?PHP echo $user['modeP']; ?>
  </td>

  <td>
    <form method="POST" action="">
      <input type="submit" name="supprimer" value="supprimer">
      <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
    </form>
  </td>
  



</tr>
<?PHP
}
?>


</script>
<?PHP
}
?>
</body>
</div>
</div>
</div>
</div>
</div>
</div>

</section>



<section
class="elementor-section elementor-inner-section elementor-element elementor-element-d3f0f88 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="d3f0f88" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8dea19"
data-id="d8dea19" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">


</div>
</div>
<div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9598ed3"
data-id="9598ed3" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">



<div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>

</div>
</div>
<section class="content-section no-spacing" data-background="#F1EDD5">
<div class="container">
<div class="row">
<div class="col-12">

<!-- end titles -->
<script>
(function () {
window.mc4wp = window.mc4wp || {
listeners: [],
forms: {
on: function (evt, cb) {
window.mc4wp.listeners.push({
event: evt,
callback: cb
});
}
}
}
})();
</script><!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-468" method="post" data-id="468" data-name="">
<div class="mc4wp-form-fields">
<div class="inner">

<!-- end content-section -->


</table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End Table-->
 
<script>
function textChanged(){
    // Declare variables
  var input, filter, table, tr, td, i, txtValue,j=0;
  input = document.getElementById("searchBox");
  filter = input.value.toUpperCase();
  table = document.getElementById("ExhbTable");
  tr = table.getElementsByTagName("tr");

  switch(document.getElementById("factor").value){
    case "ID":
      j=0;
      break;
    case "Title":
      j=1;
      break;
    case "Date":
      j=2;
      break;
    case "Emplacement":
      j=3;
      break;
    case "Category":
      j=4;
      break;
    case "Ticket Price":
      j=5;
      break;
    case "Host":
      j=6;
      break;

  }

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    
    td = tr[i].getElementsByTagName("td")[j]; // td = tr[i].getElementsByTagName("td")[j]; 
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[0].style.display = "";
        tr[i].style.display = "";
      } else {
        tr[0].style.display = "";
        tr[i].style.display = "none";
      }
    }
  }

}
</script>     
<ul class="pagination pagination-blog justify-content-center">               
<?php

for ($x = 1; $x <= $totalP; $x++) :

?>


    <li class="page-item"><a class="page-link" href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a></li>


<?php endfor; ?></ul>
                </main>

<?php require_once('./includes/footer.php'); ?>
