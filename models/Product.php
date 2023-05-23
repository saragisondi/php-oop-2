<?php

class Product{
  public $img;
  public $title;
  public $category;
  public $price;
  public $weight;
  public $ingredients;
  public $size;
  public $material;


  function __construct($_img, $_title, $_category, $_price){
    $this->img = $_img;
    $this->title = $_title;
    $this->category = $_category;
    $this->price = $_price;
  }
}

// $foods = new Product('img','title','category', 'price');

// $toys = new Product('img','title','category', 'price');

// var_dump($foods, $toys);


