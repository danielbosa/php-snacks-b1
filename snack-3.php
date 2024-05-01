<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


// foreach($posts as $date => $postList){
//     echo $date . "<br>";
//     foreach($postList as $post){
//         echo $post['title'] . "<br>";
//         echo $post['author'] . "<br>";
//         echo $post['text'] . "<br>" . "<br>";
//     }
// }

/*
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
    <h1>Post List</h1>
    <ul>
        <?php foreach ($posts as $date => $postList): ?>
            <li>
                Date: <?php echo $date; ?>
                <ul>
                    <?php foreach ($postList as $post): ?>
                        <li>
                            Title: <?php echo $post['title']; ?>
                        </li>
                        <li>
                            Author: <?php echo $post['author']; ?>
                        </li>
                        <li>
                            <?php echo $post['text']; ?>
                        </li>
                        <br>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>