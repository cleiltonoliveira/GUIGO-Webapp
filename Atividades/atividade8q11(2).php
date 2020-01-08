<?php

$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$operador = $_POST['operador'];

switch($operador) {
    case "soma":
        echo $op1 + $op2;
        break;
    case "subtracao":
        echo $op1 - $op2;
        break;
    case "multiplicacao":
        echo $op1 * $op2;
        break;
    case "divisao":
        echo $op1 / $op2;
        break;
    default:
        echo "Operador não existe.";
        break;   
}

?>