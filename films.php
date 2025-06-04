<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ontdek de nieuwste films & bioscopen</title>
    <meta name="description" content="Blijf op de hoogte van de nieuwste films, trailers, recensies en bioscoopnieuws. Alles over films op één plek.">
    <meta name="author" content="Angela Bansie">
    <link rel="stylesheet" href="\Groep2_Angela_Spuranthi\CSS\Style.css">
</head>
<body>
  
    <?php include 'header2.php'; ?>

    <article class="films-section">
        <h1>FILMS</h1>
    </article>

    <select name="genre" class="genre-select">
    <option selected disabled hidden>Genre</option>
    <option value="actie">Actie</option>
    <option value="komedie">Komedie</option>
    <option value="drama">Drama</option>
    <option value="horror">Horror</option>
    <option value="romantiek">Romantiek</option>
    </select>

    <?php include 'footer.php'; ?>
</body>
</html>
