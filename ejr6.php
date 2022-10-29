<?php
//PROGRAMA Intercambio
// Entero a, b, aux
$a=0;
$b=0;
$aux=0;

echo "Escribi el primer valor: ";
$a = trim (fgets(STDIN));

echo "Escribi el segundo valor: ";
$b = trim (fgets(STDIN));

$aux = $a;
$a= $b;
$b= $aux;

echo "El primer valor ahora vale " . $a . " el segundo valor va ser " . $b;