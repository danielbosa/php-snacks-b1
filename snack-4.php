<?php
/*
Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

function getRndNum($min, $max, $nItems){
    $newArray = [];

    while(count($newArray) < $nItems){
        $num = rand($min,$max);

        if(!in_array($num,$newArray)){
            $newArray[] = $num;
        }
    }

    return $newArray;
};

$min = 1;
$max = 100;
$nItems = 15;
var_dump( getRndNum($min, $max, $nItems) );
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