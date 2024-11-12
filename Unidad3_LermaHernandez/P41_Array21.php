<?php
/* CBTIS 89
P41_Array21.php
Programa que almacena en un arreglo llamado $Compras el valor de 6 compras, posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones:
El contenido del arreglo $Descuentos se llenará  de la sigiente manera:
Compra menor 300=0
Compra mayor 300 y menor o igual a 100=10%
Compra mayor 100 y menor o igual a 2500=15%
Compra mayor 2500 y menor o igual a 5000=20%
compra mayor 5000=25%
En el arreglo $Total se coloca la diferencia entre la compra y el decuento y en arreglo $Porcentaje colocar el porcentaje que se le aplico de descuento 
Lerma Hernández Karla Lizeth
Programación 3°A T.M
*/

$Compras=array(800,2700,1900,150,7600,1000);
$Descuentos=array();
$Total=array();
$Porcentaje=array();

foreach ($Compras as $Compra) {

if ($Compra<300){
	$PorcentajeDescuento=0;
}
elseif ($Compra>=300 && $Compra<=1000) {
	$PorcentajeDescuento=10;
}
elseif ($Compra>=1000 && $Compra<=2500){
	$PorcentajeDescuento=15;
}
elseif ($Compra>=2500 && $Compra<=5000){
	$PorcentajeDescuento=20;
}
elseif ($Compra>=5000){
	$PorcentajeDescuento=25;
}

$MontoDescuento=($Compra*$PorcentajeDescuento/100);

$Descuentos[]=$MontoDescuento;
$Total[]=$Compra-$MontoDescuento;
$Porcentaje[]=$PorcentajeDescuento;
}

echo "Compras " . "&nbsp " . "Descuentos " . "Total " . "Porcentaje" . "<br>";
for ($j=0; $j<count($Compras); $j++){ 
	echo "".$Compras[$j]." ...... ". $Descuentos[$j]." ...... ". $Total[$j]."...... ". $Porcentaje[$j]."%"."<br>";
}
?>