<?php
    $numero = 97;
    
    $no=0;
    if($numero!=1){
        for($i=2;$i<$numero;$i++){
            if(($numero%$i)==0){
                $no++;
            }
        }
    }
    if($no>0){
        echo $numero." no es primo";
    }
    else{
        echo $numero." es primo";

    }

?>