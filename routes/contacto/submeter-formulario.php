<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- ICO ---->
    <link rel="shorcut icon" type="image/x-icon" href="../assets/img/ico.png">
    <!--- Estilos ---->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/formulario.css">
    <!--- Estilos Bootstrap ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Telegrupo │ Contacto </title>
</head>
<body>
    <!--- Head ---->
    <header>
        <!--- Logotipo --->
        <div class="logo">
            <img src="../../assets/logo.png" alt="Logotipo">
            <a href="../../index.html" class="header__logo">TELEGRUPO</a>
        </div>
        <!--- Navegador --->
        <nav class="nav" id="nav-menu">
            <ion-icon name="close-outline" class="header__close" id="close-menu"></ion-icon>
            <!--- Menu --->
            <ul class="nav__list">
                <li class="nav__item"><a href="../../index.html" class="nav__link">Inicio</a></li>
                <li class="nav__item"><a href="../../routes/sobre.html" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="../../routes/habilidades.html" class="nav__link">Habilidades</a></li>
                <li class="nav__item"><a href="../../routes/servicios.html" class="nav__link">Servicios</a></li>
                <li class="nav__item"><a href="../../routes/contacto.html" class="nav__link">Contacto</a></li>
            </ul>
        </nav>
        <!--- Icono de cerrar ---->
        <ion-icon name="menu-outline" class="header__toggle" id="toggle-menu"></ion-icon>
    </header>
    
  </head>
  <body>  
  <?php 

        $myemail = 'anyele98@gmail.com';
        $name = $_POST['introducir_nombre'];
        $email = $_POST['introducir_email'];
        $telefono = $_POST['introducir_telefono'];
        $website = $_POST['introducir_website'];
        $asunto = $_POST['introducir_asunto'];
        $message = $_POST['introducir_mensaje'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje del sitio web Telegrupo. 
        \n Nombre: $name 
        \n Correo: $email 
        \n Telefono: \n $telefono
        \n Website: \n $website
        \n Asunto: \n $asunto
        \n Mensaje: \n $message";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);

?>
    

    <section class="container__body_">

    </section>
    <section class="container__body"> 
      
        <div class="container__body__section">
  
  
          <!-- formulario de contacto-->  
  
    <div class="contact_form">
  
      <div class="formulario">      
        <h1>Formulario de contacto</h1>
          <h3>Escríbenos y en breve nos ponemos en contacto contigo</h3>
  
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
                    <label for="telefone" class="colocar_telefono">Teléfono
                    </label>
                      <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                  </p>    
                
                  <p>
                    <label for="website" class="colocar_website">Sitio web
                    </label>
                      <input type="url" name="introducir_website" id="website" placeholder="Escribe la URL de tu web">
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
                
                  <button class="btn__enviar" type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
  
                  <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                  </p>         
</form>
</div>  
  </body>
  </html>

  <center>
    <div class="iconos-sociales">
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt="Sígueme en YouTube" height="35" width="35" src="https://1.bp.blogspot.com/-0Ao8V_ZtT5Q/YPhkfO0JqkI/AAAAAAAAA1U/Sz5GlaSW78AsY3nZpcqeIoPA_HQUSCVLgCPcBGAYYCw/s0/Youtube-icono.png " title=" Sígueme en YouTube "/></a>
    
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt="Sígueme en Facebook" height="35" width="35" src=" https://1.bp.blogspot.com/-Pop-U7OywXs/YPhkfrImyiI/AAAAAAAAA1Y/UBnVfTK9j2U-bIUqwZYMNSQPvz_l06mbwCPcBGAYYCw/s0/facebook-icono.png" title="Sígueme en Facebook"/></a>
    
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt="Sígueme en Instagram" height="35" width="35" src="https://1.bp.blogspot.com/-VFfOISywV0c/YPhkeRXuRQI/AAAAAAAAA1M/L75S9Usg5AovunH2Y-VzqJbaaY1LuK3eACPcBGAYYCw/s0/Instagram-icono.png" title="Sígueme en Instagram"/></a>
    
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt="Sígueme en WhatsApp" height="35" width="35" src=" https://1.bp.blogspot.com/-Vc_W7xraNnc/YPhkfwQExQI/AAAAAAAAA1c/dI72v37UC0EGJd7jWvKWYD3WMwZ7eER7gCPcBGAYYCw/s0/whatsapp-icono.png" title="Sígueme en WhatsApp"/></a>
    
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt="Sígueme en TikTok" height="35" width="35" src=" https://1.bp.blogspot.com/-rK19lcfnq9c/YPhkfuEwAnI/AAAAAAAAA1U/0ydy_rVmboQtu211UQs7_zMXdMih2LCCwCPcBGAYYCw/s0/tiktok-icono-oscuro.png" title="Sígueme en TikTok"/></a>
    
    <a href="URL DE LA RED SOCIAL" target="_blank"><img loading="lazy" alt=" Sígueme en Twitter" height="35" width="35" src=" https://1.bp.blogspot.com/-2JwTJZxg1AU/YPhkfB0DdjI/AAAAAAAAA1c/tDKdU6tS0A0lt4YegGUVd7k-9hguYz82ACPcBGAYYCw/s0/Twitter-icono.png" title="Sígueme en Twitter"/></a>
    </div>
    </center>
    


    <!---- Scripts --->
    <script src="../../js/main.js"></script>
    <script src="../../js/alert.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--- Scripts Bootstrap --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>