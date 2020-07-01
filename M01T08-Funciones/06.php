<?php
	
	// Contar los caracteres en minúsculas y los caracteres en mayúsculas de un string dado

	function characters($string){
		$array=str_split($string);

		$upperCase=0;
		$lowerCase=0;
		for($i=0;$i<sizeof($array);$i++){
			if(ctype_upper($array[$i])){
				$upperCase++;
			}
			if(ctype_lower($array[$i])){
				$lowerCase++;
			}
		}
		echo "String a identificar: $string";
		echo "<br>";
		echo "Cantidad de letras mayúsculas: $upperCase";
		echo "<br>"; 
		echo "Cantidad de letras minúsculas: $lowerCase"; 
	}

	$string="Hello";

	characters($string);

	echo "<br>";
	echo "<br>";
	characters('LuisManuel');

	echo "<br>";
	echo "<br>";
	characters('COMPUTER');