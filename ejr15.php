<?php

//PROGRAMA Calculo del recorrido
//Float c1, c2, h
$c1=0;
$c2=0;
$h=0;
echo "Escriba los mtrs que hay desde su casa a la esquina: ";
$c1 = trim (fgets (STDIN));

echo "Escriba los mtrs que hay desde la esquina a la casa de su amigo: ";
$c2 = trim (fgets (STDIN));

$h = sqrt ($c1**2 + $c2**2);

echo "Si se pudiera caminar en linea recta desde su casa a la de su amigo, <br> ";
echo "usted caminaria " . $h . "mtrs";