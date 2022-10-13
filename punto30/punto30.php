<?php

/*30)Convertir una frase a mayúsculas o minúsculas, que daremos opción a que
el usuario lo pida y mostraremos el resultado por pantalla.

strtolower: convierte a minúsculas
strtoupper: convierte a mayúsculas*/


$palabra = $_REQUEST['pa'];
$convertir= $_REQUEST['con'];


switch($convertir){
    case "minuscula":
        $palabra = strtolower($palabra);
        echo $palabra;
    break;

    case "mayuscula":
        $palabra = strtoupper($palabra);
        echo $palabra;
    break;
}

