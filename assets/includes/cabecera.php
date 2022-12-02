
<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>HOME - RICOPOLLO</title>
    <?php 
    session_start();
    
    require_once 'config/metas.php';
    require_once '<config/parametros.php'; 

    ?>

    

    

</head>

<header>        
<nav class="navbar navbar-expand-md bg-warning ">
  <div class="container mt-3">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img class="logo" src="assets/img/logo.png" alt="" width="150px"></a>
    
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active txt-titulos" aria-current="page" href="carta.php">CARTA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active txt-titulos" href="#">CUPONES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active txt-titulos" href="#">OFERTAS</a>
        </li>
      </ul>
          <div class="form-inline my-2 my-lg-0 iconos-phone">
                    <a href="#" class="me-3"><img width="40px"  src="assets/img/account.png" alt=""></a>
                    <a href="compra.php" class="txt-titulos" style="text-decoration:none; color:black;"><img width="40px" src="assets/img/buy.png" alt=""><?php if(isset($_SESSION['sel'])){echo count($_SESSION['sel']);} ?></a>
          </div>
    </div>
   
  </div>
            

</nav>

  <div class="gotas ">
  <img width="100%" src="assets/img/gotas.png">
  </div>

</header>