<?php
/**MODULO suma de valores de celulares
 * dada un array de valores retorna el monto total
 * array $esValor
 * int $retorna
 */
function sumarValores ($esValor) {
    //int $sumaVa
    $sumaVa = 0;
    for ($i = 0; $i < count ($esValor); $i++) {
        $sumaVa = $sumaVa + $esValor[$i];
    }
    return $sumaVa;
}

/** Programa de celulares
 * array $celulares $valor
 * int $decision $totalMontos
 */
 $celulares =["moto g6", "Sansumg J7", "Lg K9", "Iphone SE", "Galaxis a9"];
 $valor = [22030.90 , 10500.00, 27999.00, 38105.00, 17000.80];

 echo "Que celular desea: "; //decide en que indice se ubica el celular deseado
 $decision = trim(fgets(STDIN));
 echo "Es el celular: " . $celulares[$decision] . "\n";
 echo "y tiene un valor de: $" . $valor[$decision];

 $totalMontos = sumarValores($valor);
 echo "\n Cantidad total de todos los celulares: $".$totalMontos;


