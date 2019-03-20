<?php
// création fonction
function postCom() {
    
    //connection base de données
	$connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Selection d'une/des table(s) et de ce que l'on veut récupérer dans la/les table(s)
	$request = $connect->prepare("SELECT * FROM commentaire ;");
    //execution de la requete
	$request->execute();

	return $request->fetchAll(PDO::FETCH_ASSOC);

}
    // création d'une variable qui appelle la fonction
	$coms = postCom();
    
function dislikz(){
    $connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Mettre à jour dans la base de donnée avec update
    $request = $connect->prepare("UPDATE clic SET dislike=dislike +1 ;");
    
    $request->execute();
    }

    $dislikz = dislikz() ;

function likz (){
    $connect = new PDO("mysql:dbname=Blog_DB", 'root', '0000');

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Mettre à jour dans la base de donnée avec update
	$request = $connect->prepare("UPDATE clic SET likes=likes +1 ;");

	$request->execute();
}

    $likz = likz() ;
?>



</form>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="funx.js"></script>
    <script src="like.js"></script>
    <script src="dislike.js"></script>
</head>
<body>
    <section>
        <fieldset>
                        <h1> Ctrl C + Ctrl V ! <h1>
        <p> Pleins de copier/coller ! Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !
        Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !
        Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller !
        Pleins de copier/coller !Pleins de copier/coller !Pleins de copier/coller ! </p>
        
        <img onclick=likejs() id="like" src="pouce bleu.png" width="50px" height ="50px"> 
        
        <?php foreach ($likz as $key => $lik): ?> 
        <table>
            <tr>
                <td><?php echo $lik ['likes'] ?></td>
            </tr>   
        </table> 
        <?php endforeach; ?>
        
        <img onclick=dislikejs() id="dislike" src="pouce-vers-le-bas.png" width="50px" height="50px"> 
        
        <?php foreach ($dislikz as $key => $dislik): ?> 
        <table>
            <tr>
                <td><?php echo $dislik ['dislike'] ?></td>
            </tr>
             </table>
              <?php endforeach; ?>

        </fieldset>
    </section>

    <section> 
           
        <label for="Commentaires" >Commentaire : </label> <br>
        <!-- Appelle de la fonction avec l'évènement "onclick" -->
        <input onclick="saycom()" type="submit" value="envoyer">
        <textarea type="text" name="comments" id="comments"> </textarea>
        <br>
            
    </section>

    <div id="comment"> </div>

<!-- Boucle php foreach permettant de récupérer les données dans un tableau -->
<?php foreach ($coms as $key => $com): ?>

<table>
<tr>
    <!-- récupération des différentes données de la base de données -->
    <td><?php echo $com ['id'] ?></td>

    <td><?php echo $com ['dates'] ?></td>

    <td><?php echo $com ['content'] ?></td>


</tr>
</table>
<?php endforeach; ?>
</body>
</html>