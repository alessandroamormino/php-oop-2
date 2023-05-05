<?php
// creo un trait 

trait Material {
  protected $material;

  public function getMaterial(){
    return $this->material;
  }
}