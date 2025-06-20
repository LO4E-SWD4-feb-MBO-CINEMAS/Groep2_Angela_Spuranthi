document.addEventListener("DOMContentLoaded", function () {

    let posters = document.querySelectorAll(".genre-film-img");

    posters.forEach(function(poster) {

        poster.addEventListener("click", function() {

            let altText = poster.getAttribute("alt");

            let filmNaam = altText.replace(" Poster", "");

            alert("Je hebt de film '" + filmNaam + "' geselecteerd.");
        });
    });
});
