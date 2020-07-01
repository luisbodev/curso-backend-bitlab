<?php

// Encontrar el mayor o el menor de entre tres números. El usuario debería poder elegir si
// quiere el número mayor o si quiere el número menor.



function num($mayor,$a,$b,$c){
    if($mayor){
    	$numMayor=$a;
    	if($b>$numMayor){
    		$numMayor=$b;
    	}
    	if($c>$numMayor){
    		$numMayor=$c;
    	}
    	echo "El número mayor es: $numMayor";
    }
    else{
    	$numMenor=$a;
    	if($b<$numMenor){
    		$numMenor=$b;
    	}
    	if($c<$numMenor){
    		$numMenor=$c;
    	}
    	echo "El número menor es: $numMenor";
    }
}

$mayor=false;//true=buscar mayor; false= buscar menor

$a=2;
$b=1;
$c=3;

num($mayor,$a,$b,$c);

echo "<br>";
num(true,3,2,1);

echo "<br>";
num(false,2,5,5);


?>