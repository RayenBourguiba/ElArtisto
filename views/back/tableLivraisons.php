
<?php require_once('./includes/header.php'); ?>
<?PHP
	include "../../contoller/commandeC.php";
  include "../../contoller/annonceC.php";
  include "../../contoller/livraisonC.php";
  include_once $_SERVER['DOCUMENT_ROOT'].'/integrationartisto/ElArtisto-main/model/Annonce.php';
	
  
	
	$user=new livraisonC();
	$listeUsers=$user->afficherlivraison();
	
                         

	
	if (isset($_POST["id"])){
		$user->supprimerLivraison($_POST["id"]);
		header("Refresh:0");
	}            






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
                                    <span>Table Livraisons</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Table Livraisons</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                <table id="users" class="table mb-0">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Nom</th>
<th scope="col">Prénom</th>
<th scope="col">Adresse</th>
<th scope="col">Téléphone</th>

</tr>
</thead>

		
		<hr>
		

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
                <td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom']; ?></td>
					<td><?PHP echo $user['prenom']; ?></td>
					<td><?PHP echo $user['adresse']; ?></td>
					<td><?PHP echo $user['telephone']; ?></td>
          <td><form method="POST" action="">
      <input type="submit" name="supprimer" value="supprimer">
      <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
    </form></td>
				
				</tr>
			<?PHP
				}
			?>
			

		</table>
	</body>
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
                </main>

<?php require_once('./includes/footer.php'); ?>
