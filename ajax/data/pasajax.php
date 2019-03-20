<?php 
   
function allgames() {
    $connec = new PDO('mysql:dbname=Jeux', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('SELECT * FROM Multiplayer;');
    $request->execute();
    return $request->fetchALL(PDO::FETCH_ASSOC);
}

$games = allgames();
?>    
