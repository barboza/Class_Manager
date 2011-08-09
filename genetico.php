<?php
	
	include('openFile.php');

	$population = 200;

	$gens = array();

	$fitness = array();

	for($x=1;$x<140;$x++) {
		$gens[] = $x;
	}
	for($x=0;$x<4;$x++) {
		$gens[] = '#';
	}

	for($x=0;$x<$population;$x++){

		$chrom[$x] = $gens;
		shuffle($chrom[$x]);
	}





	echo '<pre>';
	print_r($chrom);
	echo '</pre>';