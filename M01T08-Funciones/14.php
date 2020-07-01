<?php
	
	// La tabla de división, redondeada a 2 decimales, (del 1 al 10) de un número dado.

	function table($n){
		for($i=1;$i<=10;$i++){
			echo "$n x $i = ".number_format(($i*$n),2)."<br>";
		}
	}

	table(5.2543);

	echo "<br>";
	echo "<br>";
	table(2.3454);

	echo "<br>";
	echo "<br>";
	table(4.1234);
