<?php
    $word = 'MURCIELAGO';
    $arreglo = str_split($word);

    $palabra='H967';
    $palaArreglo=str_split($palabra);



    for($i=0;$i<count($palaArreglo);$i++){
        for($j=0;$j<count($arreglo);$j++){
            if($palaArreglo[$i]==strval($j)){
                $palaArreglo[$i]=$arreglo[$j];

            }
        }
    }

    for($i=0;$i<count($palaArreglo);$i++){
        echo $palaArreglo[$i];
        
    }

?>