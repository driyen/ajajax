function saycom() {
    
var xhr = new XMLHttpRequest;
    
xhr.onreadystatechange = function () { 
    if (xhr.readystate == 4 && xhr.status == 200) {
      
    }
}

// Requète AJAX       
xhr.open('POST', 'save_comment.php') ;


var data = new FormData() ;
data.append('comments', document.getElementById('comments').value);

xhr.send(data);

//Création d'une variable qui récupère ma zone ( ici mon textarea qui a pour id "comments" )
var insertdiv= document.getElementById('comments').value ;

// Création d'un enfant (ici un paragraphe) dans la div id="comment" 
var enfant = document.createElement("p"); 
enfant.innerHTML = insertdiv;

// Permet de changer le style (ici couleur du texte en rouge)
enfant.style.color = "red" ;

// Variable qui définit qui est le parent (ici la div qui a pour id "comment")
var parent = document.getElementById("comment"); 
    parent.appendChild(enfant) ;
}