<!DOCTYPE html>
<html>

<head>
    <title>Decathlon</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js" type="text/javascript"></script>
</head>

<body>

<?php
include "includes/header.php"
?>

    <div class="sticky">
        <nav>
            <ul>
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="mujeres.php">MUJER</a></li>
                <li><a href="hombres.php">HOMBRE</a></li>
                <li><a href="ninios.php">NIÑO</a></li>
                <li><a href="novedades.php">¡NOVEDADES!</a></li>
                <li class="right"><a href="contacto.php">CONTÁCTANOS</a></li>
            </ul>
        </nav>
    </div>

<?php
include "includes/slider.php"
?>

    <section>
        <div class="prodnav">
            <div class="navidad">
                <div class="titnav"> <img src="img/santa.png"> Esta Navidad... ¡REGALA DEPORTE! <img src="img/santa.png"></div>
                <div class="containertext">
                    <img class="imageprod" src="img/pro1.jpeg">
                    <div class="inside">
                        <div class="price">49.90€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
                <div class="containertext">
                    <img class="imageprod" src="img/pro2.jpeg">
                    <div class="inside">
                        <div class="price">65.90€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
                <div class="containertext">
                    <img class="imageprod" src="img/pro3.jpeg">
                    <div class="inside">
                        <div class="price">22.50€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
        </div>

        <div class="prodocas">
            <div class="ocasion">
                <div class="titoc"><img src="img/sale.png">ÚLTIMAS OFERTAS<img src="img/sale.png"></div>
                <div class="containertext">
                    <img class="imageprod2" src="img/pro4.jpeg">
                    <div class="inside">
                        <div class="price">52.20€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
                <div class="containertext">
                    <img class="imageprod2" src="img/pro5.jpeg">
                    <div class="inside">
                        <div class="price">29.90€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
                <div class="containertext">
                    <img class="imageprod2" src="img/pro6.jpeg">
                    <div class="inside">
                        <div class="price">14.50€</div>
                        <div class="textprod">Añadir a la cesta</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php
include "includes/aside.php"
?>

<?php
include "includes/footer.php"
?>

</body>

</html>
