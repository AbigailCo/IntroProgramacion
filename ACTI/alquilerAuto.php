<?php
/**
 * MODULO ALquilesAuto
 * @param float $esKm
 * @return floa
 */

 //FLOAT $mas1000, $precio

function esAlquiler ($esKm){
    if($esKm <= 300){
        $precio = 850;
    }
    elseif ($esKm > 300 && $esKm <= 1000){
        $precio = $esKm - 300; //Va dar la cantidad de km mayores los primeros 300
        $precio = $precio * 10.5; //Multiplica la cantidad de km mayores a 300 * 10.5
        $precio = $precio + 850; //suma la cantidad de km mayores a 300 mas los 850 de los primeros 300 km
    }
    else{
        $esKm = $esKm - 1000; //va a dar la cantidad de km que superaron los 1000
        $mas1000 = $esKm * 8.5; //multiplica por $8.5 la cantidad de km mayores a 1000
        $precio = 850 + (700*10.5)+ $mas1000; /*suma los 850 de los primeros 300km luego multiplica los 700km 
        para llegar a 1000 y suma los km que superaron los 1000*/
    }
    return $precio;
}

/**
 * MODULO esIVA
 * parametros formales
 * @param float $esPrecio
 * @return float
 */
//FLOAT $esImpuesto

function esIVA($esPrecio){
    $esImpuesto = 21*$esPrecio/100;
    return $esImpuesto
}

//PROGRAMA PRINCIPAL ALQUILER 
//Float $km $iva $precio $montoFinal

echo "KMs del auto: ";
$km = trim (fgets(STDIN));

$precio = esAlquiler($km);
$iva = esIVA($precio);
$montoFinal = $precio - $iva;

echo " DEBERA PAGAR $".$precio." DE LOS CUALES $". $iva . " CORRESPONDEN A IVA \n";
echo " y ". $montoFinal . "CORRESONDE A LA CANTIDAD DEL ALQUILER EN NETO.";