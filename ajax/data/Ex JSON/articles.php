<?php
// création fonction
function postContent() {
    
    //connection base de données
	$connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Selection d'une/des table(s) et de ce que l'on veut récupérer dans la/les table(s)
	$request = $connect->prepare("SELECT * FROM JASON ;");
    //execution de la requete
	$request->execute();

	return $request->fetchAll(PDO::FETCH_ASSOC);

}
    // création d'une variable qui appelle la fonction
    $coms = postContent();

function update(){

        
$Title=$_POST['titre'];
$Content =$_POST['article'];



$connec = new PDO('mysql:dbname=Blog_DB', 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("UPDATE JASON SET titre='$Title', article='$Content' WHERE id='$id';");
$request->execute();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JSON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="envoiearticle.js"></script>
</head>
<body>
    <input type="text" id="title" > <br>
      <textarea rows="50" cols="70" type="text" name="content3" id="content3"> </textarea>
        <input onclick="CallAjax()" type="submit" value="Ajouter"> 

        <?php foreach ($coms as $key => $com): ?>

<table>
<tr>
    <!-- récupération des différentes données de la base de données -->
   

    <td><?php echo $com ['titre'] ?></td> 

    <td><?php echo $com ['article'] ?></td> <input onclick ="update()" type="submit" value="Update">


</tr>
</table>
<?php endforeach; ?>
</body>
</html>