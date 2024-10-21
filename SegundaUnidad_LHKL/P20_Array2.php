<?php
$Nombre="Anna";
$array= array(1,2,3,"casa", $Nombre
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