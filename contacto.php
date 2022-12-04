<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>

  <!-- Enlace al documento css. no aplicable en codepen.
  <link rel="stylesheet" type="text/css" href="contact-form.css">
-->
<?php require_once 'assets/includes/cabecera.php';?>
  </head>


<body>  
  
  <!-- formulario de contacto en html y css -->  

  <div class="container">

    <div class="formulario ">      
      <h1 class="titulo">Formulario de contacto</h1>
        <h3 class="subtitulo">Escríbenos y en breve los pondremos en contacto contigo</h3>


          <form action="submeter-formulario.php" method="post">       

            
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    
              
                <button type="submit" class="btn-enviar" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
            
          </form>
    </div>  
  </div>

</body>
<?php require_once 'assets/includes/footer.php';?>
</html>
