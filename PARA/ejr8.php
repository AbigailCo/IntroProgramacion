<?php

//PROGRAMA El resto
//ENTERO dividendo, divisor, resto

echo "Escriba el dividendo ENTERO de su division: ";
$dividendo= trim (fgets(STDIN));

echo "Escriba el divisor ENTERO de su division: ";
$divisor= trim (fgets(STDIN));

$resto = intdiv($dividendo, $divisor);
$resto = $dividendo - $resto * $divisor;

echo "El resto de la division entre ".$dividendo." y ".$divisor." es ".$resto;
