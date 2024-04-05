
    // Fonction pour envoyer la requête à l'API et gérer la réponse
    function envoyerRequete() {
        // Afficher l'indicateur de chargement
        document.getElementById('loadingIndicator').style.display = 'block';

        // Effectuer la requête à l'API (votre code pour envoyer la requête)

        // Simuler un délai de réponse de l'API (remplacez cela par votre vrai appel API)
        setTimeout(function() {
            // Cacher l'indicateur de chargement une fois que la réponse est reçue
            document.getElementById('loadingIndicator').style.display = 'none';
            // Traitement de la réponse de l'API (votre code pour traiter la réponse)
        }, 3000); // Temps d'attente simulé en millisecondes (ici, 3 secondes)
    }

    // Écouter l'événement clic sur le bouton "Envoyer" et appeler la fonction d'envoi de requête
    document.getElementById('cop').addEventListener('click', envoyerRequete);