<?php


$nome = "Guilherme";
$num = 100;
$bool = true;
$nome = 150;
echo $nome;
echo "<br>";
echo $bool;

$real =5000;
$dolar = 5.676;
$res = $real / $dolar;
echo "<br>";
echo "U$$: " . $res;
echo "<br>";

if ($res < 500){
    echo "Ta pobre voce tem apenas " . $res . "dolares";
}
else{
    echo "ta fofo!!!";
}

$horas = 20;
$valor_hora = 100;

$salario = $horas*$valor_hora;

echo "<br> Seu Salario é: " .$salario;
if ($salario > 3000){
    echo "<br>seu salario esta bom!!" . $salario;
}
else{
    echo "<br>seu salario esta baixo: " . $salario;
}
$i =0;
while($i<=10){
    echo "<br>";
    echo $i;
    $i = $i +=1;
}








?>
