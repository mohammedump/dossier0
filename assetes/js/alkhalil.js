document.getElementById('cop').addEventListener('click', function() {
    var inputValue = document.getElementById('myTextarea').value;
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('result').innerHTML = xhr.responseText;
        }
    };
    
    xhr.open('POST', 'assetes/js/alkhalil.php', true);
    
    // Définir l'en-tête Content-Type pour indiquer que nous envoyons des données JSON
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // Envoyer les données en tant que chaîne encodée
    xhr.send('data=' + encodeURIComponent(inputValue));
});

