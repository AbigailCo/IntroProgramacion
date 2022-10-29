<?php
/** Modulo lista de temperatura
 *
 * sin retorno
 */
function listaTemperatura($listaDeTem) {
    for ($j = 0; $j < count($listaDeTem); $j++) {
        echo "La temperatura " . ($j + 1) . ":" . $listaDeTem[$j] . "\n";
    }
}

/**
 * Programa principal
 * 
 */
$temperaturas = [20 , 30 , 40 , 60];
$retorno = listaTemperatura($temperaturas);
