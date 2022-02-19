<?php
  class Menu {
    public $name;
    public $price;
    public $image;
    
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }
?>