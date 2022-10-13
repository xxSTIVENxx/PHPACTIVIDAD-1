<?php

/*33)Dada una cadena, extraer la cuarta y quinta letra usando el método
substring. */

$palabra = $_REQUEST['palabra'];

$subcadena= substr ( $palabra, 4,5 );

echo "$subcadena";