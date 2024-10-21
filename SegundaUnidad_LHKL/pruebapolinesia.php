<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $Array1=array(10,8,15,20,40);
 $Array2=array(5,3,7,5,30);
 $ArrayS=array ();
$ArrayD=array();
$ArrayR=array();
$ArrayM=array();


$longitud=count($Array1);

for ($h=0; $h<$longitud; $h++) { 
	$ArrayS[$h]=$Array1[$h]+$Array2[$h];
	$ArrayR[$h]=$Array1[$h]-$Array2[$h];
	$ArrayM[$h]=$Array1[$h]*$Array2[$h];
	$ArrayD[$h]=$Array1[$h]/$Array2[$h];
}

echo "SUMA ENTRE ARREGLOS";
echo "<br>";
for ($h=0; $h<$longitud; $h++) {
	echo $Array1[$h]." + ". $Array2[$h]." = ".$ArrayS[$h];
	echo "<br>";
}

echo "RESTA ENTRE ARREGLOS";
echo "<br>";
for ($h=0; $h<$longitud; $h++) {
	echo $Array1[$h]." - ". $Array2[$h]." = ".$ArrayS[$h];
	echo "<br>";
}

	echo "MULTIPLICACION ENTRE ARREGLOS";
echo "<br>";
for ($h=0; $h<$longitud; $h++) {
	echo $Array1[$h]." X ". $Array2[$h]." = ".$ArrayS[$h];
	echo "<br>";
}
	echo "DIVISION ENTRE ARREGLOS";
echo "<br>";
for ($h=0; $h<$longitud; $h++) {
	echo $Array1[$h]." / ". $Array2[$h]." = ".$ArrayS[$h];
	echo "<br>";
}

?>

 
