<?php
/*
Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/
$students = [
    [
        'nome' => 'Marco',
        'cognome' => 'Rossi',
        'voti' => [8, 7, 6, 9]
    ],
    [
        'nome' => 'Laura',
        'cognome' => 'Bianchi',
        'voti' => [7, 6, 8, 7]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Verdi',
        'voti' => [9, 8, 8, 9]
    ]
];
 
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
    <ul>
        <?php foreach($students as $student){ ?>
        <li>
            <?php echo $student['nome'] . " " . $student['cognome'] ?>
            <ul>
                <li>
                <?php echo "Media voti: " . (array_sum($student['voti']) / count($student['voti'])) ?>
                </li>
            </ul>
        </li>
        <?php } ?>
    </ul>
</body>
</html>