<?php
  require_once('menu.php');

  $juice = new Menu('JUICE', 600);
  $coffee = new Menu('COFFEE', 500);
  $curry = new Menu('CURRY', 700);
  $pasta = new Menu('PASTA', 1200);

  $juice->setOrderCount(2);
  
  $menus = array($juice, $coffee, $curry, $pasta);

?>