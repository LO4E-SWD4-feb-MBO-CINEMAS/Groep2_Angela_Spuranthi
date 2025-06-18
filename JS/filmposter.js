// Wacht tot de hele HTML-pagina is geladen, zodat alle elementen beschikbaar zijn
document.addEventListener("DOMContentLoaded", function () {

    // Zoek alle afbeeldingen met de class 'genre-film-img' (de filmposters)
    let posters = document.querySelectorAll(".genre-film-img");

    // Voor elke gevonden poster voeren we onderstaande code uit
    posters.forEach(function(poster) {

        // Als iemand op een poster klikt, voer deze functie uit
        poster.addEventListener("click", function() {

            // Haal de alt-tekst van de afbeelding op (bijvoorbeeld 'Titanic Poster')
            let altText = poster.getAttribute("alt");

            // Verwijder het woord ' Poster' zodat alleen de filmtitel overblijft (bijvoorbeeld 'Titanic')
            let filmNaam = altText.replace(" Poster", "");

            // Toon een berichtje met de naam van de film
            alert("Je hebt de film '" + filmNaam + "' geselecteerd.");
        });
    });
});
