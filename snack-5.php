<?php
/*
Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    Snack 6
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/
$originalPar = "La tecnologia ha trasformato radicalmente il nostro modo di vivere e lavorare. Internet e i dispositivi digitali avanzati ci consentono di comunicare istantaneamente in tutto il mondo. Possiamo accedere facilmente a una vasta quantità di informazioni grazie alla connettività costante offerta da Internet. Tuttavia, la nostra crescente dipendenza dalla tecnologia solleva preoccupazioni sulla privacy e la sicurezza dei dati personali. È cruciale trovare un equilibrio tra l'uso delle tecnologie moderne e il mantenimento di uno stile di vita sano e equilibrato. È essenziale educare le persone sull'importanza di utilizzare la tecnologia in modo responsabile e consapevole, garantendo contemporaneamente la protezione dei nostri dati e della nostra privacy.";

$newPar = explode(".",$originalPar);

var_dump($newPar);
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