function likejs(){
    var xhr = new XMLHttpRequest;
    
xhr.onreadystatechange = function () { 
    if (xhr.readystate == 4 && xhr.status == 200) {
      
    }
}

// Requète AJAX       
xhr.open('POST', 'compteurlike.php') ;
var data = new FormData() ;
data.append('likes', document.getElementById('like').value);

xhr.send(data);

}