<?php
	
	// Dados dos listados (arreglos), buscar las parejas para cada elemento.

	function parejas($array1, $array2){
		for ($i=0; $i < sizeof($array1); $i++) {
			$coincide=1;
			for ($j=0; $j < sizeof($array2); $j++) { 
				if($array1[$i]==$array2[$j]){
					echo "Las posición $i del primer arreglo coincide con la posición $j del segundo arreglo <br>";
					$coincide=0;
				}
			}
			if($coincide){
				echo "Las posición $i del primer arreglo no coincide con ninguna del segundo <br>";
			}
		}
	}

	$array1 = ['a','e','i','o','u'];
	$array2 = ['u', 'a', 'i', 'o'];

	parejas($array1, $array2);


	echo "<br>";
	echo "<br>";

	$array1 = ['1','2','3','4','5'];
	$array2 = ['1', '6', '7', '1'];

	parejas($array1, $array2);

	echo "<br>";
	echo "<br>";

	$array1 = ['1','2','3','4','5'];
	$array2 = ['0', '6', '7'];

	parejas($array1, $array2);