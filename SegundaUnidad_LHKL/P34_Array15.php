<?php
/*CBTIS 89
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto,y de forma contraria es decir convierte una cadena de texto a elementos dentros de un arreglo
Lerma Hernández Karla Lizeth
Programación 3°A T.M
*/

//ALamacena datos en un arreglo 
$arrayDatos=["Karina ", "Rosales ", "Orozco"];

//Convierte un array en una cadena de texto
$string=implode("    ", $arrayDatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>" , "<br>" ;

//Cadena de texto a separar
$Cadena="Tercero de programación matutino";

//Convierte una cadena de texto en un array 
$array=explode("   ", $Cadena);

$Longitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
for ($j=0; $j<$Longitud; $j++)
	{ echo $array[$j];
		echo "<br>";
	}
?>