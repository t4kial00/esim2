<?php
	$palvelin="mysql:host=localhost; dbname=esim2";
	try {
		$db=new PDO($palvelin, "phpuser", "phppass");
		#echo "Yhteys OK";
		
	} catch (Exception $e) {
		echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitäjään.";
	}
return testi;

?>