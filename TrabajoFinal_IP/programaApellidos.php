<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS", 
        "AMIGO", "PADRE", "NIÑOS", "PAÑAL", "COMER"
        /* ... COMPLETAR ... Agregar 5 palabras más */
    ];

    return ($coleccionPalabras);
}

//Modulo carga una coleccion de partidas en un arreglo indexado y asociativo
function cargarPartidas () {
    $coleccionPartidas[0] = ["palabraWordix "=> "QUESO" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix "=> "CASAS" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix "=> "PIANO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[3] = ["palabraWordix "=> "YUYOS" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[4] = ["palabraWordix "=> "TINTO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[5] = ["palabraWordix "=> "HUEVO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[6] = ["palabraWordix "=> "PISOS" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix "=> "FUEGO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[8] = ["palabraWordix "=> "GOTAS" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[9] = ["palabraWordix "=> "QUESO" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[10] = ["palabraWordix "=> "CASAS" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[11] = ["palabraWordix "=> "NIÑOS" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];


}

function seleccionarOpcion(){

}
/* ... COMPLETAR ... */


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables: 
//INT $eleccion $minPalabra, $maxPalabra, $posicionDePalabra
//STRING $nomUsuario $palabraParaJugar


//Inicialización de variables:
$maxPalabra= count($coleccionPalabras);
$minPalabra= 0;
$posicionDePalabra: 0;

//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);

function 
do {
    echo "Menu: \n";
    echo "(indgrese el numero de la opcion) \n";
    echo "1. Elegir una palabra para jugar. \n";
    echo "2. Jugar con una paabra aleatoria. \n";
    echo "3. Mostrar una partida. \n";
    echo "4. Mostrar la primer partida ganada. \n";
    echo "5. Mostrar resumen de un jugador. \n";
    echo "6. Mostrar listado de partidas ordenadas. \n";
    echo "7. Agregar una palabra de 5 letras al juego. \n";
    echo "8. SALIR.";
    $eleccion = trim (fgets(STDIN));
    if ($eleccion == 1){
        echo "Ingrese su nombre: ";
        $nomUsuario = trim (fgets (STDIN));
        escribirMensajeBienvenida($nomUsuario);
        $posicionDePalabra= solicitarNumeroEntre($minPalabra, $maxPalabra);
        $palabraParaJugar = $coleccionPalabras [$posicionDePalabra];
        jugarWordix($palabraParaJugar, $nomUsuario);


    }
}while ($eleccion <> 8)



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
