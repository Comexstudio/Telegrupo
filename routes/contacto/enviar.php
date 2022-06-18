<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- ICO ---->
    <link rel="shorcut icon" type="image/x-icon" href="../../assets/img/ico.png">
    <!--- Estilos ---->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/formulario.css">
    <!--- Estilos Bootstrap ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Telegrupo │ Inicio </title>
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

    <!--- Body ---->

    <?php 

        $myemail = 'mpaniagua@comexstudio.com';
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $message = $_POST['mensaje'];

        $to = $myemail;
        $email_subject = "Nuevo mensaje: $subject";
        $email_body = "Haz recibido un nuevo mensaje del sitio web Grupo Nosara. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
        $headers = "From: $email";

        mail($to, $email_subject, $email_body, $headers);

    ?>

        
            <section class="contacto" id="contact_">
                <div class="contenedorc">
                    <h3 class="titulo">Contacto</h3>

                    <form method="post" action="enviar.php" class="formulario">

                        <input type="text" placeholder="Nombre" nombre="nombre" required>
                        <input type="text" placeholder="Correo" name="email" required>
                        <textarea type="text" name="mensaje" placeholder="Mensaje" required></textarea>
                        
                        <input class="boton" type="submit" value="Enviar">
                    </form>

                </div>
            </section>

            
            <!--Mapa de Google-->
            <div id="map"></div>



    <!---- Scripts --->
    <script src="../../js/map.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/alert.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--- Scripts Bootstrap --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>