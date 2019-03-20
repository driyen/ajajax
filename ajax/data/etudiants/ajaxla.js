var xhr = new XMLHttpRequest;
xhr.onreadystatechange = function () {
    if (xhr.readystate == 4 && xhr.status == 200) {
        alert ("réponse du serveur") 
    }
}
// Requète AJAX       
xhr.open('GET', 'script.php') ;
xhr.send(); 