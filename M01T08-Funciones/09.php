<?php 
	
	// Una función que le dé formato de moneda a una cifra (lo opuesto del ejercicio anterior
	// pero manteniendo dos decimales)

	function convertir($cantidad){
		setlocale(LC_MONETARY, 'en_US.UTF-8');
		echo money_format('%.2n', $cantidad);
		// echo number_format($cantidad,2);
	}

	

	$cantidad=190;

	convertir($cantidad);

	echo "<br>";
	echo "<br>";
	convertir(200);

	echo "<br>";
	echo "<br>";
	convertir(30);
