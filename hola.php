<?php
$anio=2022;
$naci=0;
echo"Escribir el año de nacimiento";
$naci=trim(fgets(STDIN));
$naci=$anio-$naci;
echo"Tenes". $naci."años";
