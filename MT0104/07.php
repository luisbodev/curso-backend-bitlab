<?php
    $word = 'LUIS';
    $array = str_split($word);
    $acumPar='';
    $acumImpar='';

    for($i=0;$i<count($array);$i++){
        if($i%2==0){
            $acumPar=$acumPar.$array[$i];
        }else{
            $acumImpar=$acumImpar.$array[$i];
        }
    }
    echo "Caracteres pares: $acumPar<br>";
    echo "Caracteres impares: $acumImpar<br>";
?>