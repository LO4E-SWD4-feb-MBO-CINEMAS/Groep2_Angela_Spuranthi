<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ontdek de nieuwste films & bioscopen</title>
    <meta name="description" content="Blijf op de hoogte van de nieuwste films, trailers, recensies en bioscoopnieuws. Alles over films op één plek.">
    <meta name="author" content="Angela Bansie">
    <link rel="stylesheet" href="\Groep2_Angela_Spuranthi\CSS\Style.css">
    <script src="/Groep2_Angela_Spuranthi/JS/filmposter.js"></script>

</head>
<body>
  
    <?php include 'header2.php'; ?>
    <?php include 'Classes/Database.php'; ?>

    <article class="films-section">
        <h1>FILMS</h1>
    </article>

    <article class="genre-search-wrapper">
    <select name="genre" class="genre-select">
        <option selected disabled hidden>Genre</option>
        <option value="actie">Actie</option>
        <option value="komedie">Komedie</option>
        <option value="drama">Drama</option>
        <option value="horror">Horror</option>
        <option value="romantiek">Romantiek</option>
    </select>

    <input type="text" class="search-bar" placeholder="Zoek een film...">
</article>

<a href="formulier-reserveren.php" class="reserveren-knop">Reserveren</a>


<section class="genre-labels">

    <article class="genre">
        <p>Actie</p>
        <article class="film-row">
            <img src="images/DieHardFilm.jpg" alt="Die Hard Poster" class="genre-film-img">
            <img src="images/TheDarkKnightFilm.jpg" alt="The Dark Knight Poster" class="genre-film-img">
            <img src="images/JohnWickFilm.jpg" alt="John Wick Poster" class="genre-film-img">
            <img src="images/MadMaxFilm.jpg" alt="Mad Max Poster" class="genre-film-img">
            <img src="images/GladiatorFilm.png" alt="Gladiator Poster" class="genre-film-img">
            <img src="images/TheAvengersFilm.jpg" alt="The Avengers Poster" class="genre-film-img">
            <img src="images/MissionImpossibleFalloutFilm.jpg" alt="Mission Impossible Fallout Poster" class="genre-film-img">
        </article>
    </article>


    <article class="genre">
        <p>Komedie</p>
        <article class="film-row">
            <img src="images/SuperbadFilm.jpg" alt="Superbad Poster" class="genre-film-img">
            <img src="images/TheHangoverFilm.jpg" alt="The Hangover Poster" class="genre-film-img">
            <img src="images/MontyPythonAndTheHolyGrailFilm.jpg" alt="Monty Python and the Holy Grail Poster" class="genre-film-img">
            <img src="images/BridesmaidsFilm.jpg" alt="Bridesmaids Poster" class="genre-film-img">
            <img src="images/GroundhogDayFilm.jpg" alt="Groundhog Day Poster" class="genre-film-img">
            <img src="images/StepBrothersFilm.jpg" alt="Step Brothers Poster" class="genre-film-img">
            <img src="images/DumbAndDumberFilm.jpg" alt="Dumb and Dumber Poster" class="genre-film-img">
        </article>
    </article>


    <article class="genre">
        <p>Drama</p>
        <article class="film-row">
            <img src="images/TheShawshankRedemptionFilm.jpg" alt="The Shawshank Redemption Poster" class="genre-film-img">
            <img src="images/ForrestGumpFilm.jpg" alt="Forrest Gump Poster" class="genre-film-img">
            <img src="images/FightClubFilm.jpg" alt="Fight Club Poster" class="genre-film-img">
            <img src="images/ParasiteFilm.jpg" alt="Parasite Poster" class="genre-film-img">
            <img src="images/12AngryMenFilm.jpg" alt="12 Angry Men Poster" class="genre-film-img">
            <img src="images/TheGodfatherFilm.jpg" alt="The Godfather Poster" class="genre-film-img">
            <img src="images/AmericanBeautyFilm.jpg" alt="American Beauty Poster" class="genre-film-img">
        </article>
    </article>

    <article class="genre">
        <p>Horror</p>
        <article class="film-row">
            <img src="images/TheShiningFilm.jpg" alt="The Shining Poster" class="genre-film-img">
            <img src="images/GetOutFilm.jpg" alt="Get Out Poster" class="genre-film-img">
            <img src="images/HereditaryFilm.jpg" alt="Hereditary Poster" class="genre-film-img">
            <img src="images/AQuietPlaceFilm.jpg" alt="A Quiet Place Poster" class="genre-film-img">
            <img src="images/ItFilm.jpg" alt="It Poster" class="genre-film-img">
            <img src="images/AlienFilm.jpg" alt="Alien Poster" class="genre-film-img">
            <img src="images/TheExorcistFilm.jpg" alt="The Exorcist Poster" class="genre-film-img">
        </article>
    </article>

    <article class="genre">
        <p>Romantiek</p>
        <article class="film-row">
            <img src="images/TheNotebookFilm.jpg" alt="The Notebook Poster" class="genre-film-img">
            <img src="images/TitanicFilm.png" alt="Titanic Poster" class="genre-film-img">
            <img src="images/LaLaLandFilm.jpg" alt="La La Land Poster" class="genre-film-img">
            <img src="images/PrideAndPrejudiceFilm.jpg" alt="Pride and Prejudice Poster" class="genre-film-img">
            <img src="images/CallMeByYourNameFilm.png" alt="Call Me By Your Name Poster" class="genre-film-img">
            <img src="Images/NothingHillFilm.jpg" alt="Notting Hill Poster" class="genre-film-img">
            <img src="images/BeforeSunriseFilm.jpg" alt="Before Sunrise Poster" class="genre-film-img">
        </article>
    </article>
</section>



    <?php include 'footer.php'; ?>
</body>
</html>
