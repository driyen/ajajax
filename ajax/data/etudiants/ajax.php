<!DOCTYPE html>

<html lang="fr">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>etudiants</title>

    <script src="funcajax.js"></script>
    
</head>

<body>



<form method ="GET" action="ajax.php">

<label for="prenom" >Entrez un prenom : </label> <br>
<input type="submit" value="envoyer">
<input onkeydown="getEtudiants()" type="text" name="pseudo" id="pseudo"><br>

</form>
<div id="etudiants"> 

</body>


</html>




