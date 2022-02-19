<?php
  class Menu {
    public $name;
    public $price;
    
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function getTaxIncludedPrice() {
      return floor($this->price * 1.08);
    }
  }
?>