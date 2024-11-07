<?php 
/* CBTIS89
Programa que dise los numeros pares

3°A Matutino
*/

$arraynumeros = array(-1,-5,7,-9,5,8,-24,56,-46,90,-65,33,44,-23,-10);
$arraypositivos = array();
$arraynegativos = array();
$sumapositiva = 0;
$sumanegativos = 0;

foreach($arraynumeros as $numero){
	if($numero >= 0){
		$arraypositivos[] = $numero;
		$sumapositiva += $numero;
	}
	else{
		$arraynegativos[] = $numero;
		$sumanegativos += $numero;
	}
}

echo "Numeros positivos: ";
echo implode(", ", $arraypositivos) . "<br>"; 

echo "Numeros negativos: ";
echo implode(", ", $arraynegativos) . "<br>"; 

echo "La suma de los numeros positivos es: " . $sumapositiva . "<br>";
echo "La suma de los numeros negativos es: " . $sumanegativos . "<br>";

?>