<?php 

// definisco la classe Product
class Product {
  public $name;
  public $image;
  protected $category;
  public $brand;
  private $price;
  private $code;
  private $quantity;
  private $discount = 0;

  // costruttore
  function __construct(string $name, string $image, string $category, string $brand, float $price, int $code, int $quantity, int $discount){
    // memorizzo il contenuto delle proprietà nella classe
    $this->name = $name;
    $this->image = $image;
    $this->category = $category;
    $this->brand = $brand;
    $this->price = $price;
    $this->code = $code;
    $this->quantity = $quantity;
    $this->discount = $discount;

    $this->setPrice();
  }

  // creo dei getter per restituirmi poi le proprietà private
  public function setPrice(){
    if($this->discount > 0){
      $this->price = number_format($this->price - ($this->price * ($this->discount / 100)), 2, ",");
    }else{
      $this->price = $this->price;
    }
  }

  public function getPrice(){
    return "{$this->price}€";
  }

  public function getCode(){
    return $this->code;
  }

  public function getQuantity(){
    return $this->quantity;
  }

  public function getDiscount(){
    return "{$this->discount}%";
  }

  public function getCategory(){
    return $this->category;
  }

}