<?php

/*
Snack 2
Con un form passare come parametri GET name, mail e age.
==> ho bisogno di un form con 3 input (text per name, mail per mail, number per age).
e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
=> controlli:
- name len > 3; 
- mail contains "." e "@";
- age is number;
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
=> print string

Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

// if(isset($name) && isset($email) && isset($age)){

// };
$result='';
if(!empty($_GET)){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    if(strlen($name) < 3 || !str_contains($email, '@') && !str_contains($email, '.') || !is_numeric($age) ){
        echo "Accesso negato";
        $result = "Accesso negato";
    } else {
        echo "Accesso riuscito!";
        $result = "Accesso riuscito!";
    }
};


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
    <form action="snack-2.php" method="get">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="age">
        <button type="submit">Invia</button>
    </form>
</body>
</html>