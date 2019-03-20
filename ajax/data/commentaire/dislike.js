function dislikejs(){
    var xhr = new XMLHttpRequest;
    
xhr.onreadystatechange = function () { 
    if (xhr.readystate == 4 && xhr.status == 200) {
      
    }
}

// Requète AJAX       
xhr.open('POST', 'compteurdislike.php') ;
var data = new FormData() ;
data.append('dislikes', document.getElementById('dislike').value);

xhr.send(data);

}