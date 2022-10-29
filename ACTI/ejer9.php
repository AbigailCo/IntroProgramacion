<?php
/**
 * MODULO calcula el valor de IMC
 * @param float $esPeso 
 * @param float $esAltura
 * @return float
 */
//FLOAT $imc
 function esIMC ($esPeso, $esAltura) {
    $imc= $esPeso / pow($esAltura,2);
    return $imc;
 }

 /**
  * MODULO paraOMS
  * Parametros formales
  *@param float $esIMC
  *@return string
  */
  // string $estado float $elIMC

  function paraOMS ($elIMC){
    if ($elIMC < 18.50){
        $estado = "Bajo peso.";
    }
    elseif ($elIMC > 18.50 && $elIMC < 24.99){
        $estado = "Peso normal.";
    }
    elseif ($elIMC > 24.99 && $elIMC <29.99){
        $estado = "Sobre peso.";
    }
    elseif ($elIMC > 29.99 && $elIMC < 34.99){
        $estado = "Obesidad leve.";
    }
    elseif ($elIMC > 35 && $elIMC < 39.99){
        $estado = "Obesidad media.";
    }
    else {
        $estado = "Obesidad morbida";
    }
    return $estado;
  }


  //Programa principal IMC
  //FLOAT $peso, $altura, $imc
  //STRING $dato

  echo "Ingrese su peso: ";
  $peso= trim(fgets(STDIN));
  echo "Ingrese su altura";
  $altura= trim (fgets(STDIN));

  $imc= esIMC($peso, $altura);
  $dato= paraOMS($imc);
  echo $dato;