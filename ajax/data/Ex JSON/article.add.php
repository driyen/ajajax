<?php 

include_once('post.php');

function AddContent() {
    // envoie vers la base de donnée
    $namerequest = $_POST['content3'] ;
	$Titre = $_POST['title'];

	

	$connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Insérer des données dans la base de donnée avec insert into
	$request = $connect->prepare("INSERT INTO JASON (titre,article) VALUES ('$Titre', '$namerequest') ;");

	$request->execute();


}
	
    
	$content = AddContent();


// Création d'un objet 
$post=new Article();
$post->id=10;

$namerequest = $_POST['content3'] ;
$Titre = $_POST['title'];
//Attribution des colonnes de ma base de donnée ($post->nomcolonne="variable")
$post->titre="TONY LE CHALL";
$post->article="Tony a dû lâcher un remueur qu il a drop car le CHALL n a pas été respecté. Cependant, cette action fût WORTH IT, celà m a permis de m acheter le Solomonk + 1PA";

echo json_encode($post);

?>

 