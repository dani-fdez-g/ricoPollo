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
        
    <?php require_once 'assets/includes/cabecera.php';
    include_once 'cargarProductos.php';
    
    ?>
    
    </header>
    
    <section>
        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="true">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carusel 1.png" class="d-block" alt="oferta del mes">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carusel 2.png" class="d-block" alt="oferta del mes">
            </div>
            <div class="carousel-item">
                <img src="assets/img/carusel 3.png" class="d-block" alt="oferta del mes">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container-fluid" > <!--tapas-->
      <div class="row">
        <h3 class="titulos" >PARA COMPARTIR</h3>
            <?php foreach ($cubos as $key => $producto){ ?>
                
                <div class="col-6 col-md-3">
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
                                                    <input type="hidden" name="producto-complemento" value="<?php echo $key?>">
                                                    <button class="btn-add" type="submit">AÑADIR</button>
                                                </form>
                                            </div>
                                        </div>
                                    <?php }?>
                    
                                </div>
      </div>
    </section>

                    
    <section>
        <div class="publicidad">
            <img class="publi-1 mt-1" src="assets/img/publi1.png">
            <img class="que-te-apetece" src="assets/img/que-te-apetece-hoy.png">

                <a class= "btn-pedir" type="submit" href="carta.php">PEDIR AHORA <img src="assets/img/moto.png"></a>
            
        </div>
    </section>

    
    <footer>
    <?php require_once 'assets/includes/footer.php';?>
    </footer>
</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>
