<?php
    $numero = 5;
    $potencia = 3;
    $resultado=0;
    $i=1;
    echo "Elevar el número $numero a la potencia $potencia <br>";
    while($i<=$potencia){
        $resultado=$numero**$i;
        echo $resultado.'<br>';
        $i++;
    }

?>