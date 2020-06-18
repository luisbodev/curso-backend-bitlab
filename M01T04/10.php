<?php
    $ages = Array(19,20,21,19,18,17);

    $cant = array_count_values($ages);

    $index=array_keys($cant);

    // print_r($index);

    // echo '<br>';
    // print_r($cant);

    for($i=0;$i<count($index);$i++){
        echo "Edad: ".$index[$i]." Frecuencia -> ".$cant[$index[$i]]."<br>";
    }

?>