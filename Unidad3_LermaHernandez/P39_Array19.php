<?php
/*CBTIS 89
P39_Array19.php
 Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones: Si la persona es menor de 18 años se debe de colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0. Si la persona tiene entre 18 y 49 años se debe de colocar un 1 en el artreglo $Grupo2 y en los otros dos colocar un 0.
 Si la persona tiene 50 años o más se debe de colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0. 
 Lerma Hernández Karla Lizeth
 3°A Programación T.M
 */

 $Nombre=array("Paco","Mari","Hobi","Emma","Adi","Liz");
 $Edad=array(12,56,30,16,43,15);
 $Grupo1=array();
 $Grupo2=array();
 $Grupo3=array();
 $longitud=count($Nombre);

 for ($h=0; $h<=5 ; $h++)
 { 
 	if ($Edad[$h]<18)
 		{$Grupo1[$h]=1;
 			$Grupo2[$h]=0;
 			$Grupo3[$h]=0;
 		}

 			elseif ($Edad[$h]>=18 and $Edad[$h]<=49)
 			{
 				$Grupo2[$h]=1;
 				$Grupo1[$h]=0;
 				$Grupo3[$h]=0;
 			}

 			else if ($Edad[$h]>=50)
 			{
 				$Grupo3[$h]=1;
 				$Grupo1[$h]=0;
 				$Grupo2[$h]=0;
 			}
 }

 echo "<br>";
 echo "&nbsp"."CBTIS 89"."<br>";
 echo "Nombre " . "&nbsp " . "Edad " . "Grupo1 " . "Grupo2 " . "Grupo3 " . "<br>";
 for ($h=0; $h<6; $h++){
 	echo $Nombre[$h]." ...... ". $Edad[$h]." ...... ". $Grupo1[$h]." ...... ". $Grupo2[$h]." ...... ". $Grupo3[$h]. "<br>";
 }
 
?>

 

