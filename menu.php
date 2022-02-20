<?php
  class Menu {
    private $name;
    private $price;
    
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName() {
      return $this->name;
    }

    public function getTaxIncludedPrice() {
      return floor($this->price * 1.08);
    }
  }
?>