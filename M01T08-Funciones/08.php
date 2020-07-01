<?php
	
	// Una función que “limpie” un precio y lo convierta a un float; por ejemplo: $199 se
	// convertiría a 199.00.
	
	function convertir($cantidad){
		echo number_format($cantidad,2);
	}

	

	$cantidad=190;

	convertir($cantidad);

	echo "<br>";
	echo "<br>";
	convertir(100);

	echo "<br>";
	echo "<br>";
	convertir(50);
