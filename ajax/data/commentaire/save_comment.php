<?php

function postComment() {
    // envoie vers la base de donnée
    $namerequest = $_POST['comments'] ;
	
	$connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Insérer des données dans la base de donnée avec insert into
	$request = $connect->prepare("INSERT INTO commentaire (dates,content) VALUES (now(), '$namerequest') ;");

	$request->execute();


}
	
    echo $date;
	$comment = postComment();
    
   
?>