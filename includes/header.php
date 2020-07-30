<div class="superior">
        <a class="supBot" onclick="document.getElementById('id02').style.display='block'">AYUDA</a>
    <img src="img/questmini.png"><a class="supBot" onclick="document.getElementById('id01').style.display='block'">LOGIN</a>
    <img src="img/usermini.png">
</div>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Cerrar">&times</span>
    <form class="modalcontent animate">
        <div class="avatarbox">
            <img src="img/userlog.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Nombre de usuario</b></label>
            <br><input class="username" type="text" placeholder="Nombre de usuario" name="username" required>
            <br><label for="psw"><b>Contraseña</b></label>
            <br><input class="password" type="password" placeholder="Contraseña" name="psw" required>
            <button class="botlog" type="submit">Login</button>
            <input class="remember" type="checkbox" checked="checked" name="remember"> Recordar contraseña
        </div>
         <div class="container1">
             <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel">Cancelar</button>
         </div>
    </form>
</div>

<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Cerrar">&times;</span>
    <form class="modalcontent animate">
        <div class="helpbox">
            <img src="img/help.png" alt="Avatar" class="avatar">
            <p>¿NECESITA AYUDA?</p>
        </div>

        <div class="ayu1">
            <img src="img/gps.png"> <div>Contacte con su tienda más cercana</div>
        </div>
        <div class="ayu1">
            <img src="img/call.png"> <div>Llame a nuestro teléfono de atención al cliente: <a>900 100 903</a></div>
        </div>
        <div class="ayu1">
            <img src="img/callcenter.png"> <div>Rellene nuestro <a href="contacto.php">formulario de contacto</a>  y le llamaremos</div>
        </div>

        <div class="container1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancel">Cerrar</button>
        </div>
    </form>
</div>



<div class="dropcesta">
    <a class="cesta"><p>MI<br>CESTA</br></p><img src="img/carrito.png"></a>
    <div class="dropcestacon animate2">
        <a class="animate">SU CESTA ESTÁ<br>VACIA</a>
        <img class="animate" src="img/vacio.png">
    </div>
</div>

    <input class="buscar" type="search" id="buscar" name="buscar" placeholder="Busqueda de productos">

<header>
    <div class="main">
        <a href="index.php"><img class="logo" src="img/logomini.jpg"></a> <img class="logo" src="img/tree.png">
    </div>
</header>
