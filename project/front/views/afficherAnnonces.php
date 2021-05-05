<?PHP
include "../controllers/AnnonceC.php";

$annoncec=new AnnonceC();
$listeAnnonces=$utilisateurC->afficherAnnonces();

?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Afficher Liste Utilisateurs </title>
</head>
<body>
<button><a href="connexion.php">Ajouter un Utilisateur</a></button>
<hr>
<table border=1 align = 'center'>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Prenom</th>
<th>Email</th>
<th>Login</th>
<th>supprimer</th>
<th>modifier</th>
</tr>

<?PHP
foreach($listeUsers as $user){
?>
<tr>
<td><?PHP echo $user['id']; ?></td>
<td><?PHP echo $user['nom']; ?></td>
<td><?PHP echo $user['prenom']; ?></td>
<td><?PHP echo $user['email']; ?></td>
<td><?PHP echo $user['login']; ?></td>
<td>
<form method="POST" action="supprimerUtilisateur.php">
<input type="submit" name="supprimer" value="supprimer">
<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
</form>
</td>
<td>
<a href="modifierUtilisateur.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
</td>
</tr>
<?PHP
}
?>
</table>
</body>
</html>