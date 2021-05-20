<?PHP
include_once $_SERVER['DOCUMENT_ROOT'] . '/integrationartisto/ElArtisto-main/model/Annonce.php';
include_once '../../contoller/AnnonceC.php';

$annoncec = new AnnonceC();

$listeAnnonces = $annoncec->afficherAnnonces();

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 4;
$listeAnnonces = $annoncec->AfficherPaginer($page, $perpage);
$totalP = $annoncec->calcTotalRows($perpage);


?>
<?php require_once('./includes/header.php'); ?>

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
                <div class="page-header pb-10 page-header-dark" style="background-color:#c9ab81">
                    <div class="container-fluid">
                        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="users"></i></div>
                                <span>Annonces</span>
                            </h1>
                            <a href="new-user.php" title="Add new category" class="btn btn-white">
                                <div class="page-header-icon"><i data-feather="plus"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Annonces</div>
                        <div class="card-body">

                        <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOM</th>
                                            <th>CATEGORIE</th>
                                            <th>DESCRIPTION</th>
                                            <th>IMAGE</th>
                                            <th>BOOST</th>
                                            <th>SUPPRESSION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?PHP
                                            foreach($listeAnnonces as $Annonce){
                                        ?>
                                            <tr>
                                                <td><?PHP echo $Annonce['id'];?></td>
                                                <td><?PHP echo $Annonce['nom'];?></td>
                                                <td><?PHP echo $Annonce['categorie'];?></td>
                                                <td><?PHP echo $Annonce['descr'];?></td>
                                                <td><img src="../front/<?php echo $Annonce['img']; ?>" width="50" height="50" /></td>
                                                <td>
                                                            <div class="badge badge-<?php echo $Annonce['boosted']==0?"red":"success"; ?>">
                                                                <?php echo $Annonce['boosted']==0?"NON":"OUI"; ?>
                                                            </div>
                                                        </td>
                                                <td><a href="supprimerAnnonceback.php?id=<?PHP echo $Annonce['id']; ?>"><button name="supprimer" type="submit" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a></td>
                                            </tr>
                                        <?PHP
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-blog justify-content-center">

                                    <?php

                                    for ($x = 1; $x <= $totalP; $x++) :

                                    ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a></li>

                                    <?php endfor; ?>
                                    </u1>
                            </nav>

                        </div>
                    </div>
                </div>
                <!--End Table-->
            </main>

            <?php require_once('./includes/footer.php'); ?>
