<?php


$id=$_POST['id'];
$Title=$_POST['titre'];
$Content=$_POST['article'];



$connec = new PDO('mysql:dbname=Blog_DB', 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("UPDATE JASON SET titre='$Title', article='$Content WHERE id='$id';");
$request->execute();


?>