<?php
    $word = 'MESA';
    $arreglo = str_split($word);

    for($i=(count($arreglo)-1);$i>=0;$i--){
        echo $arreglo[$i];    
    }
?>