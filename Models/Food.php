<?php 
// definisco la classe Food

class Food extends Product{
  public $type;
  public $peculiarity;

  // costruttore
  function __construct(string $name, string $image, string $category, string $brand, float $price, int $code, int $quantity, int $discount, string $type, string $peculiarity){
    // memorizzo le proprietà della classe genitore
    parent::__construct($name, $image, $category, $brand, $price, $code, $quantity, $discount);

    // memorizzo le proprietà della classe figlio (Food)
    $this->type = $type;
    $this->peculiarity= $peculiarity;
  }
}