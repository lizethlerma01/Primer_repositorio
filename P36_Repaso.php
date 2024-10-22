<?php
/*CBTIS 89
 Programa que hace varias operaciones dentro de un arreglo y posteriormente los imprime en orden ascendente y descendente 
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
*/

 $array1= array (18,15,16,30,5);
 $array2= array (19,25,13,18,28);
 $s= array();
 $r= array();
 $m= array();
 $d= array();

 $longitud= count($array1);

 for ($j=0; $j<$longitud ; $j++) { 
 	$s[$j]=$array1[$j]+$array2[$j];
 	$r[$j]=$array1[$j]-$array2[$j];
 	$m[$j]=$array1[$j]*$array2[$j];
 	$d[$j]=$array1[$j]/$array2[$j];
 }