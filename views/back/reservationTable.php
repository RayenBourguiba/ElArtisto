
<?php require_once('./includes/header.php'); ?>
<?php
include_once '../../contoller/reservationFunctions.php';


$reservation = new aReservation();

$listReservations = $reservation->afficherEvents();
if( isset($_POST["searchBtn"]) ){
    $listExhibitions = $Exhb->rechercherEvent(isset($_POST["critaire"]),isset($_POST["data"]));
}
if(isset($_POST["deleteBtn"])){
    $reservation->deleteReservation($_POST['deleteBtn']);
    
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
                                    <span>Reservations Table</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Reservations Table</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="ResTable" width="100%" cellspacing="0">

                                    

                                        <thead>
                                        <tr>
                                        <td class="search-box">
                                        <select id="factor" class="form-control">
  <option value="Reference">Reference</option>
  <option value="ID">ID</option>
  <option value="Title">Title</option>
  <option value="FirstName">First Name</option>
  <option value="LastName">Last Name</option>
  <option value="Email">Email</option>
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
                                                <th>Event ID</th>
                                                <th>Event Title</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                

                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <!-- ################################################################################################################# -->
<?php  foreach ($listReservations as $reservation){   ?>
  <form method="POST">
<tr <?php echo "action="; echo strval( $reservation['reference'] ) ; ?>>

<td><a class="btn btn-circle btn-info text-white" name="reference"><?php echo strval( $reservation['reference'] )  ?></a></td>

<td><?php echo $reservation['id'];    ?></td>
<td>
<div class="list-media">
<div class="list-item">
<div class="info">

<span class="title text-semibold" ><?php echo $reservation['title'];    ?></span>
</div>
</div>
</div>
</td>

<td><?php echo $reservation['firstname'];    ?></td>
<td><?php echo $reservation['lastname']; ?></td>
<td><?php echo $reservation['email'];    ?></td>

<td><button class="badge badge-danger" <?php echo "value ="; echo strval( $reservation['reference'] );  ?> name="deleteBtn">Delete</button> 
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
  table = document.getElementById("ResTable");
  tr = table.getElementsByTagName("tr");

  switch(document.getElementById("factor").value){
    case "Reference":
      j=0;
      break;
    case "ID":
      j=1;
      break;
    case "Title":
      j=2;
      break;
    case "FirstName":
      j=3;
      break;
    case "LastName":
      j=4;
      break;
    case "Email":
      j=5;
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
