<?php
include_once 'productos.php';
class Cubo extends Productos{
   private $tamanyo;
   public function __construct($nombre, $precio, $imagen, $descripcion, $tamanyo){
      parent::__construct($nombre, $precio, $imagen, $descripcion);
      $this-> tamanyo = $tamanyo;

   }

}