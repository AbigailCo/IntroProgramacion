<?php
/** detecta si el numero es multiplo de 2
 * parametro frontal
 * @param int $numero
 * @return boolean
 */

 function multiploDe2 ($numero) {
    /** boolean $multiplo, $multiploDe2*/
    $multiplo = $numero % 2 == 0;
    $multiploDe2 = $multiplo ? "\n Es multiplo de 2": "\n No es multiplo de 2";
    return $multiploDe2;
 }

 /**Programa principal Multiplo de 2
  * int $numUsuario string $respuesta */

  echo "Ingrese el numero: ";
  $numUsuario = trim(fgets(STDIN));

  $respuesta = multiploDe2 ($numUsuario);

  echo $respuesta;



