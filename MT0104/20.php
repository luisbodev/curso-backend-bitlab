<?php
    $rangoIni=1986;
    $rangoFin=2020;

    echo "Rango de años $rangoIni - $rangoFin <br>";
    for($i=$rangoIni;$i<=$rangoFin;$i++){
        if($i%4==0 && $i%100!=0 || $i%400==0){
            echo "El año $i es bisiesto<br>";
        }
    }
    
?>