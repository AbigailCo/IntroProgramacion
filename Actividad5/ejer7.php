<?php
/** MODULO Calculo de tiempo
 * parametro formal
 * @param int $hs
 * @param int $min
 * @param int $seg
 * @return int 
 */

 function calcularTiempo ($hs, $min, $seg) {
    $min = $hs*60 + $min;
    $seg = $min*60 + $seg;
    return $seg;
 }

 /** MODULO Calcula la distancia/segundos 
  * parametro formal 
  * @param int $tiempo 
  * @param int $distancia
  * @return int
 */

 function calcularDis ($tiempo, $distancia) {
    // int $velocidad

    $velocidad = $distancia / $tiempo;
    return $velocidad;
 }

 /** PROGRAMA PRINCIPAL Ciclismo
  * da salida de los datos de los 2 primeros puestos
  * int $hs1 $min1 $seg1 $hs2 $min2 $seg2 $dis $puesto1 $puesto2
  */

  echo "INGERESE LA DISTANCIA EN MTS: ";
  $dis = trim (fgets (STDIN));
  echo "DATOS DEL PRIMER PUESTO \n";
  echo "Ingrese horas: ";
  $hs1 = trim (fgets (STDIN));
  echo "Ingrese minutos: ";
  $min1 = trim (fgets (STDIN));
  echo "Ingrese segundo: ";
  $seg1 = trim (fgets (STDIN));
  echo "\n DATOS DEL SEGUNDO PUESTO \n";
  echo "Ingrese horas: ";
  $hs2 = trim (fgets (STDIN));
  echo "Ingrese minutos: ";
  $min2 = trim (fgets (STDIN));
  echo "Ingrese segundo: ";
  $seg2 = trim (fgets (STDIN));

  $puesto1 = calcularTiempo ($hs1, $min1, $seg1);
  $puesto1 = calcularDis ($puesto1, $dis);

  $puesto2 = calcularTiempo ($hs2, $min2, $seg2);
  $puesto2 = calcularDis ($puesto2, $dis);

  echo "El primer puesto logro ". $puesto1 . " m/seg. \n";
  echo "y el sugundo puesto logro ". $puesto2 . " m/seg. \n";
