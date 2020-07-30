var imagenes=Array();

imagenes[0]="img/1.jpeg";
imagenes[1]="img/2.jpeg";
imagenes[2]="img/3.jpeg";

var inicioslider=0;

setInterval(adelante, 5000);

function adelante(){

    inicioslider++;

    if (inicioslider==imagenes.length){
        inicioslider=0;
    }

    document.getElementById("img").src = imagenes[inicioslider];

}

function atras(){

    inicioslider--;

    if (inicioslider==-1){
        inicioslider=imagenes.length-1;
    }

    document.getElementById("img").src = imagenes[inicioslider];

}

function play() {

    tiempo=setTimeout("play()",2000);

}

function stop() {

    clearTimeout(tiempo);

}