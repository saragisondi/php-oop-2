<?php

class Accessories{
  public $materials;
  public $size;

  function __construct($_materials, $_size){
    $this-> materials = $_materials;
    $this-> size = $_size;
  }
}
