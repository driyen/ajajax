<?php

function getAllEtudiants() {
    
    $namerequest = $_GET['pseudo'] ;

	$connect = new PDO("mysql:dbname=ajax", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$request = $connect->prepare("SELECT * FROM etudiants WHERE prenom LIKE '$namerequest%' ;");

	$request->execute();

	return $request->fetchAll(PDO::FETCH_ASSOC);

}

	$etudiants = getAllEtudiants();

?>

<!DOCTYPE html>

<html lang="fr">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>etudiants</title>

</head>

<body>

<form method ="GET" action="etud.php">

<label for="prenom" >Entrez un prenom : </label> <br>
<input type="submit" value="envoyer">
<input type="text" name="pseudo" id="pseudo"><br>

</form>
		<?php foreach ($etudiants as $key => $etudiant): ?>

		<tr>

			<td><?php echo $etudiant['id'] ?></td>

			<td><?php echo $etudiant['nom'] ?></td>

			<td><?php echo $etudiant['prenom'] ?></td>


				</form>

			</td>

		</tr>

		<?php endforeach; ?>


</body>

<script src="ajaxla.js"></script>
</html>




