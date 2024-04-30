<?php

/*

Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        'home' => 'Milano',
        'away' => 'Cantù',
        'homeScore' => '55',
        'awayScore' => '60',
    ],
    [
        'home' => 'Varese',
        'away' => 'Brescia',
        'homeScore' => '70',
        'awayScore' => '63',
    ],
    [
        'home' => 'Sassari',
        'away' => 'Virtus',
        'homeScore' => '67',
        'awayScore' => '81',
    ],
    [
        'home' => 'Olimpia',
        'away' => 'Roma',
        'homeScore' => '80',
        'awayScore' => '82',
    ]
    ];

foreach ($matches as $match){
    echo "<p>" . $match['home'] . ' - ' . $match['away'] . ' | ' . $match['homeScore'] . ' - ' . $match['awayScore'] . "</p>";
};

/*
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks b1</title>
</head>
<body>

</body>
</html>