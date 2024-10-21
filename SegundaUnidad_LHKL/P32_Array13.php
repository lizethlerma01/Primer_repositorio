<?php
/*CBTIS 89
 Programa que 
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */		

 $arraynumerico = array("Camisa", "Pantalon", "Cinturon", "Gorra", "Calcetines",);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>