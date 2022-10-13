<?php

/*25
34
30
33
25)Crea una aplicación llamada CalculadoraPolacaInversaApp, nos pedirá 2
operandos (int) y un signo aritmético (String), según este último se realizara
la operación correspondiente. Al final mostrara el resultado en un cuadro de
dialogo. Los signos aritméticos disponibles son:
• +: suma los dos operandos.
• -: resta los operandos.
• *: multiplica los operandos.
• /: divide los operandos, este debe dar un resultado con decimales (double)

*/

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operador = $_REQUEST['sig'];

$resultado=0;
switch($operador){
    case "+":
        $resultado = $num1 + $num2;  
    break;

    case "-":
        $resultado = $num1 - $num2;  
    break;
    case "*":
        $resultado = $num1 * $num2;  
    break;
    case "/":
        $resultado = $num1 / $num2;  
    break;

}

echo "La operancion de $num1  $operador  $num2 = $resultado";