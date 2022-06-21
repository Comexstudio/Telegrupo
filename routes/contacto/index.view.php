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

    <!--- Body ---->

        
            <section class="contacto" id="contact_">
                <div class="contenedorc">
                    <h3 class="titulo">Formulario de Contacto</h3>

                    <form method="post" action="enviar.php" class="formulario">

                        <input type="text" placeholder="Nombre" name="nombre" required>
                        <input type="text" placeholder="Correo" name="email" required>
                        <textarea type="text" name="mensaje" placeholder="Mensaje" required></textarea>
                        
                        <input class="boton" type="submit" value="Enviar">
                    </form>

                </div>
            </section>


    <!---- Mapa Ubicacion ----->
    <div id="map"></div>


        <!-- Pie de pagina --->
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Servicios</h3>
                            <ul>
                                <li><a href="#">Ejemplo</a></li>
                                <li><a href="#">Ejemplo</a></li>
                                <li><a href="#">Ejemplo</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Telegrupo</a></li>
                                <li><a href="#">Equipo</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Telegrupo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis deleniti reiciendis repudiandae nisi et nemo atque fuga voluptates vel at architecto reprehenderit, mollitia cum, optio aliquam expedita corporis id eveniet.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Telegrupo © 2022</p>
                </div>
            </footer>
        </div>
        

    <!---- Scripts --->
    <script src="../../js/main.js"></script>
    <!---- Api de maps --->
    <script src="../../js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnInWAxY1G6X2NubLdlPofyPRzghF7EWA&callback=iniciarMap"></script>
    <!---- Api de iconos --->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--- Scripts Bootstrap --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>