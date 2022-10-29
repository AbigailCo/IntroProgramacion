<?php
/** Calcula la superficie de un circulo
 * parametro formal 
 * @param float $esRadio
 * @return float
 */

 function superficieCircular ($esRadio) {
    // float $superficieCirculo

    $superficieCirculo = pow($esRadio, 2) * M_PI;
    return $superficieCirculo;
 }

 /** MODULO corona circular 
  * va calcular la corona circular con radio menor y radio mayor
  * parametros formales
  * @param float $radioMin
  * @param float $radioMax
  *@return float
  */

function coronaCircular($radioMin, $radioMax) {
    // float $coranaC
    
    $coronaC = (pow($radioMax,2) - pow($radioMin,2))*M_PI;
    return $coronaC;
}

/** PROGRAMA PRINCIPAL Superficie del circulo y corona circular 
 * float $mayorRadio $menorRadio $radioCir $resSuper $resCorona
 */
echo "INGRESAR LA MEDIDA DEL RADIO CIRCULAR: ";
$radioCir = trim (fgets (STDIN));
echo "INGRESE EL RADIO MAYOR DE SU CORONA: ";
$radioMax = trim (fgets (STDIN));
echo "INGRESE EL RADIO MENOR DE SU CORONA: ";
$radioMin = trim (fgets (STDIN));

$resCorona = coronaCircular ($radioMin, $radioMax);
$resSuper  = superficieCircular ($radioCir);

echo "La superficie de su circulo es de: ". $resSuper."\n";
echo "La superfice de la corona circular es de: ". $resCorona."\n";
