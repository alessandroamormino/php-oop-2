<?php 
// importo il trait
require_once __DIR__ . '/../Trait/Weight.php';
require_once __DIR__ . '/../Trait/Material.php';

// definisco la classe Game

class Game extends Product{
  public $color;
  use Material;
  public $description;
  // leggo il trait
  use Weight;

  // costruttore
  function __construct(string $name, string $image, string $category, string $brand, float $price, int $code, int $quantity, int $discount, string $color, string $material, string $description, float $weight){
    // memorizzo le proprietà della classe genitore
    parent::__construct($name, $image, $category, $brand, $price, $code, $quantity, $discount);

    // memorizzo le proprietà della classe figlio (Food)
    $this->color = $color;
    $this->material = $material;
    $this->description = $description;
    $this->weight = $weight;
  }
}