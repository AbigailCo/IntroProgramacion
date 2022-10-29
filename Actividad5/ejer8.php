<?php
/** MODULO Calcula cantidad de agua destilada
 * parametro formal
 * @param float $esLoratadina 
 * @param float $esBetametasona
 * @return float 
 */

 function calcAguaDestilada ($esLoratadina, $esBetametasona) {
    //float $cantLora $cantBeta $canAgua
    
    $cantLora = 10 * $esLoratadina /100; //10% de loratadina
    $cantBeta = 15 * $esBetametasona /100; //15% de betametazona

    $canAgua = $cantBeta + $cantLora;
    return $canAgua;
 }

 /** PROGRAMA PRINCIPAL Calcula la cantidad de agua destilada
  * float $loratadina, $betametazona, $agua
  */

  echo " INGRESE LA CANTIDAD DE LORATADINA: ";
  $loratadina = trim (fgets (STDIN));
  echo "INGRESE LA CANTIDAD DE BETAMETAZONA: ";
  $betametasona = trim (fgets (STDIN)); 

  $agua = calcAguaDestilada ($loratadina, $betametasona);

  echo "La cantidad de agua destilada es: ". $agua;
