<?php

function sayHello($name = 'shaun', $time = 'morning'){
    echo "Good $time $name" . '<br>';
}

sayHello('Mieca', 'night');

//========================================

function formatProduct($product){
    return "{$product['name']} cost Php{$product['price']} to buy";
}

$formatted = formatProduct(['name'=>'Sorbetes', 'price'=>20]);
echo $formatted;

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