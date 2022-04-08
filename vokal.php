<?php 
	// Nur Afifah Husna
	// 1151900032
	// Tugas Praktikum Web - Modul 3 PHP

	//Program Huruf Vokal

	echo "Program untuk mengecek huruf vokal atau bukan<br >";
	
	$huruf = "L";

	if ( ($huruf == "a") || ($huruf == "i") || ($huruf == "u") || ($huruf == "e") || ($huruf == "o") || ($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") || ($huruf == "O") ) {
		echo "Huruf {$huruf} adalah huruf Vokal." . PHP_EOL;
	}
	else{
		echo "Huruf {$huruf} adalah huruf Konsonan." . PHP_EOL;
	}

?>