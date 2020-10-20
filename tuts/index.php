<?php 

//echo 'hello world';
$firstName = 'Caio';
$lastName = 'Benatti';

$products = [ 
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightining bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
    
    <h1><?php echo "Hello $firstName $lastName, how are you today?";  ?></h1>
    <div>
    <ul>
    <?php foreach($products as $product) { ?>
        <?php if ($product['price'] > 15) {?>
        <li> <?php echo $product['name']; ?> </li>
            <?php } ?>
    <?php } ?>
    </ul>
    </div>
</body>
</html>