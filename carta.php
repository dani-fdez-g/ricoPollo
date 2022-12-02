<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>CARTA - RICOPOLLO</title>
</head>

<body>
    <header>
        <?php 
        require_once 'assets/includes/cabecera.php';
        include 'cargarProductos.php'; 
        include 'pedidos.php';
        //ssi no existe la sesion se crea, si existe se añade el producot seleccionado
        if(isset($_SESSION['sel'])){
            
            if(isset($_POST['producto-hamburguesa'])){
                $productoSel = new Pedido ($hamburguesas[$_POST['producto-hamburguesa']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-hamburguesa']);
                
            }
            elseif(isset($_POST['producto-ensalada'])){
                $productoSel = new Pedido ($ensaladas[$_POST['producto-ensalada']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-ensalada']);
            }
            elseif(isset($_POST['producto-cubo'])){
                $productoSel = new Pedido ($cubos[$_POST['producto-cubo']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-cubo']);
            }
            elseif(isset($_POST['producto-tira'])){
                $productoSel = new Pedido ($tiras[$_POST['producto-tira']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-tira']);
            }
            elseif(isset($_POST['producto-complemento'])){
                $productoSel = new Pedido ($complementos[$_POST['producto-complemento']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-complemento']);
            }
            elseif(isset($_POST['producto-bebida'])){
                $productoSel = new Pedido ($bebidas[$_POST['producto-bebida']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-bebida']);
            }

        }
        else{
            $_SESSION['sel'] = array();
        }

        ?>
    </header>
    <body>
        <section class="productos">
          <section class="menu-categorias mb-5">
            
            <div class="categoria ms-2 me-2"><a href="#hamburguesas" class="categoria-txt">HAMBURGUESAs</a></div>
            <div class="categoria ms-2 me-2 "><a href="#ensaladas" class="categoria-txt">ensaladas</a></div>
            <div class="categoria ms-2 me-2 "><a href="#cubos_tiras" class="categoria-txt">cubos y tiras</a></div>
            <div class="categoria ms-2 me-2 "><a href="#complementos" class="categoria-txt">complementos</a></div>
            <div class="categoria ms-2 me-2 "><a href="#bebidas" class="categoria-txt">bebidas</a></div>

        
        </section>

        <section class="container " id="hamburguesas" > <!--hamburguesas-->
        <h3 class="titulos" >Hamburguesas</h3>
        <div class="col-6 col-md-12">

                    <?php foreach ($hamburguesas as $key => $producto){ ?>
                    <div class="card">
                        <div class="card-name-product">
                            <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                        </div>
                        <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                            <div class="des-producto">
                            <h3 class="titulo">INGREDIENTES</h3>
                            <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                            </div>
                        </div>
                        <div class="card-body-producto">
                            <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                            <form action="carta.php" method='post'>
                                <input type="hidden" name="producto-hamburguesa" value="<?php echo $key?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                            </form>
                        </div>
                    </div>
                <?php }?>
            </div>
        </section> <!-- fin hamburguesas-->
           <section class="container-producto" id="ensaladas" > <!--ensaladas-->
           <h3 class="titulos ">ENSALADAS</h3>
                <?php foreach ($ensaladas as $key => $producto){ ?>
                <div class="card">
                    <div class="card-name-product">
                        <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                    </div>
                    <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                        <div class="des-producto">
                           <h3 class="titulo">INGREDIENTES</h3>
                           <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                        </div>
                    </div>
                    <div class="card-body-producto">
                        <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                        <form action="carta.php" method='post'>

                                <input type="hidden" name="producto-ensalada" value="<?php echo $key;?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                        </form>
                    </div>
                </div>
            <?php }?>
            </section> <!--fin ensaladas-->
            
            <section class="container-producto" id="cubos_tiras" > <!--cubos y tiras-->
            <h3 class="titulos">Cubos & tiras</h3>
                <?php foreach ($cubos as $key => $producto){ ?>
                <div class="card">
                    <div class="card-name-product">
                        <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                    </div>
                    <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                        <div class="des-producto">
                           <h3 class="titulo">INGREDIENTES</h3>
                           <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                        </div>
                    </div>
                    <div class="card-body-producto">
                        <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                        <form action="carta.php" method='post'>
                                <input type="hidden" name="producto-cubo" value="<?php echo $key;?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                        </form>
                    </div>
                </div>
            <?php }?>
            <?php foreach ($tiras as $key => $producto){ ?>
                <div class="card">
                    <div class="card-name-product">
                        <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                    </div>
                    <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                        <div class="des-producto">
                           <h3 class="titulo">INGREDIENTES</h3>
                           <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                        </div>
                    </div>
                    <div class="card-body-producto">
                        <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                        <form action="carta.php" method='post'>
                                <input type="hidden" name="producto-tira" value="<?php echo $key;?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                        </form>
                    </div>
                </div>
            <?php }?>
        </section><!--fin cubos y tiras-->

        <section class="container-producto" id="complementos"> <!--complementos-->
        <h3 class="titulos">Complementos</h3>
                <?php foreach ($complementos as $key => $producto){ ?>
                <div class="card">
                    <div class="card-name-product">
                        <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                    </div>
                    <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                        <div class="des-producto">
                           <h3 class="titulo">INGREDIENTES</h3>
                           <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                        </div>
                    </div>
                    <div class="card-body-producto">
                        <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                        <form action="carta.php" method='post'>
                                <input type="hidden" name="producto-complemento" value="<?php echo $key;?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                        </form>
                    </div>
                </div>
            <?php }?>
        </section><!--fin bebidas-->
        <section class="container-producto" id="bebidas"> <!--bebidas-->
        <h3 class="titulos">bebidas</h3>
                <?php foreach ($bebidas as $key => $producto){ ?>
                <div class="card">
                    <div class="card-name-product">
                        <p class="nombre-producto"><?php echo $producto->getNombre();?></p>
                    </div>
                    <div style="width:230px; height: 226px; background-image: URL(<?php echo $producto->getImagen();?>)" class="card-image-product">
                        <div class="des-producto">
                           <h3 class="titulo">INGREDIENTES</h3>
                           <p class="descripcion"><?php echo $producto ->getDescripcion();?></p>
                        </div>
                    </div>
                    <div class="card-body-producto">
                        <p class="precio"><?php echo $producto->getPrecio();?>$</p>
                        <form action="carta.php" method='post'>
                                <input type="hidden" name="producto-bebidas" value="<?php echo $key;?>">
                                <button class="btn-add" type="submit">AÑADIR</button>
                        </form>
                    </div>
                </div>
            <?php }?>
        </section><!--fin bebidas-->

        </section>
    </body>
        
    <footer>
    <?php require_once 'assets/includes/footer.php';?>
    </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
