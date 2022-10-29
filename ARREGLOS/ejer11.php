
<?php
/**modulo ARREGLO multidimencional 
 * indexado - asociativo
 * sin paramentros
 *@return array 
 */
function cargaMascotas (){
    $misMascotas = [];
 
    $misMascotas[0]  = [
    "nombre" => "Gonzo",
    "edad" => 9,
    "tipo" => "perro",
    ];
    $misMascotas[1]  = [
    "nombre" => "Peggy",
    "edad" => 3,
    "tipo" => "puerco",
    ]  ;
 
    $misMascotas[2]  = [
    "nombre" => "Harry",
    "edad" => 4,
    "tipo" => "Hamster",
    ]   ;
    $misMascotas[3]  = [
    "nombre" => "Cuca",
    "edad" => 30,
    "tipo" => "Cucaracha",
    ];
    return $misMascotas;
}
 
/**
 * Modulo muestraMasco muestra los datos de un arreglo multidimencional
 * @param function
 * sin retorno
 */

 function muestraMasco (cargaMascotas) {
    foreach ($infoMasco as $indice => $datos) {
        echo "mascota " . $indice . "es " . $datos. "\n";
    }
 }


 /**programa principal
  * 
  */