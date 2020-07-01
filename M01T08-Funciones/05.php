<?php

	// Comprobar si un caracter está dentro de un arreglo de caracteres dado

	function caracter($character,$array){
		$bandera=0;
		for($i=0;$i<sizeof($array);$i++){
        	if($character==$array[$i]){
        		$bandera=1;
        	}
   		}
   		if($bandera){
   			echo "El caracter \"$character\" si esta en el arreglo de caracteres dados";
   		}
   		else{
   			echo "El caracter \"$character\" no esta en el arreglo de caracteres dados";
   		}
	}

	$character='c';

	$array=['b','c','d','a'];

	caracter($character,$array);

	echo "<br>";
	$character='f';
	caracter($character,$array);

	echo "<br>";
	$character='b';
	caracter($character,$array);