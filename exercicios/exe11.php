<?php
$entrada = 100;
if ($entrada > 0){
    $calculo = sqrt($entrada);
    $quadrado = $entrada ** 2;
    echo "ao quadrado: ".$quadrado;
    echo "<br>a raiz do numero é". $calculo;
}
else{
    echo "valor invalido";
}