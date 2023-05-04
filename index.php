<?php 
// importo le classi e il db
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Game.php';

require_once './db.php';

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
</head>
<body>
  <?php
  foreach($games as $product){
    echo $product->name;
    echo '<br>';
    echo $product->image;
    echo '<br>';
    echo $product->category;
    echo '<br>';
    echo $product->brand;
    echo '<br>';
    echo $product->getPrice();
    echo '<br>';
    echo $product->getCode();
    echo '<br>';
    echo $product->getQuantity();
    echo '<br>';
    echo $product->getDiscount();
    echo '<br>';
    echo $product->color;
    echo '<br>';
    echo $product->material;
    echo '<br>';
    echo $product->description;
  }
  ?>
</body>
</html>