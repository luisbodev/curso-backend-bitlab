<?php
    $rango=100;

    for($j=1;$j<=$rango;$j++){
        $no=0;
        if($j!=1){
            for($i=2;$i<$j;$i++){
                if(($j%$i)==0){
                    $no++;
                }
            }
        }
        if($no==0){
            echo $j."<br>";
        }
    }

?>