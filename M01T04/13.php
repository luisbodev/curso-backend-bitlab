<?php
    $word = 'MURCIELAGO';
    $arreglo = str_split($word);

    $palabra='HOLA';
    $palaArreglo=str_split($palabra);

    for($i=0;$i<count($palaArreglo);$i++){
        for($j=0;$j<count($arreglo);$j++){
            if($palaArreglo[$i]==$arreglo[$j]){
                $palaArreglo[$i]=$j;
            }
        }
    }

    for($i=0;$i<count($palaArreglo);$i++){
        echo $palaArreglo[$i];
        
    }

?>