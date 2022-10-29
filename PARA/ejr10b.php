<?php
// PROGRAMA Encriptacion
/* float numOriginal, 
    entero1, numEncrip1, 
    num2, entero2, numEncrip2, 
    num3, entero3, numEncrip3, 
    num4, entero4, numEncrip4,
    Valor1, Valor2, Valor3, valor4 */
$numOriginal = 0;
$entero1 = 0;
$entero2 = 0;
$entero3 = 0;
$entero4 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$numEncrip1 = 0;
$numEncrip2 = 0;
$numEncrip3 = 0;
$numEncrip4 = 0;
$valor1= 0;
$valor2= 0;
$valor3= 0;
$valor4= 0;
echo "Desencriptaremos su numero \n ATENCION SI EL NUMERO POSEE MENOS DE 4 DIGITOS AGREGE 0 A LA IZQUIERDA\n";
echo "Ingrese el numero: ";
$numOriginal = trim (fgets(STDIN));

$entero1 = intdiv($numOriginal,1000);
$numEncrip1 = ($entero1+3) % 10;

$num2 = $numOriginal % 1000;
$entero2 = intdiv($num2,100);
$numEncrip2 = ($entero2+3) % 10;

$num3 = $num2 % 100;
$entero3 = intdiv($num3,10);
$numEncrip3 = ($entero3+3) % 10;

$num4 = $num3 % 10;
$entero4 = intdiv($num4,1);
$numEncrip4 = ($entero4+3) % 10;

$valor1 = $numEncrip3;
$valor2 = $numEncrip4;
$valor3 = $numEncrip1;
$valor4 = $numEncrip2;

echo "Su numero desencriptadp es " . $valor1 . $valor2 . $valor3 . $valor4;