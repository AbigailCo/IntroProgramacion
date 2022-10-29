<?php

/**mediciones de triangulo equilatero */

/** MODULO perimetroEquilatero 
 * Parametro formal
 * @param float $lado
 * @return float
 */

 function perimetroEquilatero($lado) {
    // float $perimetro
    $perimetro = $lado*3;
    return $perimetro;
 }
 function alturaEquilatero($h) {
    // float $altura
    $altura = sqrt(3);
    $altura = $altura * $h / 2;
    return $altura;
 }
 function areaEquilatero ($a) {
    // float $area $altu
    $altu = alturaEquilatero($a);
    $area = $a * $altu /2 ;
    return $area;
 }

 //PROGRAMA Medidas de un Equilatero
 // calcula el area, perimetro y altura de un triangulo equilatero
// float $ladoCm, $areaT, $altuT, $periT
 echo "Ingrese la longitudo de un lado de su triangulo equilatero en cm: ";
 $ladoCm = trim (fgets (STDIN));

 $areaT= areaEquilatero ($ladoCm);
 $altuT= alturaEquilatero ($ladoCm);
 $periT= perimetroEquilatero ($ladoCm);

 echo "Dado el equilatero que mide ". $ladoCm." cm, \n";
 echo "su perimetro es de ". $periT. "cm, \n";
 echo "su area de ". $areaT. "cm2, \n";
 echo "y su altura de ". $altuT. "cm";