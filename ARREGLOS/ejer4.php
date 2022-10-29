<?php
/** Modulo lista de temperatura obtener el porcentaje
 * @param array $lisaDeTem
 * @param int $esDeter
 * @return float
 */
function listaTemperatura($listaDeTem, $esDeter) {
    //$porcentaje
    $conTem= 0;
    for ($j = 0; $j < count($listaDeTem); $j++) {
        if ($listaDeTem[$j] > $esDeter){
        $conTem = $conTem + 1;
        }
    }
    $porcentaje = $conTem * 100 / count($listaDeTem);
    return $porcentaje;
}

/**
 * Programa principal
 * array $temperaturas 
 * int $determinada
 * float $retorno
 */
$temperaturas = [30 , 22, 28, 40 , 33, ];
$determinada = 21;
$retorno = listaTemperatura($temperaturas, $determinada);
echo "El procentaje de temperatura mayor a 21 es " . $retorno . "%";