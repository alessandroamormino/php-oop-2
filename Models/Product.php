<?php 

// definisco la classe Product
class Product {
  public $name;
  public $image;
  public $category;
  public $brand;
  private $price;
  private $code;
  private $quantity;
  private $discount;

  // costruttore
  function __construct(string $name, string $image, string $category, float $price, int $code, int $quantity){
    // memorizzo il contenuto delle proprietà nella classe
    $this->name = $name;
    $this->image = $image;
    $this->category = $category;
    $this->price = $price;
    $this->code = $code;
    $this->quantity = $quantity;

    $this->setDiscount();
  }

  // creo dei getter per restituirmi poi le proprietà private
  public function getPrice(){
    return $this->price;
  }

  public function getCode(){
    return $this->code;
  }

  public function getQuantity(){
    return $this->quantity;
  }

  // creo un setter per il discount con un controllo
  public function setDiscount(){
    if($this->discount = null){
      $this->discount = 0;
    } else {
      $this->discount;
    }
  }

  public function getDiscount(){
    return $this->discount;
  }
}