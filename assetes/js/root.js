const button = document.getElementById('cop');

button.addEventListener('click', () => {
    const text_input = encodeURIComponent(document.getElementById('myTextarea').value.trim());
    const apiUrl = 'http://oujda-nlp-team.net:8080/api/Racine';

    fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `textinput=${text_input}`
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to fetch. Status: ' + response.status);
        }
        return response.text();
    })
    .then(data => {
        document.getElementById('result').innerText = data;
    })
    .catch(error => {
        console.error('Error during API request:', error);
        document.getElementById('result').innerText = 'Error during API request: ' + error.message;
    });
});
