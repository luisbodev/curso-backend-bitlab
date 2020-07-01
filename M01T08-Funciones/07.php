<?php 
	
	function randomNumber($array,$n){
		echo "Números aleatorios: ";
		for($i=1;$i<=$n;$i++){
			echo $array[rand(0,(sizeof($array)-1))]." ";	
		}

		
	}

	$array=[1,2,3,4,5];

	$n=10;

	randomNumber($array,$n);

	echo "<br>";
	echo "<br>";
	randomNumber($array,5);

	echo "<br>";
	echo "<br>";
	randomNumber($array,2);