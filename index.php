<!DOCTYPE html PUBLIC>
<html>
<head>
    <?php
    include 'config/metas.php'
    ?>
    <title>HOME - RICOPOLLO</title>
</head> 

<body>
    <header>
        
    <?php 
    // se incluyen las paginas necesarias
    require_once 'assets/includes/cabecera.php';
    include_once 'cargarProductos.php';
    
    ?>
    
    </header>
<body>
     <!-- menu -->
        <div id="carrusel" class="carousel slide mt-1" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <a href="carta.php"><img src="assets/img/carusel 1.png" class="d-block w-100" alt="oferta del mes"></a>
                </div>
                <div class="carousel-item active">
                <a href="carta.php"><img src="assets/img/carusel 2.png" class="d-block w-100" alt="oferta del mes"></a>
                </div>
                <div class="carousel-item">
                    <<a href="carta.php"><img src="assets/img/carusel 3.png" class="d-block w-100" alt="oferta del mes"></a>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    <!-- fin menu -->
    <section class="container-producto" > <!--para compartir-->
           <h3 class="titulos ">PARA COMPARTIR</h3>
                <?php 
                //se recorre el array para mostrar los productos del mismo
                foreach ($cubos as $key => $producto){ ?>
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
            <?php 
            //se recorre el array para mostrar los productos del mismo
            foreach ($tiras as $key => $producto){ ?>
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
    </section> <!--fin para compartir-->

                    
    <section>
        <div class="publicidad">
            <img class="publi-1 mt-1" src="assets/img/publi1.png">
            <img class="que-te-apetece" src="assets/img/que-te-apetece-hoy.png">

                <a class= "btn-pedir" type="submit" href="carta.php">PEDIR AHORA <img class="icons" src="assets/img/moto.png"></a>
            
        </div>
    </section>

    
    <footer>
        <!-- se incluye el footer -->
    <?php require_once 'assets/includes/footer.php';?>
    </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
