
        document.addEventListener("DOMContentLoaded", function() {
            function deplacerContenu() {
                var contenuAPI = document.querySelector(".dw");
                var tableau = document.getElementById("result"); // Identifiant du tableau
                // Vérifie que le contenu de l'API et le tableau sont présents
                if (contenuAPI && tableau) {
                    // Insère le contenu de l'API à la fin du conteneur parent du tableau
                    tableau.parentNode.appendChild(contenuAPI);
                }
            }

            function verifierTailleTableau(tailleTableau) {
                var seuil = 10; // Seuil de taille du tableau
                if (tailleTableau > seuil) {
                    deplacerContenu();
                }
            }

            // Simulation de l'appel à l'API
            setTimeout(function() {
                var tailleTableauSimulee = 15; // Taille simulée du tableau
                verifierTailleTableau(tailleTableauSimulee);
            }, 2000); // Délai simulé pour l'appel à l'API
        });