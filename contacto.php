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
            <li><a href="mujeres.php">MUJER</a></li>
            <li><a href="hombres.php">HOMBRE</a></li>
            <li><a href="ninios.php">NIÑO</a></li>
            <li><a href="novedades.php">¡NOVEDADES!</a></li>
            <li class="right"><a class="active" href="contacto.php">CONTÁCTANOS</a></li>
        </ul>
    </nav>
</div>

<section class="formulariocontacto">
    <img src="img/form.png"><p>Rellene el siguiente formulario y nos pondremos en contacto con usted lo antes posible.</p>
    <form class="formulario">
        <ul>
            <li><label>Nombre</label>
                <br><input class="inputs" type="text" name="nombre" minlength="2" placeholder="Nombre" required></li>
            <li><label>Teléfono</label>
                <br><input class="inputs" type="number" name="telefono" maxlength="9" minlength="9" placeholder="Teléfono" required></li>
            <li><label>Dirección</label>
                <br><input class="inputs" type="text" name="direccion" minlength="2" placeholder="Dirección completa" required></li>
            <li><label>Fecha de nacimiento</label>
                <br><input class="inputs" type="date" name="fecha" required></li>
            <li><label>E-Mail</label>
                <br><input class="inputs" type="email" name="mail" placeholder="Email" required></li>
            <li> <label>Comentarios</label></li>
            <li><textarea name="coment" rows="8" cols="70"></textarea></li>
            <li><input  class="check" type="checkbox" name="acuerdo" value="1" checked>
                <label>He leido y acepto las condiciones.</label>
            </li>
            <li><input  class="enviar" type="submit" value="Enviar"></li>
        </ul>
    </form>
</section>

<?php
include "includes/footer.php"
?>

</body>

</html>