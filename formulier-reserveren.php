<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier reserveren</title>
    <meta name="description" content="Blijf op de hoogte van de nieuwste films, trailers, recensies en bioscoopnieuws. Alles over films op één plek.">
    <meta name="author" content="Angela Bansie">
    <link rel="stylesheet" href="\Groep2_Angela_Spuranthi\CSS\Style.css">
</head>
<body>
  
    <?php include 'header2.php'; ?>

<form action="#" method="post" class="movie-form">
  <label for="name">Naam:</label><br>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">E-mail:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="film">Kies een film:</label><br>
  <select id="film" name="film" required>
    <optgroup label="Actie">
      <option value="Die Hard">Die Hard</option>
      <option value="The Dark Knight">The Dark Knight</option>
      <option value="John Wick">John Wick</option>
      <option value="Mad Max">Mad Max</option>
      <option value="Gladiator">Gladiator</option>
      <option value="The Avengers">The Avengers</option>
      <option value="Mission Impossible Fallout">Mission Impossible Fallout</option>
    </optgroup>
    <optgroup label="Komedie">
      <option value="Superbad">Superbad</option>
      <option value="The Hangover">The Hangover</option>
      <option value="Monty Python and the Holy Grail">Monty Python and the Holy Grail</option>
      <option value="Bridesmaids">Bridesmaids</option>
      <option value="Groundhog Day">Groundhog Day</option>
      <option value="Step Brothers">Step Brothers</option>
      <option value="Dumb and Dumber">Dumb and Dumber</option>
    </optgroup>
    <optgroup label="Drama">
      <option value="The Shawshank Redemption">The Shawshank Redemption</option>
      <option value="Forrest Gump">Forrest Gump</option>
      <option value="Fight Club">Fight Club</option>
      <option value="Parasite">Parasite</option>
      <option value="12 Angry Men">12 Angry Men</option>
      <option value="The Godfather">The Godfather</option>
      <option value="American Beauty">American Beauty</option>
    </optgroup>
    <optgroup label="Horror">
      <option value="The Shining">The Shining</option>
      <option value="Get Out">Get Out</option>
      <option value="Hereditary">Hereditary</option>
      <option value="A Quiet Place">A Quiet Place</option>
      <option value="It">It</option>
      <option value="Alien">Alien</option>
      <option value="The Exorcist">The Exorcist</option>
    </optgroup>
    <optgroup label="Romantiek">
      <option value="The Notebook">The Notebook</option>
      <option value="Titanic">Titanic</option>
      <option value="La La Land">La La Land</option>
      <option value="Pride and Prejudice">Pride and Prejudice</option>
      <option value="Call Me By Your Name">Call Me By Your Name</option>
      <option value="Notting Hill">Notting Hill</option>
      <option value="Before Sunrise">Before Sunrise</option>
    </optgroup>
  </select><br><br>

  <button type="submit">Verzenden</button>
</form>


    <?php include 'footer.php'; ?>
</body>
</html>
