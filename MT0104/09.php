<?php
    $answers = Array('SI','NO','SI','NO','SI','NO',);
    $totalAnswers=count($answers);
    $yes=0;
    $no=0;
    for($i=0;$i<$totalAnswers;$i++){
        if($answers[$i]=='SI'){
            $yes++;    
        }
        else{
            $no++;
        }
            
    }
    echo "Frecuencia de respuestas SÍ: $yes <br>";
    echo "Porcentaje de respuestas SÍ: ".number_format(($yes/$totalAnswers), 2)."%<br>";
    echo "Frecuencia de respuestas NO: $no <br>";
    echo "Porcentaje de respuestas NO: ".number_format(($no/$totalAnswers), 2)."%<br>";
    echo "Total respuestas en el arreglo: $totalAnswers<br>";
?>