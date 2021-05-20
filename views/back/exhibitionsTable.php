
<?php require_once('./includes/header.php'); ?>
<?php
include_once '../../contoller/exhibitionFunctions.php';


$Exhb = new anExhibition();

$listExhibitions = $Exhb->afficherEvents();
if( isset($_POST["searchBtn"]) ){
    $listExhibitions = $Exhb->rechercherEvent(isset($_POST["critaire"]),isset($_POST["data"]));
}
if(isset($_POST["deleteBtn"])){
    $Exhb->deleteExhb($_POST['deleteBtn']);
    
    header("Refresh:0");
    
}
if(isset($_POST["approveBtn"])){
  $Exhb->approveEvent($_POST['approveBtn']);
  
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
                                    <span>Exhibitions Table</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Exhibitions Table</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table id="ExhbTable" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                        <td class="search-box">
<select id="factor" class="form-control">
  <option value="ID">ID</option>
  <option value="Title">Title</option>
  <option value="Date">Date</option>
  <option value="Emplacement">Emplacement</option>
  <option value="Category">Category</option>
  <option value="Ticket Price">Ticket Price</option>
  <option value="Host">Host</option>
</select>
</td>
<td class="search-box">
<form>
<input class="form-control" method="post" type="text" id="searchBox" placeholder="Type to search..." oninput="textChanged()" />
<i class="lni-search"  ></i>
</form>
</td></tr>

                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Location</th>
                                                <th>Category</th>
                                                <th>Ticket Price</th>
                                                <th>Host</th>
                                                <th>Status</th>
                                                <th>Total Places</th>
                                                <th>Tickets Reserved</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <!-- ################################################################################################################# -->
<?php  foreach ($listExhibitions as $exhibition){   ?>
  <form method="POST">
<tr <?php echo "action="; echo strval( $exhibition['id'] ) ; ?>>

<td><a class="btn btn-circle btn-info text-white" name="id"><?php echo strval( $exhibition['id'] )  ?></a></td>


<td>
<div class="list-media">
<div class="list-item">
<div class="info">

<span class="title text-semibold" ><?php echo $exhibition['title'];    ?></span>
</div>
</div>
</div>
</td>
<td><?php echo $exhibition['datee']; echo '&nbsp at &nbsp'; echo $exhibition['heure'];    ?></td>
<td><?php echo $exhibition['emplacment'];    ?></td>
<td><?php echo $exhibition['categorie'];    ?></td>
<td><?php echo $exhibition['prix_ticket']; ?><span  class="info title text-semibold" >&nbsp DT</span></td>
<td><?php echo $exhibition['host'];    ?></td>
<td><?php echo $exhibition['status'];    ?></td>
<td><?php echo $exhibition['nplaces'];    ?></td>
<td><?php echo $exhibition['ticketsReserved'];    ?></td>
<td><button class="badge badge-danger" <?php echo "value ="; echo strval( $exhibition['id'] );  ?> name="deleteBtn">Delete</button>
<?php if($exhibition['status']=="pending"){echo"<button class='badge badge-info' value ='$exhibition[id]' name='approveBtn'>Approve</button>";} ?></td>
</tr>

<?php } ?>
<!-- ################################################################################################################# -->
                                        </tbody>
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
