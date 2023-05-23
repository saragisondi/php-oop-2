<?php

require_once __DIR__ . '/Foods.php';
require_once __DIR__ . '/Toys.php';
require_once __DIR__ . '/Accessories.php';


class Product{
  public $img;
  public $title;
  public $category;
  public $price;
  public $foods;
  public $toys;
  public $accessories;


  function __construct($_img, $_title, $_category, $_price, $_foods, $_toys, $_accessories){
    $this->img = $_img;
    $this->title = $_title;
    $this->category = $_category;
    $this->price = $_price;
    $this->foods = $_foods;
    $this->toys = $_toys;
    $this->accessories = $_accessories;
  }

}

$card = 
new Product('img','title','icon'. ' ' . 'category','Prezzo:'.'€' . ' '. 0 , 
new foods('Peso Netto:'. ' ' . 0 . ' ' . 'gr', 'Ingredienti:' . 'ingredients' ), 
new accessories('Materiale' . ' ' . 'materials', 'Dimensioni:' .' ' . 'M:' . ' ' . 'L' . ' ' . 0 . ' ' . 'x' . ' ' . 'P' . ' ' . 0 . ' ' . 'x' . ' ' . 'H' . ' ' . 0 . ' ' .'cm' ), 
new toys('Caratteristiche:' . ' ' . 'description','Dimensioni:' .' ' . 'M:' . ' ' . 'L' . ' ' . 0 . ' ' . 'x' . ' ' . 'P' . ' ' . 0 . ' ' . 'x' . ' ' . 'H' . ' ' . 0 . ' ' .'cm' ));
var_dump($card);
