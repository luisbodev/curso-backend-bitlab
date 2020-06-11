<?php
    $num1=12;
    $num2=8;
    $mayor=0;

    if($num1>$num2){
        $mayor=$num1;
    }
    else{
        $mayor=$num2;
    }
    while(($mayor%$num1!=0)||($mayor%$num2!=0)){
        $mayor++;
    }
    echo "Mínimo común múltiplo de $num1 y $num2 es: $mayor";
?>