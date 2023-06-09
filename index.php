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
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- importo header da partials -->
  <?php
    include './Views/partials/header.php';
  ?>
  <main>
    <div class="container">
      <h1>Prodotti per animali</h1>
      <h2>Cibi</h2>
      <div class="row food">
        <?php 
          foreach($foods as $product){
            ?>
              <div class="card">
                <div class="head">
                  <h3><?= $product->name ?></h3>
                  <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                </div>
                <div class="info">
                  <span>
                    Categoria: 
                    <?php 
                      if($product->getCategory() == 'gatto'){
                        ?>
                        <i class="fa-solid fa-cat"></i>
                        <?php
                      } elseif($product->getCategory() == 'cane') {
                        ?>
                        <i class="fa-solid fa-dog"></i>
                        <?php
                      }
                    ?>
                  </span>
                  <span>Marca: <?= $product->brand ?></span>
                  <span>Tipologia: <?= $product->type ?></span>
                  <span>Peso: <?= $product->getWeight() ?></span>
                  <span>Caratteristica: 
                    <?php
                      try{
                        echo $product->getPeculiarity();
                      } catch (Exception $e){
                        $e->getMessage();
                      }
                    ?>
                  </span>
                  <span>Disponibilità: <?= $product->getQuantity(); ?></span>
                  <span>Sconto: <?= $product->getDiscount(); ?></span>
                  <span>Prezzo: <?= $product->getPrice(); ?></span>
                  <pre>Codice: <?= $product->getCode(); ?></pre>
                  <button class="btn">Acquista</button>
                </div>
              </div>
            <?php
          }
        ?>
      </div>
      <h2>Giochi</h2>
      <div class="row games">
        <?php 
          foreach($games as $product){
            ?>
              <div class="card">
                <div class="head">
                  <h3><?= $product->name ?></h3>
                  <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                </div>
                <div class="info">
                  <span>
                    Categoria: 
                    <?php 
                      if($product->getCategory() == 'gatto'){
                        ?>
                        <i class="fa-solid fa-cat"></i>
                        <?php
                      } elseif($product->getCategory() == 'cane') {
                        ?>
                        <i class="fa-solid fa-dog"></i>
                        <?php
                      }
                    ?>
                  </span>
                  <span>Marca: <?= $product->brand ?></span>
                  <span>Color: <?= $product->color ?></span>
                  <span>Materiale: <?= $product->getMaterial() ?></span>
                  <span>Peso: <?= $product->getWeight() ?></span>
                  <span>Descrizione: <?= $product->description ?></span>
                  <span>Disponibilità: <?= $product->getQuantity(); ?></span>
                  <span>Sconto: <?= $product->getDiscount(); ?></span>
                  <span>Prezzo: <?= $product->getPrice(); ?></span>
                  <pre>Codice: <?= $product->getCode(); ?></pre>
                  <button class="btn">Acquista</button>
                </div>
              </div>
            <?php
          }
        ?>
      </div>
      <h2>Cucce</h2>
      <div class="row kennel">
        <?php 
          foreach($kennels as $product){
            ?>
              <div class="card">
                <div class="head">
                  <h3><?= $product->name ?></h3>
                  <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                </div>
                <div class="info">
                  <span>
                    Categoria: 
                    <?php 
                      if($product->getCategory() == 'gatto'){
                        ?>
                        <i class="fa-solid fa-cat"></i>
                        <?php
                      } elseif($product->getCategory() == 'cane') {
                        ?>
                        <i class="fa-solid fa-dog"></i>
                        <?php
                      }
                    ?>
                  </span>
                  <span>Marca: <?= $product->brand ?></span>
                  <span>Color: <?= $product->color ?></span>
                  <span>Materiale: <?= $product->getMaterial() ?></span>
                  <span>Dimensioni: <?= $product->dimension ?></span>
                  <span>Ambiente: <?= $product->location ?></span>
                  <span>Disponibilità: <?= $product->getQuantity(); ?></span>
                  <span>Sconto: <?= $product->getDiscount(); ?></span>
                  
                  <pre>Codice: <?= $product->getCode(); ?></pre>
                  <button class="btn">Acquista</button>
                </div>
              </div>
            <?php
          }
        ?>
      </div>
    </div>
  </main>
  <!-- importo il footer dalle partials -->
  <?php
    include './Views/partials/footer.php';
  ?>
</body>
</html>