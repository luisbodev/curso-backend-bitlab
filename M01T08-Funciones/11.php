<?php
	
	//  Dado un arreglo, permitir al usuario imprimir los N elementos en posición par o impar
	
	function imprimir($array,$n,$type){
		$contador=1;
			if($type=='par'){
				echo "Numeros en posición par: ";
				for ($i=0; $i < sizeof($array); $i++) { 
					if($i%2==0 && $contador<=$n){
						echo $array[$i]." ";
						$contador++;
					}
				}
			}
			if($type=='impar'){
				echo "Numeros en posición impar: ";
				for ($i=0; $i < sizeof($array); $i++) { 
					if($i%2!=0 && $contador<=$n){
						echo $array[$i]." ";
						$contador++;
					}
				}
			}	
		
	}


	$array=[1,2,3,4,5];
	$n=1;
	$type='par';

	imprimir($array,$n,$type);

	echo "<br>";
	echo "<br>";
	$n=4;
	$type='impar';
	imprimir($array,$n,$type);

	echo "<br>";
	echo "<br>";
	$n=3;
	$type='par';
	imprimir($array,$n,$type);


