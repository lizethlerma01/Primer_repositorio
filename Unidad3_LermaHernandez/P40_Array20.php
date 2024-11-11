<?php
/*CBTIS89
P40_Array20.php
Programa que almacena por meio de un ciclo los números del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los números pares, en el $Arreglo2 van los números impares, en el $Arreglo3 va la suma de los números correspondientes al mismo indice.
Lerma Hernández Karla Lizeth
Programación 3°A T.M
*/

$Arreglo1=array();
$Arreglo2=array();
$Arreglo3=array();


for ($n=150; $n<=200; $n++) { 
	$Num=$n % 2;
	if ($Num==0) 
		{
			$Arreglo1[]= $n;
			$Arreglo2[]= $n+1;
		}
		
	}
	for($h=0; $h<count($Arreglo1); $h++){
	$Arreglo3[$h]=$Arreglo1[$h]+$Arreglo2[$h];}
	echo "Arreglo1" . "&nbsp " . "Arreglo2 " . "Arreglo3 " . "<br>";
	for ($l=0; $l<26; $l++) { 
echo "".$Arreglo1[$l]." ...... ". $Arreglo2[$l]." ...... ". $Arreglo3[$l]. "<br>";
}
 
?>