<?php


    // envoie vers la base de donnée
   
	
	$connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Insérer des données dans la base de donnée avec insert into
	$request = $connect->prepare("UPDATE clic SET likes=likes +1 ;");

	$request->execute();

	

	
   
    
   
?>