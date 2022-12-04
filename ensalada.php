<?php
include_once 'productos.php';
class Ensalada extends Productos{
   
   public function __construct($nombre, $precio, $imagen, $descripcion){
      parent::__construct($nombre, $precio, $imagen, $descripcion);


   }
   
}