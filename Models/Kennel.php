<?php 
// definisco la classe Kennel

class Kennel extends Product{
  public $color;
  public $material;
  public $dimension;
  public $location;

  // costruttore
  function __construct(string $name, string $image, string $category, string $brand, float $price, int $code, int $quantity, int $discount, string $color, string $material, string $dimension, string $location){
    // memorizzo le proprietà della classe genitore
    parent::__construct($name, $image, $category, $brand, $price, $code, $quantity, $discount);

    // memorizzo le proprietà della classe figlio (Food)
    $this->color = $color;
    $this->material = $material;
    $this->dimension = $dimension;
    $this->location = $location;
  }
}