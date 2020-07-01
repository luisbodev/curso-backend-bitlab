<?php
	
	function multiplo($n1,$n2){
		$i=0;
		$resultado=0;
		while($resultado<=$n1){
			$i++;
			$resultado=$n2*$i;
		}
		echo $i*$n2;
	}

	$n1=22;
	$n2=7;

	multiplo($n1,$n2);

	echo "<br>";
	echo "<br>";
	multiplo(35,5);

	echo "<br>";
	echo "<br>";
	multiplo(50,10);