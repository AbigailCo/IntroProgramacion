
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
 /** Modulo muestraMasco muestra los datos de un arreglo multidimencional
 * @param array
 * sin retorno
 */

 function muestraMasco ($esMascotas) {
     
    foreach ($esMascotas as $indice => $elemento) {
        echo "Indice: " . $indice . "\n";
        echo "Nombre: " . $elemento["nombre"] . "\n";
        echo "Edad: " . $elemento["edad"] . "\n";
        echo "Tipo: " . $elemento["tipo"] . "\n";
    }

 }
 /**Modulo primerMenorA */
 function primerMenorA ($esMascota, $esEdad){
    $bandera = true;
    $i = 0;
    while ($i< count($esMascota) && $bandera){

    }
 }
 //** Programa main llama al cargaMascotas y retorna el arroglo */

    $mascotas = cargaMascotas();
    muestraMasco($mascotas);
    $edad = 3;
    $menorA = primerMenorA($mascotas, $edad);

 