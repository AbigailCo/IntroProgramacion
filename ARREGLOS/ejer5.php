<?php
/** Modulo lista de temperatura
 * retorna el indice de menor temperatura
 * @param array $lisaDeTem
 * @return float
 */
function listaTemperatura($listaDeTem) {
    //int $indiceMin $temMin
    $temMin = 999;
    for ($j = 0; $j < count($listaDeTem); $j++) {
        if ($listaDeTem[$j] < $temMin) {
            $temMin = $listaDeTem[$j];
            $indiceMin = $j;
        }
  
    }
    return $indiceMin;
}

/**
 * Programa principal
 * 
 */
$temperaturas = [20 , 30 , 18, 40 , 60];
$retorno = listaTemperatura($temperaturas);
echo "El indice donde se encuentra la menor temperatura es: " . $retorno;
