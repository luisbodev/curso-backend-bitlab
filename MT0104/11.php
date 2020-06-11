<?php
    $names = Array('Luis','Manuel','Tomas','Iliana','Francisco');
    
    $inicial;
    $result;

    for($i=65; $i<=90; $i++) {  
        $abc[] = chr($i);       
    }

    for($i=0; $i<count($names);$i++){
        $array = str_split($names[$i]);
        $inicial[]=strtoupper($array[0]);
    }

    $result=array_values(array_diff($abc,$inicial));
    
    echo "Letras del abecedario no icluidas en iniciales de los encuestados son: ";
    for($i=0; $i<count($result);$i++){
        echo "{$result[$i]} ";

    }
?>