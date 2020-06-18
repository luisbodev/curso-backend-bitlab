<?php
    $numbers = Array(1,2,3.14,5,1.9,1.17);
    $enteros=0;
    $flotantes=0;
    
    for($i=0;$i<count($numbers);$i++){
        if(is_int($numbers[$i])){
            $enteros++;
        }
        if(is_float($numbers[$i])){
            $flotantes++;
        }
    }
    echo "Promedio de números entreos: ".number_format(($enteros/count($numbers)),2)."%<br>";
    echo "Promedio de números flotantes: ".number_format(($flotantes/count($numbers)),2)."%";
?>