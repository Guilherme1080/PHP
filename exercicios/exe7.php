<?php
$valor = 50;

$porcentagem45 = ($valor * 45) /100;
$porcentagem30 = ($valor * 45) /100;
if ($valor > 45){
    echo"o valor de lucro na peça é: $porcentagem45";
}
elseif ($valor < 45){
    echo"o valor de lucro na peça é: $porcentagem30";
}
else {
    echo"valor invalido";
}