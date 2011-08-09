<?php
	$file = fopen('turmas.csv','r');

	while($class_array[] = fgetcsv($file,1000,';'));

	fclose($file);
?>