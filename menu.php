<?php
  class Menu {
    private $name;
    private $price;
    private $orderCount = 0;
    
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName() {
      return $this->name;
    }

    public function getOrderCount() {
      return $this->orderCount;
    }
    
    public function setOrderCount($orderCount) {
      $this->orderCount = $orderCount;
    }

    public function getTaxIncludedPrice() {
      return floor($this->price * 1.10);
    }

    public function getTotalPrice() {
      return $this->getTaxIncludedPrice() * $this->orderCount;
    }
  }
?>