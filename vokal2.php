<?php
	// Nur Afifah Husna
	// 1151900032
	// Tugas Praktikum Web - Modul 3 PHP
	
	function hitunghuruf(){
		echo "Program Menentukan Huruf Vokal dan Konsonan pada sebuah teks<br >";

		$teks = "Informatika";

		//conversi teks ke array
		$converArray = str_split($teks);

		foreach ($converArray as $row) {
		 if(preg_match('/^[aiueo]/', $row[0]))
		  {
		   echo $row[0] ." = vokal <br >" ;
		  }
		  else
		  {
		  echo $row[0] ." = konsonan <br >";

		}
		}
		}

	function cekhuruf(){
		echo "<br > Program Cek Huruf Vokal atau Bukan<br >";
	
		$huruf = "a";

		if ( ($huruf == "a") || ($huruf == "i") || ($huruf == "u") || ($huruf == "e") || ($huruf == "o") || ($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") || ($huruf == "O") ) {
			echo "Huruf {$huruf} adalah huruf Vokal." . PHP_EOL;
		}
		else
		{
			echo "Huruf {$huruf} adalah huruf Konsonan. <br >" . PHP_EOL;
		}
	}

	//Menjalankan function
	hitunghuruf();
	cekhuruf();
?>