<!DOCTYPE html>
<html>
<head>
	<title>Calcul</title>
</head>
<body>

	<form method="POST">
		Matricule : <input type="text" name="matricule" id="matricule"><br>
		Nom : <input type="text" name="nom" id="nom"><br>
		Prénom : <input type="text" name="prenom" id="prenom"><br>
		SalaireBrut : <input type="text" name="salaire" id="salaire"><br>
		TauxCS : <input type="text" name="tauxcs" id="tauxcs"><br>
		TauxCP : <input type="text" name="tauxcp" id="tauxcp"><br>
		<input type="submit" name="calculersalaire" id="calculersalaire"><br>
	</form>

	<?php

		if(isset($_POST['calculersalaire']))
		{
			$lien=mysqli_connect('localhost','root','root','tp');
			$matricule=trim(htmlentities(mysqli_real_escape_string($lien, $_POST["matricule"])));
			$nom=trim(htmlentities(mysqli_real_escape_string($lien,$_POST['nom'])));
			$prenom=trim(htmlentities(mysqli_real_escape_string($lien,$_POST['prenom'])));
			$salaire=trim(htmlentities(mysqli_real_escape_string($lien,$_POST['salaire'])));
			$tauxcs=trim(htmlentities(mysqli_real_escape_string($lien,$_POST['tauxcs'])));
			$tauxcp=trim(htmlentities(mysqli_real_escape_string($lien,$_POST['tauxcp'])));

			/* Récupère la classe Salarié */
			require_once("classes/salarie_classe.php");
			$Salarie = new Salarie("$matricule","$nom","$prenom","$salaire","$tauxcs","$tauxcp");
		}
		
	?>

</body>
</html>