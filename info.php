<?php

	$filename = 'config.txt';
//Prüfen ob Konfigurationen schon vorgenommen wurden
	if (file_exists($filename)) {
    echo "Die Datei $filename existiert";

		$ab_data = 'config.txt';
		$ab_inhalt	 = file($ab_data);


		$db_host = $ab_inhalt[0];
		$db_user = $ab_inhalt[1];
		$db_pass = $ab_inhalt[2];
		$db_data = $ab_inhalt[3];

		$db_host = (trim($db_host));
		$db_user = (trim($db_user));
		$db_pass = (trim($db_pass));
		$db_data = (trim($db_data));

		//Prüfen ob Datenbank vorhanden ist
		mysql_connect($db_host, $db_user, $db_pass) or die ("<H3>Datenbankserver nicht erreichbar</H3>");
		if (mysql_select_db($db_data)) {
			echo "Datenbank existiert.\n<br />";
			$db = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
			//sql Anfrage für Infos erstellen
			$informations = "SELECT infos, inhalt FROM informations";
			$informations_ergebnis = mysqli_query($db, $informations);

			while($row = mysqli_fetch_object($informations_ergebnis))
			{
				$infos = $row->infos;
				$$infos = $row->inhalt;
			}
		} else {
			echo "Datenbank existiert nicht.";
			header("Location: firstrun.php");
		}

	} else {
    echo "Die Datei $filename existiert nicht";
		header("Location: firstrun.php");
	}


?>
