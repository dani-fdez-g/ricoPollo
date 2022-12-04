<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>COMPRA - RICOPOLLO</title>
</head> 

<body>
    <header>
        
    <?php
        include_once 'hamburguesa.php';
        include_once 'ensalada.php';
        include_once 'cubo.php';
        include_once 'tiras.php';
        include_once 'complementos.php';
        include_once 'bebidas.php';
        include_once 'pedidos.php';
        include_once 'calculadora.php';
       
     require_once 'assets/includes/cabecera.php';
 
   
     

       //botones para añadir y eliminar cantidades
       if(isset($_POST['del'])){
        $pedidoSel = $_SESSION["sel"][$_POST['pos']];
        if($pedidoSel->getCantidad() == 1){
            unset($_SESSION["sel"][$_POST['pos']]);
            //re-index
            $_SESSION["sel"] = array_values($_SESSION["sel"]);
        }else{
            $pedidoSel->setCantidad($pedidoSel->getCantidad() - 1);
        }
    }else if (isset($_POST['add'])){
        $pedidoSel = $_SESSION['sel'][$_POST['pos']];
        $pedidoSel -> setCantidad($pedidoSel->getCantidad() + 1);
    }
    //creo la cookie
    $precioFinal = calculadoraPrecios::calcularPrecioTotal($_SESSION['sel']);
    setcookie("ultimoPrecio", $precioFinal, time()+10000);
    ?>
    
    </header>
    
        <div class="container box-compra">
            <table>
                <!-- encabezado -->
                <tr>
                    <th class="encabezados txt-center">Producto</th>
                    <th class="encabezados">Cantidad</th>
                    <th class="encabezados txt-center">Precio</th>
                </tr>
                <!-- contenido -->
                <?php
                    $pos=0;
                    foreach($_SESSION['sel'] as $pedido){
                        ?>
                    <tr class="border-box-producto">
                    
                        <td class="box-producto"><img class="img-carrito me-3" src="<?= $pedido->getProducto()->getImagen();?>"><?= $pedido->getProducto()->getNombre();?></td>
                        <form action="compra.php" method="post">
                                <input type="hidden" name="pos" value=<?=$pos?>>
                                <td><button class="ms-2 btn-cantidad me-2" type="submit" name="add"> + </button>
                                <?= $pedido->getCantidad();?>
                                <button class="btn-cantidad ms-2 " type="submit" name="del"> - </button></td>

                        </form>
                        <td class="txt-center"><?=$pedido->getProducto()->getPrecio();?> $</td>
                        <td>
                            
                        </td>
                    </tr>
                    <?php $pos++;
                    }
                
                ?>
                    <tr>
                    
                        <td></td>                    
                        <td class="txt-center txt-precio">TOTAL</td>
                        <td class="txt-center txt-precioTotal"><?=$precioFinal  ?> $</td>
             
                    </tr>
            </table>
                        <div class="cookie">
                            <p>Tu ultimo pedido => <?= $_COOKIE['ultimoPrecio']?> $</p> 
                        </div>
                        <a href="compra.php"><button type="submit"class="btn-comprar-ya me-5 ms-5 " > COMPRAR </button></a>
                        <a href="carta.php"><button type="submit" class="btn-seguir-pedido ">  PEDIR MAS </button>      </a>
     
        </div>

    

    <?php require_once 'assets/includes/footer.php';?>

</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
