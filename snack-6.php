<?php
/*
Snack 6
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
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
    <!-- <div class="teachers">
        <ul>
            <?php foreach($db as $category => $teacherList){ ?>
            <li>
                <?php echo $category ?>
                <ul>
                    <?php foreach ($teacherList as $teacher){ ?>
                        <li>
                            Nome: <?php echo $teacher['name'] ?>
                        </li>
                        <li>
                            Cognome: <?php echo $teacher['lastname'] ?>
                        </li>
                        <br>
                        <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div> -->
    <div class="teachers">
        <ul>
            <?php foreach($db as $category => $teacherList){ ?>
                <?php if($category === "teachers"){ ?>
                <li>
                    <?php echo $category; ?>
                    <ul>
                        <?php foreach ($teacherList as $teacher){ ?>
                            <li>
                                Nome: <?php echo $teacher['name'] ?>
                            </li>
                            <li>
                                Cognome: <?php echo $teacher['lastname'] ?>
                            </li>
                            <br>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="pm">
        <ul>
            <?php foreach($db as $category => $teacherList){ ?>
                <?php if($category === "pm"){ ?>
                <li>
                    <?php echo $category; ?>
                    <ul>
                        <?php foreach ($teacherList as $teacher){ ?>
                            <li>
                                Nome: <?php echo $teacher['name'] ?>
                            </li>
                            <li>
                                Cognome: <?php echo $teacher['lastname'] ?>
                            </li>
                            <br>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>