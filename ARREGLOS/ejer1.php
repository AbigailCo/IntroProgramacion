<?php
/** Modulo Leer Temperatura
 * Proceso (for)
 * Recorrido euxautivo
 * Arreglo indexado
 * @param int $valorN
 * @return int
 */

 function leerTemperatura ($valorN) {
    //int $datoTemperatura ARREGLO $temperatura
    $temperatura = [];

    for ($i = 0; $i < $valorN; $i++) {
        echo "Escribir temperatura: ";
        $datoTemperatura = trim (fgets(STDIN));
       $temperatura [$i] = $datoTemperatura; //Almacenara el dato que da en ese ciclo el usuario.
    }
    return $temperatura;
 }

 /** Programa principal
  * int $num $j
  */
 echo "cuantas temperaturas: ";
 $num = trim(fgets(STDIN));
 $retorno = leerTemperatura($num);
 for ($j = 0; $j < $num; $j++) {
    echo "La temperatura " . ($j + 1) . ":" . $retorno[$j] . "\n";
}