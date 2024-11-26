<?php
function identificarTipo($valor) {
    if (is_int($valor)) {
        echo "O valor '{$valor}' é do tipo: inteiro (int)<br>";
    } elseif (is_float($valor)) {
        echo "O valor '{$valor}' é do tipo: ponto flutuante (float)<br>";
    } elseif (is_string($valor)) {
        echo "O valor '{$valor}' é do tipo: string (str) <br>";
    } else {
        echo "O valor '{$valor}' é de um tipo não identificado<br>";
    }
}


$entrada1 = 10;
$entrada2 = "ola";
$entrada3 = 2.50;

$entrada1 = is_numeric($entrada1) ? (strpos($entrada1, '.') !== false ? (float)$entrada1 : (int)$entrada1) : $entrada1;
$entrada2 = is_numeric($entrada2) ? (strpos($entrada2, '.') !== false ? (float)$entrada2 : (int)$entrada2) : $entrada2;
$entrada3 = is_numeric($entrada3) ? (strpos($entrada3, '.') !== false ? (float)$entrada3 : (int)$entrada3) : $entrada3;

identificarTipo($entrada1);
identificarTipo($entrada2);
identificarTipo($entrada3);

?>
