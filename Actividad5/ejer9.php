<?php
/** MODULO Circunferencia de la base de un cilindro
 * parametros formales 
 * @param float $radio
 * @return float
 */

 function circunBase ($radio) {
    //float $circunferenciaBase 
    $circunferenciaBase = 2 * M_PI * $radio ;
    return $circunferenciaBase;
 }

 /** MODULO Superficie de la base de un cilindro
  * parametros formales
  * @param float $radio
  *@return float
  */

  function superBase ($radio) {
    //float $superficieBase
    $superficieBase = M_PI * pow($radio, 2);
    return $superficieBase;
  }

  /** MODULO Superficie de lado de un cilindro
   * parametros formales
   * @param float $radio
   * @param float $altura
   * @return float
   */

   function superLado ($radio, $altura) {
    //float $superficieLado
    
    $superficieLado = circunBase ($radio);
    $superficieLado = $superficieLado * $altura;
    return $superficieLado;
   }

/** MODULO Superficie total del cilindro 
 * parametros formales
 * @param float $radio
 * @param float $altura
 * @return float  
 */

 function superficieTotal ($radio, $altura) {
    //float $superTotal $superBase

    $superBase = superBase ($radio);
    $superTotal = superLado ($radio, $altura);

    $superTotal = $superBase + $superBase + $superTotal;
    return $superTotal;
 }

 /** MODULO Volumen del cilindro
  * parametros formales
  * @param float $radio 
  * @param float $altura
  *@return float
 */

function volCilindro ($radio, $altura) {
    //float $volumenCili

    $volumenCili = M_PI * pow ($radio, 2) * $altura;
    return $volumenCili;
}

/** PROGRAMA PRINCIPAL calculos con cilindros
 * float $esRadio, $esAltura, $circunB, $superficieB, $superficieL, $superficieT, $volC
 */

echo "INGRESE EL RADIO: ";
$esRadio = trim (fgets (STDIN));   
echo "INGRESE LA ALTURA: ";
$esAltura = trim (fgets (STDIN));

$circunB = circunBase ($esRadio);
$superficieB= superBase ($esRadio);
$superficieL = superLado ($esRadio, $esAltura);
$superficieT = superficieTotal ($esRadio, $esAltura);
$volC = volCilindro ($esRadio, $esAltura);

echo "Cilindro con h=". $esAltura." y r:" . round($esRadio,2);
echo "\n longitud de la circunferencia de la base (cm) = ".  round($circunB,2);
echo "\n superficie base (cm2) = ".round ($superficieB,2);
echo "\n superficie lateral del cilindro (cm2) = ". round($superficieL,2);
echo "\n superficie total cilindro (cm2) = ". round($superficieT,2);
echo "\n volumen del cilindro (cm3) = " . round($volC,2);
