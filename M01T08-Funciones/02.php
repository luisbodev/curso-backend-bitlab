<?php

// Sumar cualquier cantidad de números dados. TIP: Usar arreglo o número dinámico de
// parámetros.



function sumar($array){
    $suma=0;
    for($i=0;$i<sizeof($array);$i++){
        $suma=$suma+$array[$i];
    }
    echo "El resultado de la suma es: ".$suma;
}

$array=[10,10];

sumar($array);

echo "<br>";
$array=[5,5,5];
sumar($array);

echo "<br>";
$array=[3,3,3,3];
sumar($array);

?>