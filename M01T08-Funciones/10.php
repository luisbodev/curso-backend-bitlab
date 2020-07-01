<?php
	
	// Dado un arreglo, verificar si un elemento pertenece o no al arreglo. Si está, contar el
	// número de veces que está dentro del arreglo.

	function pertenece($array,$elemento){
		$contador=0;
		for($i=0;$i<sizeof($array);$i++){
			if($array[$i]==$elemento){
				$contador++;
			}
		}
		if($contador)
		echo "Cantidad de veces que \"$elemento\" esta dentro del arreglo ".$contador;
	}

	$array=[1,2,3,4,1,2,4,4,3,3];
	$elemento=1;

	pertenece($array,$elemento);

	echo "<br>";
	echo "<br>";
	pertenece($array,4);

	echo "<br>";
	echo "<br>";
	pertenece($array,2);
