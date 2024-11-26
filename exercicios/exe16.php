<?php
$nota = 10;
$nota2 = 1.0;
function validar($nota, $nota2){
    if ($nota <= 10 && $nota >= 0 && $nota2 <= 10  && $nota2 >= 0) {
        $soma = ($nota + $nota2) / 2;
        echo "a media da nota é de $soma";
    }
    else{
        echo " notas são invalidas";
    }
}
validar($nota, $nota2);
?>