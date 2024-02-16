<?php

/*

    Adicion +
    Sustraccion -
    Multiplicacion *
    Division /
    Modulo %
    Potenciacion **
    Negacion !

*/

/* 
    1 Primera forma de escribir comentario (multiples lineas)
*/
// 2 segunda forma de escribir comentario
# 3 tercera forma de escribir comentario

# Exponenciacion
$exponenciacion = 2 ** 2;
// echo $exponenciacion . PHP_EOL;

$horas = 7201;
$conversion = $horas / 3600;
$segundos = "$horas segundos convertidos a horas son: $conversion". PHP_EOL;
$resto = "Sobran: ". ($horas % 3600). "segundos". PHP_EOL;

echo $segundos;
echo $resto;
?>