<?php
include_once 'productos.php';
class Complemento extends Productos{
   private $tipo;
   
   public function __construct($nombre, $precio, $imagen, $descripcion, $tipo){
      parent::__construct($nombre, $precio, $imagen ,$descripcion);
      $this-> tipo = $tipo;

   }
   
}