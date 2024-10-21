<?php
/*CBTIS 89
 Programa que 
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

$e = array("Manzana" =>'Kilo'=>'$25','Mango'=>'Kilo'=>'$25','Limon'=>'Kilo'=>'$25','Naranja'=>'Kilo'=>'$25');

 echo "**FRUTERIA DEL NORTE**", "<br>","<br>";
 foreach ($e as $Fruta =>$Kilo=>$Cuesta)
 	{ echo " EL  " . $Kilo . " es el " .$Fruta. "cuesta". $Cuesta;
 echo "<br>", "<br>";
}
?>


