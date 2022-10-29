<?php
/** Modulo lista de temperatura
 * retorna un arreglo asociativo con la min y max temperatura
 * @param array $lisaDeTem
 * @return array
 */
function listaTemperatura($listaDeTem) {
    //int $indiceMin $temMin $temMax
    //array $temMinMax
    $temMin = 999;
    $temMax = -1;
    for ($j = 0; $j < count($listaDeTem); $j++) {
        if ($listaDeTem[$j] < $temMin) {
            $temMin = $listaDeTem[$j];
        }
        if ($listaDeTem[$j] > $temMax) {
            $temMax = $listaDeTem[$j];
        }
        
    }
    $temMinMax = [
         "min" => $temMin,
         "max" => $temMax
    ];
    return $temMinMax;
}

/**
 * Programa principal
 * 
 */
$temperaturas = [20 , 30 , 18, 40 , 60];
$retorno = listaTemperatura($temperaturas);
echo "Las temperaturas min es: " . $retorno ["min"]. " y la max es " . $retorno ["max"];
