<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $equipo = array("Portero"=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'Rafa');

 echo "**SELECCIÓN NACIONAL**", "<br>","<br>";
 foreach ($equipo as $posicion =>$jugador)
 	{ echo " EL jugador " . $jugador . " es el " .$posicion;
 echo "<br>", "<br>";
}
?>