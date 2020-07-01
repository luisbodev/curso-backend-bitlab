<?php

// Multiplique cualquier cantidad de números dados.



function multi($array){
    $mult=1;
    for($i=0;$i<sizeof($array);$i++){
        $mult=$mult*$array[$i];
    }
    echo "El resultado de la multipliación es: ".$mult;
}

$array=[5,5,5];
multi($array);

echo "<br>";
$array=[10,10];
multi($array);

echo "<br>";
$array=[2,2,5];
multi($array);


?>