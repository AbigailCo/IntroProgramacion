<?php
/** MODULO esFactor
 * parametro formal
 * @param string $esMes
 * @return int
*/

function esFactor ($esMes) {
    if ($esMes == "enero" || $esMes == "febrero" || $esMes == "marzo"){
        $factor = 15;
    }
    elseif($esMes == "abril" || $esMes == "mayo" || $esMes == "junio"){
        $factor =19;
    }
    elseif ($esMes == "septiembre" || $esMes == "octubre" || $esMes =="noviembre"){
        $factor=20;
    }
    elseif ($esMes== "diciembre"){
        $factor = 21;
    }
    else { echo "Ingrese el mes con nombre completo y en minuscula";}
    return $factor;
}

//PROGRAMA PRINCIPAL Empresa
//STRING $mes
//INT $numArt, $fac, $respuesta

echo "Ingrese el mes: ";
$mes = trim (fgets (STDIN));

$fac= esFactor($mes);

echo " Ingrese el numero de articulos: ";
$numArt = trim(fgets (STDIN));

$respuesta =$numArt * $fac;
echo "En el mes ". $mes. " se produjeron ". $numArt . " articulos,\n";
echo "por lo tanto la productividad es de: ". $respuesta;