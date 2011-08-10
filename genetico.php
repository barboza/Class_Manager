<?php
	
	include('openFile.php');

	$population = 200;

	$ages = 1000;

	$parents = 120;

	$mutants = 40;

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


/*

	for($x=0;$x<$ages,$x++) {
		$fitness = calFitness($chrom);

		sort($fitness);
		$fitness = array_slice($fitness,0,$parents);

		$sons = genSons($fitness,$chrom);

		$sons = change($sons,$mutants);

		$chrom = $sons+parents+$chrom;
	}
	$fitness = calFitness($chrom);
	sort $fitness;
	echo $fitness[0];


	}
*/

	echo '<pre>';
	print_r($class_array);
	echo '</pre>';


	//quanto menor melhor
	function calFitness($chrom){
		foreach($chrom as $key=>$value) {
			$fitness[$k] = calFitnessTeachers($value);
			$fitness[$k] += callFitnessWeekClasses($value);	
		}
	}

	function callFitnessWeekClasses($chrom) {
		$chrom = explode_array($chrom);
		for($x=0;$x<5;$x++) {
			$valor = getValor($chrom[$x]);
			if($valor < $maior || $maior != null)
				$maior = $valor;
			if($valor > $menor || $menor != null)
				$menor = $valor;	
		}
	}

	function getValor($chrom) {
		$valor = 0;
		foreach($chrom as $key => $value) {
			$valor += $class_array[$value][3]; 
		}
		return $valor;
	}


	function callFitnessWeekClasses($chrom) {
		$value = 0;

		$chrom = explode_array($chrom);
		foreach($chrom as $key=>$value) {
			$arr = gerTeachers($value);
			$uniqueArr = array_unique($arr);
			$value += $arr - $uniqueArr;
		}
		return $value;
	}	
