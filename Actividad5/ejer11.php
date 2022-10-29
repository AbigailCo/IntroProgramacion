<?php 
/** MODULO encriptado
 * parametro formal
 * @param int $numOriginal
 * @return int
 */

 function encriptado($numOriginal) {
    // entero $val1, $val2, $val3, $val4, $aux, $encrip
    
    // Descomponemos los numeros

    $val2 = $numOriginal % 1000;
    $val3 = $val2 % 100;
    $val4 = $val3 % 10;

    // Dividimos el valor, sumamos 7 y sacamos MOD de 10
    
    $val1 =((int)($numOriginal / 1000) + 7) % 10;
    $val2 = ((int) ($val2 / 100) + 7) % 10;
    $val3 = ((int)($val3 / 10) + 7) % 10;
    $val4 = ((int) ($val4 / 1) + 7) % 10;

    // Ordenamos valores 1er/3er y 2do/4to

    $aux = $val1;
    $val1= $val3;
    $val3 = $aux;

    $aux = $val2;
    $val2 = $val4;
    $val4 = $aux;

    // Componemos los valores

    $val1 = $val1 * 1000;
    $val2 = $val2 * 100;
    $val3 = $val3 * 10;
    
    $encrip = $val1 + $val2 + $val3 + $val4;

    return $encrip;
 }

/** MODULO desencriptado
 * parametro formal
 * @param int $numOriginal
 * @return int
 */

 function desencriptado($numEncrip) {
    // entero $val1, $val2, $val3, $val4, $aux, $desencrip, $numEncrip
    
    // Descomponemos los numeros

    $val2 = $numEncrip % 1000;
    $val3 = $val2 % 100;
    $val4 = $val3 % 10;

    // Dividimos el valor, sumamos 7 y sacamos MOD de 10
    
    $val1 = ((int) ($numEncrip / 1000) + 3) % 10;
    $val2 = ((int) ($val2 / 100) + 3) % 10;
    $val3 = ((int) ($val3 / 10) + 3) % 10;
    $val4 = ((int) ($val4 / 1) + 3) % 10;

    // Ordenamos valores 1er/3er y 2do/4to

    $aux = $val1;
    $val1= $val3;
    $val3 = $aux;

    $aux = $val2;
    $val2 = $val4;
    $val4 = $aux;

    // Componemos los valores

    $val1 = $val1 * 1000;
    $val2 = $val2 * 100;
    $val3 = $val3 * 10;
    
    $desencrip = $val1 + $val2 + $val3 + $val4;

    return $desencrip;
 }
 
/** PROGRAMA PRINCIPAL Empresa de encriptado y desencriptado
 * int $original, $encriptado $desencriptado
 */

 echo "INGRESE EL NUMERO: ";
 $original = trim (fgets (STDIN));

 $encriptado = encriptado ($original);

 echo "Su numero encriptado es: ". $encriptado;

 $desencriptado = desencriptado ($encriptado);
  
 echo "\n Su numero desencriptado es: ". $desencriptado;