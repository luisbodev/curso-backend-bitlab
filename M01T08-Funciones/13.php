<?php
	
	// La tabla de multiplicación (del 1 al 10) de un número dado

	function table($n){
		for($i=1;$i<=10;$i++){
			echo "$n x $i = ".($i*$n)."<br>";
		}
	}

	table(5);

	echo "<br>";
	echo "<br>";
	table(4);

	echo "<br>";
	echo "<br>";
	table(10);