
<?php
$hora = 40.50;
$hora_trabalhada = 250;
function salario($hora, $hora_trabalhada){
    $soma = $hora * $hora_trabalhada;
    if ($soma > 2500){
        $calculo = ($soma * 11) /100;
        $res = $soma - $calculo;
        echo "o seu salario é de R$ $res";
    }
    else{
        echo "o seu salario é de $soma";
    }
}
salario($hora,$hora_trabalhada);
?>
