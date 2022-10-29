<?php
//Sueldo deseado
//Float inicial, deseado, aumento

echo "Escriba el sueldo inicial: ";
$inicial = trim (fgets(STDIN));

echo "Escriba el sueldo deseado: ";
$deseado = trim (fgets(STDIN));

$aumento = $deseado*100/$inicial-100;

echo "Se nesesita un aumento del: " . $aumento . "% para obtener el sueldo deseado.";
