<?php
/*CBTIS 89
Lerma Hernández Karla Lizeth
Programa que almacena el nombre de cuatro articulod en un arreglo llamado $Productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas. Se debe calcular por medio de ciclos el subtotal y promedio de cada producto y guardarlo en los arreglos $Subtotal y $Promedio según corresponda.
Programacio 3°A T.M
*/

$Precios=array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Productos=array("Vestido","Pantalón","Cinturón","Camiseta");
$Subtotal=array();
$Promedio=array();

echo "TIENDA DE ROPA";
echo "<br>";
for ($j=0; $j<4; $j++){ 
	for ($w=0; $w<4 ; $w++) { 
		$Suma[]=($Precios+$Precios);
		$Subtotal[]=$Suma;
	}
}

echo "PRODUCTOS " . "&nbsp " . "SUBTOTAL " . "PROMEDIO " . "<br>";
for ($h=0; $h<count($Precios) ; $h++) { 
echo $Productos[$h].".......".$Subtotal[$h]."<br>";
}

echo "<br>","<br>";	

echo "PRECIOS";
echo "<br>";
for ($n=0; $n<4 ; $n++) { 
	for ($l=0; $l<4 ; $l++) { 
		echo $Precios [$n] [$l]. " ";}
		echo "<br>";
}
		
?>
