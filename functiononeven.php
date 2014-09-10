<?php


	function isEven($getal){
		if($getal%2>0){

			echo "Het getal ". $getal ." is oneven. <br>";
		}

		else{
			echo "Het getal ". $getal ." is even.<br>";
		}
	}

	for ($i=0; $i <=100 ; $i++) {
		isEven($i);

	}

 



?>