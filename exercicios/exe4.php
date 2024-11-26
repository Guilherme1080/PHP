<?php
$num = 30;
$num2 = 10;
$num3 = 25;

if  ($num3 > $num && $num3 < $num2){
    echo $num,", ",$num3,", ",$num2;
}
if  ($num3 > $num2 && $num3 < $num){
    echo $num2,", ",$num3,", ",$num;
}
if  ($num > $num2 && $num < $num3){
    echo $num2,", ",$num,", ",$num3;
}
if  ($num > $num3 && $num < $num2){
    echo $num3,", ",$num,", ",$num2;
}
if  ($num2 > $num && $num2 < $num3){
    echo $num,", ",$num2,", ",$num3;
}
if  ($num2 > $num3 && $num2 < $num){
    echo $num3,", ",$num2,", ",$num;
}

?>