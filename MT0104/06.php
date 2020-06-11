<?php
    $number = 123456;
    $array = str_split($number);
    $acumulador=0;

    for($i=0;$i<count($array);$i++){
        $acumulador=$acumulador+$array[$i];
    }

    echo "Respuesta: $acumulador";
?>