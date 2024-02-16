<?php

// Casting
// Es cuando forzamos que un tipo de dato se convierta a otro tipo de dato.

$numero = "5";
// var_dump($numero);

$numero = (int) $numero;
// var_dump($numero);

$banderita = 1;
// var_dump($banderita);

$banderita = (bool) $banderita;
// var_dump($banderita);

$papas = "4 papas";
var_dump($papas);

$nuevasPapas = $papas + 5;
var_dump($nuevasPapas);
?>