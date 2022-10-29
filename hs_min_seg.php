<?php

//PROGRAMA Horas:minutos:segundos
//Float horas, minutos, segundos

echo "Ingrese la cantidad de segundos: ";
$segundos = trim (fgets (STDIN));

$minutos = intdiv ($segundos, 60);
$segundos = $segundos % 60;
$horas = intdiv ($minutos, 60);
$minutos = $minutos - 60 * $horas;

echo "Esos segundos equivalen a: " . $horas . " horas " . $minutos . " minutos " . $segundos . " segundos.";
