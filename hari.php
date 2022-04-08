<?php
	// Nur Afifah Husna
	// 1151900032
	// Tugas Praktikum Web - Modul 3 PHP
	
	//Program Switch Hari

	echo "Program menentukan hari berdasarkan case number (1-7)<br >";
	
	$nomor = 7;

	switch($nomor) :
		case 1 :
		echo "Hari Senin" . PHP_EOL;
		break;

		case 2 :
		echo "Hari Selasa" . PHP_EOL;
		break;

		case 3 :
		echo "Hari Rabu" . PHP_EOL;
		break;

		case 4 :
		echo "Hari Kamis" . PHP_EOL;
		break;

		case 5 :
		echo "Hari Jumat" . PHP_EOL;
		break;

		case 6 :
		echo "Hari Sabtu" . PHP_EOL;
		break;

		case 7 :
		echo "Hari Minggu" . PHP_EOL;
		break;
	endswitch;
?>