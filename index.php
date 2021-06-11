<?php

// INDEXED ARRAYS

$peopleOne = ['Jesus', 'Maria', 'Joseph'];
//echo $peopleOne[2]; //output Joseph

$peopleTwo = array('Judas', 'Mark', 'Maleficent');
//echo $peopleTwo[1]; //output Mark

$ages = [20, 30, 40, 50];
//print_r($ages); //outputs the contents of the array

$ages[1] = 25; //overwrites index 1
//print_r($ages); 

$ages[] = 60; //dagdag sa dulo
//print_r($ages); 

array_push($ages, 70); //dagdag sa dulo
//print_r($ages); 

//echo count($ages); //output is 6 because 20, 25, 40, 50, 60, 70

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);


// =========================================================================


// ASSOCIATIVE ARRAYS (KEY & VALUE PAIRS)

$animalsOne = ['mammal'=>'monkey', 'fish'=>'bangus', 'insect'=>'fly'];
//echo $animalsOne['fish']; //output bangus
//print_r($animalsOne);

$animalsTwo = array('bird'=>'parrot', 'amphibian'=>'frog');

$animalsTwo['panget']='human'; //dagdag sa dulo
//print_r($animalsTwo);


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
    
</body>
</html>