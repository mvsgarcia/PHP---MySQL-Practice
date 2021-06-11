<?php

    $name1 = "Mario";
    $name2 = "Luigi";

    echo $name1.$name2; //ok lang kung may spaces before and after ng .

        echo "<br>"; //line break

    echo 'My name is ' . $name1;

        echo "<br>"; 

    echo "My name is $name2";

        echo "<br>"; 
    
    echo "I want \"oreos\""; 
    
        echo "<br>"; 

    echo 'I want "oreos"';

            echo "<br>"; 

    echo $name1[2]; //get the 3rd character

        echo "<br>"; 

    echo strlen($name1); //get the string length

        echo "<br>";
    
    echo strtoupper($name1); //make uppercase
    
        echo "<br>"; 

    echo strtolower($name1); //make lowercase

        echo "<br>";
    
    echo str_replace('m', 'r', $name1); //replace characters to other char
    
        echo "<br>"; 

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