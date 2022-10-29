<?php
/** MODULO Verifica si un numero es multiplo de otro
 * parametros formales
 * @param int $esNum
 * @param int $esMul 
 * @return string
 */

 function esMultiplo ($esNum, $esMul)   {
    // Int $calculo $res

    $calculo = ($esNum % $esMul) == 0;
    $res = $calculo ? " ES multiplo " : " NO ES multiplo ";
    return $res;
 }

 /** PROGRAMA PRINCIPAL ¿Es multiplo?
  * Int $num, $mul
  * string $respuesta 
  */

  echo "INGRESE EL DIVIDENDO: ";
  $num = trim (fgets (STDIN));
  echo "INGRESE EL DIVISOR: ";
  $mul = trim (fgets (STDIN));

  $respuesta = esMultiplo ($num, $mul);

  echo $num . $respuesta . " de " . $mul;