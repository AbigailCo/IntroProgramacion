<?php
/** Modulo lista de temperatura 
 * retorna el indice donde se encuentra la mayor temperatura
 * @param array $lisaDeTem
 * @return float
 */
function listaTemperatura($listaDeTem) {
    //int $indiceMax $temMax
    $temMax = -1;
    for ($j = 0; $j < count($listaDeTem); $j++) {
        if ($listaDeTem[$j] > $temMax) {
            $temMax = $listaDeTem[$j];
            $indiceMax = $j;
        }
  
    }
    return $indiceMax;
}

/**
 * Programa principal
 * 
 */
$temperaturas = [20 , 30 , 18, 40 , 60];
$retorno = listaTemperatura($temperaturas);
echo "El indice donde se encuentra la menor temperatura es: " . $retorno;
