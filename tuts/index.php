<?php 

//echo 'hello world';
$firstName = 'Caio';
 $lastName = 'Benatti';

// $products = [ 
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightining bolt', 'price' => 40],
//     ['name' => 'banana skin', 'price' => 2],
// ]

function sayHello($name = "there!", $time = "morning"){ // the second argument is the default in case the param is not passed
    echo "Good $time, $name <br />";
}

function formatProduct($product){
    //echo "{$product['name']} costs £{$product['price']} to buy <br />"; // in this case, you need to wrap it around {} otherwise php doesnt understand it
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}

sayHello('caio', 'afternoon');

$formatted = formatProduct(['name' => 'gold star' , 'price' => 20]);
echo $formatted;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
<!--     
    <h1><?php echo "Hello $firstName $lastName, how are you today?";  ?></h1>
    <div>
    <ul>
    <?php foreach($products as $product) { ?>
        <?php if ($product['price'] > 15) {?>
        <li> <?php echo $product['name']; ?> </li>
            <?php } ?>
    <?php } ?>
    </ul>
    </div> -->

</body>
</html>