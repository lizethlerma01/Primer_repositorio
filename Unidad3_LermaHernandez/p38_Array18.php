<?php
/*CBTIS 89
 Programa que almacena números que se almacenan en un ciclo en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */
 $datos = array (array(10,20,30),array(40,50,60), array(70,80,90));

 echo "NORMAL";
 echo "<br>";
 for ($i=0;$i<3;$i++) { 
 	for ($j=0;$j<3;$j++) { 
 		echo $datos [$i] [$j]." ";}
 	
 	echo "<br>";
 }

 echo "FILAS A COLUMNAS";
 echo "<br>";
 for ($i=0;$i<3;$i++) { 
 	for ($h=0;$h<3;$h++) { 
 	echo $datos [$h] [$i]." ";}
 	
 	echo "<br>";
 }

 echo "COLUMNAS INVERSAS";
 echo "<br>";
 for ($i=0;$i<3;$i++) { 
    for ($j=2;$j>=0;$j--) { 
 echo $datos [$i] [$j]." ";}
 
 echo "<br>";
 }

 echo "FILAS INVERSAS";
 echo "<br>";
 for ($i=0;$i<3;$i++) { 
 	for ($j=2;$j>=0;$j--) { 
 		echo $datos [$j] [$i]." ";}
 	
 	echo "<br>";
 }
?>