<?php 

require_once __DIR__.'/classes/movie.php';

$Movies = [
    [
        'title' => 'The Greatest Showman',
        'description' => 'Uno sguardo alla straordinaria creazione del circo Barnum & Bailey nel 1800 da parte di PT Barnum. Con artisti esotici, numeri musicali e audaci imprese, lo spettacolo conquista il mondo per diventare "Il più grande show della Terra".',
        'genre' => 'Musical/Drama'
    ],
    [
        'title' => 'Divergent',
        'description' => 'In un futuro non molto remoto, in cui la popolazione è suddivisa in categorie in base alla personalità, una donna scopre un progetto teso ad eliminare le persone che non si conformano.',
        'genre' => 'Sci-fi/Action'
    ],
    [
        'title' => 'Hunger Games',
        'description' => 'In un brutale futuro, 24 giovani vengono selezionati ogni anno per partecipare agli Hunger Games, una violenta competizione televisiva che prevede la sopravvivenza di uno solo.',
        'genre' => 'Sci-fi/Action'
    ],
    [
        'title' => 'Benvenuti a Zombieland',
        'description' => 'In un mondo dove gli zombie imperversano in ogni strada, quattro sopravvissuti cercano un luogo dove poter ricominciare a vivere, tra incomprensioni reciproche, inganni e emozioni continue.',
        'genre' => 'Horror/Commedy'
    ]
]




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Lista Film:</h1>
<br>

<?php

        foreach($Movies as $key => $value){
            $movie = new Movie($value['title'], $value['description'], $value['genre']);
        ?>
        <h2>Titolo: <?php echo "{$movie -> getTitle()}"; ?></h2>
        <h2>descrizione:</h2>
        <p>
        <?php echo "{$movie -> getDescription()}"; ?>
        </p>
        <h4>Genere: <?php echo "{$movie -> getGenres()}"; ?></h4>
        <hr>
        <?php

        }
?>


</body>
</html>