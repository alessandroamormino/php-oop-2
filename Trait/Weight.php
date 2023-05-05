<?php
// creo un trait 

trait Weight {
  protected $weight;

  public function getWeight(){
    return "{$this->weight} Gr.";
  }
}