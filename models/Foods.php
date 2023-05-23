<?php


class Foods{
  public $weight;
  public $ingredients;

  function __construct( $_weight, $_ingredients){
    $this-> weight = $_weight;
    $this-> ingredients = $_ingredients;
  }
}

