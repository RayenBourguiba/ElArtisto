<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'web');

// For extra protection these are the columns of which the user can sort by (in your database table).
$columns = array('id','nom_produit','quantite','prix_total','modeP');

// Only get the column if it exists in the above columns array, if it doesn't exist the database table will be sorted by the first item in the columns array.
$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];

// Get the sort order for the column, ascending or descending, default is ascending.
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Get the result...
if ($result = $mysqli->query('SELECT * FROM commande ORDER BY ' .  $column . ' ' . $sort_order)) {
	// Some variables we need for the table.
	$up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
	$asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
	$add_class = ' class="highlight"';
	?>
	<!DOCTYPE html>
	<html>

		<body>
			<table>
			<tr>
					<th><a href="tablesort.php?column=id&order=<?php echo $asc_or_desc; ?>">Id<i class="fas fa-sort<?php echo $column == 'id' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="tablesort.php?column=nom_produit&order=<?php echo $asc_or_desc; ?>">Nom du produit<i class="fas fa-sort<?php echo $column == 'nom_produit' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="tablesort.php?column=quantite&order=<?php echo $asc_or_desc; ?>">Quantite<i class="fas fa-sort<?php echo $column == 'quantite' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="tablesort.php?column=prix_total&order=<?php echo $asc_or_desc; ?>">Prix Total<i class="fas fa-sort<?php echo $column == 'prix_total' ? '-' . $up_or_down : ''; ?>"></i></a></th>
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
					<td<?php echo $column == 'id' ? $add_class : ''; ?>><?php echo $row['id']; ?></td>
					<td<?php echo $column == 'nom_produit' ? $add_class : ''; ?>><?php echo $row['nom_produit']; ?></td>
					<td<?php echo $column == 'quantite' ? $add_class : ''; ?>><?php echo $row['quantite']; ?></td>
					<td<?php echo $column == 'prix_total' ? $add_class : ''; ?>><?php echo $row['prix_total']; ?></td>
					
				</tr>
				<?php endwhile; ?>
			</table>
		</body>
	</html>
	<?php
	$result->free();
}
?>