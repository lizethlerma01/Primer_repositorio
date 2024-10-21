<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

$num=array($np=0, $ni=0, );
for($j=1 ; $j<=100; $j++)
{ $num[]=$j;}
foreach ($num as $valor)
{
	if ($valor % 2 == 0)
		{ $np=$np+$j;}
	{ $ni=$ni+$j;}

	{
		echo "Los números pares son: " $np;
		"<br>";
		echo "Los números impares son: " $ni;}
}

?>
