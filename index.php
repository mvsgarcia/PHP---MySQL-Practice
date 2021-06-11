<?php

// MULTI-DIMENSIONAL ARRAYS

/*
$blogs = [

    //indexed
    ['Cute Cats', 'Mochi', 'Lorem', 69],
    ['Bad Dogs', 'Spark', 'Lorem', 21],
    ['Top 10 Best Cat Toys', 'Cole', 'Lorem', 50]
];

print_r($blogs[2][1]); // outputs Cole

*/

$blogs = [

    //associative
    ['title' => 'Cute Cats', 'author' => 'Mochi', 'content' => 'Lorem', 'likes' => 69],
    ['title' => 'Bad Dogs', 'author' => 'Spark', 'content' => 'Lorem', 'likes' => 21],
    ['title' => 'Top 10 Best Cat Toys', 'author' => 'Cole', 'content' => 'Lorem', 'likes' => 50]
];

//echo $blogs[1]['likes']; //output 21
//echo count($blogs); //output 3

$popped = array_pop($blogs); //remove last array
print_r($popped);


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