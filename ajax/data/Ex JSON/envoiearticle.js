function CallAjax() {
    
    var xhr = new XMLHttpRequest;
        
    xhr.onreadystatechange = function () { 
        if (xhr.readystate == 4 && xhr.status == 200) {
          
        }
    }
    
    // Requète AJAX       
    xhr.open('POST', 'article.add.php') ;
    
    
    var data = new FormData() ;
    // Récupération des zones de mon html dans article.php
    data.append('content3', document.getElementById('content3').value);
    data.append('title', document.getElementById('title').value);
    xhr.send(data);
    
}

let myJSON = '';

let myNewJSON = JSON.parse(myJSON);