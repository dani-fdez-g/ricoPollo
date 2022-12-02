<?php
include_once 'hamburguesa.php';
include_once 'ensalada.php';
include_once 'cubo.php';
include_once 'tiras.php';
include_once 'complementos.php';
include_once 'bebidas.php';

//intencion de agregar ingredientes, array de ingredientes
$listaIngredientes = array('BACON','QUESO','LECHUGA','PEPINILLOS','TOMATE','HUEVO');
//arrays con los productos 
$hamburguesas = array(  new Hamburguesa("LA POLLOBURGUESA", "7.49", "assets/img/productos-img/brg1.png", "Pan + Pollo + Pepinillo + Queso", $listaIngredientes),
                        new Hamburguesa("CRISPY CHICKEN","6.99", "assets/img/productos-img/brg2.png", "Pan + Pollo crujiente + Bacon",$listaIngredientes),
                        new Hamburguesa("THE CHICKEN","7.39", "assets/img/productos-img/brg3.png","Pan + Pollo + Tomate" ,$listaIngredientes));

$ensaladas = array( new Ensalada("ENSALADA CESAR", "6.89", "assets/img/productos-img/salad1.png", "Lechuga + Pollo + Queso + Picos de trigo"),
                    new Ensalada("ENSALADA MIXTA","5.59", "assets/img/productos-img/salad2.png", "Lechuga + Pollo Crujiente + Tomate"));

$cubos = array( new Cubo("RICOCUBOPOLLO", "11.99", "assets/img/productos-img/cubo1.png", "Cubo de alitas de pollo crujientes", "M, L"),
                new Cubo("CUBO MITXO","12.99", "assets/img/productos-img/cubo2.png", "Cubo de pollo risky + pollo crispy", "M, L"));

$tiras = array( new Tira("TIRAS DE POLLO", "11.99", "assets/img/productos-img/tira1.png","Tiras de pollo crujiente", "M, L"),
                new Tira("TIRAS MIXTAS","12.99", "assets/img/productos-img/tira2.png", "Tiras de pollo RicoPollo y tiras de pollo rebozadas","M, L"));

$bebidas = array( new Bebida("COCA-COLA", "2.99", "assets/img/productos-img/bebida1.png","Refresco"),
                new Bebida("FANTA NARANJA","2.99", "assets/img/productos-img/bebida2.png", "Refresco"),
                new Bebida("CERVEZA", "3.99", "assets/img/productos-img/bebida4.png","Bebida con alcohol"),
                new Bebida("AGUA", "1.99", "assets/img/productos-img/bebida3.png","Bebida"));

$complementos = array(  new Complemento ("BBQ", "0.50", "assets/img/productos-img/salsa1.png", "Salsa barbacoa","salsa"),
                        new Complemento ("MAYONESA", "0.50", "assets/img/productos-img/salsa2.png","Salsa mayonesa", "salsa"),
                        new Complemento ("KETCHUP", "0.50", "assets/img/productos-img/salsa3.png", "Salsa ketchup","salsa"),
                        new Complemento ("SALCHIPAPA", "7.99", "assets/img/productos-img/tapa1.png","Papas fritas + mini salchichas + bolas de pollo crujiente", "tapa"),
                        new Complemento ("CRISPY ROLL", "6.59", "assets/img/productos-img/tapa2.png", "1 Fajita rellena de vegetales y pollo crujiente picante","tapa"),
                        new Complemento ("FINGERS DE CHEEDAR", "6.00", "assets/img/productos-img/tapa3.png", " 8 Bastones de queso rebozados","tapa"),
                        new Complemento ("FINGERS DE QUESO", "10.00", "assets/img/productos-img/tapa3.png", " 15 Bastones de queso rebozados","tapa"));



?>