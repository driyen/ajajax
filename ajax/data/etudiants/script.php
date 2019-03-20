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
    
    foreach ($etudiants as $key => $etudiant): 

		
     endforeach
?>