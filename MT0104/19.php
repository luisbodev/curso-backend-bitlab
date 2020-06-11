<?php
    $books = array("El principito", "Los 7 hábitos", "La Vaca", "El moje que vendio su ferrari");
    $toRead = array();
    $result;
    $notRead;

    for($i=0;$i<count($books);$i++){
        $random=rand(0,(count($books)-1));
        $toRead[$i]=$books[$random];
    }
    $result=array_values(array_unique($toRead));

    $notRead=array_values(array_diff($books,$result));

    echo "Libros a leer: <br>";
    for($i=0;$i<count($result);$i++){
        echo "-".$result[$i]."<br>";
    }

    echo "<br>Libros que no leeré: <br>";
    for($i=0;$i<count($notRead);$i++){
        echo "-".$notRead[$i]."<br>";
    }
    
?>