<?php
/** Modulo lista de temperatura
 * @param array $lisaDeTem
 * @return float
 */
function listaTemperatura($listaDeTem) {
    //$promedio
    $acum = 0;
    for ($j = 0; $j < count($listaDeTem); $j++) {

        $acum = $acum + $listaDeTem[$j];
    }
    $promedio = $acum / $j;
    return $promedio;
}

/**
 * Programa principal
 * 
 */
$temperaturas = [20 , 30 , 40 , 60];
$retorno = listaTemperatura($temperaturas);
echo "El promedio de temperaturas es " . $retorno;
