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
            <li><a href="index.php">HOME</a></li>
            <li><a class="active" href="mujeres.php">MUJER</a></li>
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

<section class="sectionsides">

    <div class="prodocas">
        <div class="ocasion">
            <div class="titoc"><img src="img/m1.png">COLECCIÓN MUJER<img src="img/m2.png"></div>
            <div class="containertext">
                <img class="imageprod2" src="img/pro10.jpg">
                <div class="inside">
                    <div class="price">34.90€</div>
                    <div class="textprod">Añadir a la cesta</div>
                </div>
            </div>
            <div class="containertext">
                <img class="imageprod2" src="img/pro11.jpg">
                <div class="inside">
                    <div class="price">11.90€</div>
                    <div class="textprod">Añadir a la cesta</div>
                </div>
            </div>
            <div class="containertext">
                <img class="imageprod2" src="img/pro12.jpg">
                <div class="inside">
                    <div class="price">95.90€</div>
                    <div class="textprod">Añadir a la cesta</div>
                </div>
            </div>
        </div>
    </div>

    <div class="prox"><p>PRÓXIMAMENTE NUEVOS PRODUCTOS</p> <br> <img class="cam" src="img/camion.png"></div>

</section>

<?php
include "includes/aside.php"
?>

<?php
include "includes/footer.php"
?>

</body>

</html>