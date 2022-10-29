<?php
/** PROGRAMA suma de una potencia y una raiz cuadrada
 * int $m, $n, $potencia, $raiz, $resultado
 */

echo "Ingrese un numero: ";
$m = trim (fgets (STDIN));
echo "Ingrese otro numero: ";
$n = trim (fgets (STDIN));

$potencia = pow ($m, $n);
$raiz = abs ($m);
$raiz = sqrt ($raiz);
$resultado = $potencia + $raiz;

echo $m ." elevada a la ". $n . " + la raiz cuadrada del absoluto de ". $m ." es: ". $resultado;