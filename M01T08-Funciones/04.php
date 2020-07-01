<?php

// Comprobar si un número dado está dentro de un rango dado.



function find($num,$rInicio,$rFin){
    if($num>=$rInicio && $num<=$rFin){
    	echo "El número $num esta dentro del rango $rInicio - $rFin";
    }
    else{
    	echo "El número $num no está dentro del rango $rInicio - $rFin";
    }
}

$num=10;

$rInicio=1;
$rFin=10;

find($num,$rInicio,$rFin);

echo "<br>";
find(11,$rInicio,$rFin);

echo "<br>";
find(50,1,100);

?>