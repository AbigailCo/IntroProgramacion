<?php
//RADIO
// Float radio, diametro, perimetro, superficie, volumen, supEsfera, pi
$pi=3.1416;
$radio=0;
$diametro=0;
$perimetro=0;
$superficie=0;
$volumen=0;
$supEsfera=0;
echo "Escribir el radio: ";
$radio =trim (fgets(STDIN));

$diametro = $radio ** 2;
$perimetro = 2*$pi*$radio;
$superficie = $pi*$radio**2;
$volumen = 4*$pi*$radio**3/ 3;
$supEsfera = 4*$pi*$radio**2;

echo "Devolución de datos: diametro:" . $diametro . "cm \n";
echo " perimetro:" . $perimetro . "cm \n";
echo " superficie:" . $superficie . "cm \n"; 
echo " volumen:" . $volumen . "cm3 \n"; 
echo "superficie de la esfera:" . $supEsfera;


