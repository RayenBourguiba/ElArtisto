<?PHP

require_once "../back/includes/config.php";
require('../../assets/FPDF/fpdf.php');
$dbh=config::getConnexion();
$pdf = new FPDF();
$pdf->AddPage();
// code for print Heading of tables
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(80,10);
$pdf->Write(0,'Table des Commandes ');
$pdf->Ln(10);
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='empdata' AND `TABLE_NAME`='commande'";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) { 
foreach($heading as $column_heading)
$pdf->Cell(36,12,$column_heading,1);

}}
//code for print data
$sql = "SELECT annonce.nom,commande.quantite,commande.Prix,commande.prix_total,commande.modeP from  commande INNER JOIN annonce ON commande.idPro=annonce.id ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
$pdf->Cell(36,12,'Nom',1);
$pdf->Cell(36,12,'quantite',1);
$pdf->Cell(36,12,'Prix',1);
$pdf->Cell(36,12,'Prix Total',1);
$pdf->Cell(36,12,'Mode de paiement',1);

if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();

foreach($row as $column)
$pdf->Cell(36,12,$column,1);
} }
$pdf->Output();
?>