<?php


for ($tafel = 1; $tafel <= 10; $tafel++) {
	for ($getal = 1; $getal <= 10; $getal++) {
    	$uitkomst = $getal * $tafel;

    	echo "De uitkomst van " . $getal . " x " . $tafel . " = " .$uitkomst . "<br>";
	}
}