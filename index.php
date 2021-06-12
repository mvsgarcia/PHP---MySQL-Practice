<?php

$peoples = ['Jesus', 'Maria', 'Jose'];

// for($i=0; $i<count($peoples); $i++){

//     echo $peoples[$i] . "<br>";

// }

// foreach($peoples as $people){

//     echo $people . "<br>";  

// }


$cats = [

    ['name' => 'Mochi', 'age' => 7 ],
    ['name' => 'Cole', 'age' =>  10],
    ['name' => 'Ishnow', 'age' => 9 ],
    ['name' => 'Appy', 'age' => 12 ],
    ['name' => 'Bien', 'age' => 69]
];

// foreach($cats as $cat){

//     echo $cat['name'] . ' - ' . $cat['age'];
//     echo '<br>';

// }


// $i=0;

// while($i<count($cats)){

//     echo $cats[$i]['name'] .  ' - ' . $cats[$i]['age'];
//     echo '<br>';

//     $i++;

// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>

<h1>Cats ng Pinas</h1>

<ul>
    <?php foreach($cats as $cat){ ?>

        <h3><?php echo $cat['name']; ?></h3>
        <p>Age -  <?php echo $cat['age']; ?></p>

    <?php } ?>
</ul>

</body>
</html>