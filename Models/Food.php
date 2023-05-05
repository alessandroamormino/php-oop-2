<?php 
// importo il trait
require_once __DIR__ . '/../Trait/Weight.php';

// definisco la classe Food

class Food extends Product{
  public $type;
  public $peculiarity;

  // leggo il trait
  use Weight;

  // costruttore
  function __construct(string $name, string $image, string $category, string $brand, float $price, int $code, int $quantity, int $discount, string $type, string $peculiarity, float $weight){
    // memorizzo le proprietà della classe genitore
    parent::__construct($name, $image, $category, $brand, $price, $code, $quantity, $discount);

    // memorizzo le proprietà della classe figlio (Food)
    $this->type = $type;
    $this->peculiarity = $peculiarity;
    $this->weight = $weight;
  }
}