function getEtudiants () {
   
    
  
// Créer l'objet
var xhr = new XMLHttpRequest() ;
  
xhr.onreadystatechange	= function() {
if
    (xhr.readyState	==	4	&&	xhr.status	==	200){	
    var reponse = xhr.reponseText
    var etudiantTxt = document.getElementById("etudiants");
    etudiantTxt.innerHTML = reponse;
}
}
    //récupérer les prénoms bdd    
    var element = document.getElementById("pseudo").value; 
      
    xhr.open('GET','http://192.168.33.13/etudiants/script.php?pseudo='+element)
    xhr.send()

};
