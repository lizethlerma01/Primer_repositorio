<?php
/*CBTIS 89
 Programa que almacena datos en un arreglo y posteriormente los imprime
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $arrayName = array (" Emiliano "," Emma "," Lizeth "," Daniela ", " Cinthya",);
echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for.";
echo "<BR>";

foreach($arrayName as $Nombre){
      echo $Nombre . " <BR>";
   }

   echo "Posteriormente se agregan cuatro datos y se agregan dos. "
   echo "<BR>";

array_push($arrayName,"Axel", "Hoseok", "Susana", "Aby",);
unset($arrayName[ 3,2 ]);

foreach($arrayName as $Nombre){
      echo $Nombre . " <BR>";
   }

?>