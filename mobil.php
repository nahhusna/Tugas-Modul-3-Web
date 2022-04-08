<?php
	// Nur Afifah Husna
	// 1151900032
	// Tugas Praktikum Web - Modul 3 PHP
	
	//Program Array Mobil
	
	//$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
	//$mobil2 = array("Satu" => "Toyota", "Dua" => "Mitsubishi", "Tiga" => "Tesla", "Empat" => "Honda");
	
	//Menampilkan Numerik Array ($mobil1) menggunakan For-Loop dan While-Loop
	
	//For-loop
	function numfor(){
		echo "For-loop <br >";

		$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
		$mobil2 = array("Satu" => "Toyota", "Dua" => "Mitsubishi", "Tiga" => "Tesla", "Empat" => "Honda");

		$counter = 1; 
		for($i = 0; $counter <= 4; $i++){
			//echo "Mobil " . $counter . PHP_EOL;
			echo "Mobil {$counter} : {$mobil1[$i]} [{$i}]" . PHP_EOL;
			$counter++;
			echo "<br >";
		}
	}

	//While-loop
	function numwhile(){
		echo "<br > While-loop <br >";

		$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
		$mobil2 = array("Satu" => "Toyota", "Dua" => "Mitsubishi", "Tiga" => "Tesla", "Empat" => "Honda");

		$counter = 1; 
		$i = 0;
		while ($counter <= 4){
			//echo "Mobil " . $counter . PHP_EOL;
			echo "Mobil {$counter} : {$mobil1[$i]} [{$i}]" . PHP_EOL;
			$counter++;
			$i++;
			echo "<br >";
		}
	}

	//Menampilkan Associative Array ($mobil2) menggunakan Foreach-Loop

	//Foreach-loop
	function assforeach(){
		echo "<br > Foreach-loop <br >";

		$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
		$mobil2 = array("Satu" => "Toyota", "Dua" => "Mitsubishi", "Tiga" => "Tesla", "Empat" => "Honda");

		foreach($mobil2 as $key => $value){
			echo "$value : $key" . PHP_EOL;
			echo "<br >";
		}
	}

	//Menjalan function
	numfor();
	numwhile();
	assforeach();
?>