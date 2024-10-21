<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $Array1=[10,8,15,20,40];
 $A2=5,3,7,5,30;
 $ARes=15,11,22,25,70;

$Suma=$A1+$A2=$ARes;

$array=array( $arrayA1, "+", $arrayA2, "=", $ArrayRes);

$longitud=count($array);
echo "SUMA ENTRE ARREGLOS";
echo "<br>";
for ($h=0; $h<$longitud ; $h++) { 
	echo $array[$h];
	echo "<br>";
}

 /*$double=implode("   ", $array);
echo "SUMA ENTRE ARREGLOS <br>";
echo $double;
echo "<br>","<br>";
*/




