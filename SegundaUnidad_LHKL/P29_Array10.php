<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $Nombres = array ( 'Nombre 1'=>'Emma','Nombre 2'=>'Emiliano','Nombre 3'=>'Lizeth','Nombre 4'=>'Karen',
'Nombre 5'=>'Susana','Nombre 6'=>'Aby','Nombre 7'=>'Hobi','Nombre 8'=>'Lorena');

 foreach ($Nombres as $Persona=>$array)
 	{echo " El ". $Persona . ", ".$array ." esta en el array ";
 echo "<br>", "<br>";
}
?>