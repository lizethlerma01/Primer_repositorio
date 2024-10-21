<?php
$Nombre="Anna";
$Nombre2="lerma";
$Nombre3="hobi";
$Nombre4="Hoseok";

$array= array($Nombre,$Nombre2,$Nombre3,
$Nombre4
);
//Se obtiene el número de elementos 
$longitud=count($array);
//Recorre todos los elemntos 
for($i=0; $i<$longitud; $i++)
{ //Se obtiene elvalor de cada elemento 
echo $array[$i];
echo "<br>";
}
?>