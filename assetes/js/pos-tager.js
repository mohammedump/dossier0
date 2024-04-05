document.getElementById('cop').addEventListener('click', function() {
    var inputValue = document.getElementById('myTextarea').value;
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Mettre à jour la page avec la réponse PHP
                document.getElementById('result').innerHTML = xhr.responseText;
            } else {
                // Gérer les erreurs en cas d'échec de la requête
                document.getElementById('result').innerHTML = 'Error during API request. Status: ' + xhr.status;
            }
        }
    };
    
    // Spécifier le type de requête, le fichier PHP, et si la requête est asynchrone
    xhr.open('POST', 'assetes/js/pos-tager.php', true);
    
    // Définir l'en-tête Content-Type pour indiquer que nous envoyons des données x-www-form-urlencoded
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // Envoyer les données en tant que chaîne encodée
    xhr.send('data=' + encodeURIComponent(inputValue));
});
