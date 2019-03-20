<?php
    
    

    $connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	$request = $connect->prepare("SELECT * FROM articles LIMIT 3 ;");

	$request->execute();

    $cible = $request->fetchAll();

    echo json_encode($cible);

    


?>