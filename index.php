<?php 
// importo le classi e il db
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Game.php';
require_once './Models/Kennel.php';

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
  <main>
    <h1>Prodotti per animali</h1>
    <div class="container">
      <div class="food">
        <h2>Cibi</h2>
        <?php 
          foreach($foods as $product){
            ?>
              <div class="card">
                <h3><?= $product->name ?></h3>
                <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                <span><?= $product->category ?></span>
                <span><?= $product->brand ?></span>
                <span><?= $product->getPrice(); ?></span>
                <span><?= $product->getCode(); ?></span>
                <span><?= $product->getQuantity(); ?></span>
                <span><?= $product->getDiscount(); ?></span>
                <span><?= $product->type ?></span>
                <span><?= $product->peculiarity ?></span>
              </div>
            <?php
          }
        ?>
      </div>
    </div>
  </main>
</body>
</html>