<?php
/**Modulo para informacion de un circo
 * Sin parametros de entrada
 * @return array
 */

 function leerDatosCirco() { 
    echo "Nombre: ";
    $infCirco ["nombre"] = trim (fgets(STDIN));
    echo "inicio: ";
    $infCirco ["inicio"] = trim (fgets(STDIN));
    echo "Valor de la entrada: ";
    $infCirco ["valorEntra"] = trim (fgets(STDIN));
    echo "Cantidad de payasos: ";
    $infCirco ["cantPayasos"] = trim (fgets(STDIN));

    return $infCirco;
 }

 //Programa para mostrar el arreglo
 $arregloCirco =[];
 $arregloCirco = leerDatosCirco();
 print_r($arregloCirco);
   /** echo "cliente: " . $arregloCirco["nombre"]. "\n";
    * echo "funcion inicia a las: " . $arregloCirco ["inicio"]. "\n";
    *echo "Valor de la entrada: $".$arregloCirco ["valorEntra"]. "\n";
    *echo "Cantidad de payasos: ". $arregloCirco ["cantPayasos"]. "\n";
    */