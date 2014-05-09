<?php
include ("info.php");
	//error_reporting(E_ERROR | E_PARSE);

	//Strings bereinigen
	/*$db_host = (trim($db_host));
	$db_user = (trim($db_user));
	$db_pass = (trim($db_pass));
	$db_data = (trim($db_data));*/

function CheckDBExist($db){
    $query = "SHOW DATABASES";
    $_res = mysql_query($query);

    $databases=array();
    while($x = mysql_fetch_row($_res))
    {$databases[]=$x[0];    }

    return (array_search($db,$databases)!==false)?true:false;}


if (empty($_POST['db_host']) and (empty($_POST['db_user'])) and (empty($_POST['db_pass'])) and (empty($_POST['db_data']))) {

	$ab_data = 'config.txt';
	$ab_inhalt	 = file($ab_data);


	$db_host = $ab_inhalt[0];
	$db_user = $ab_inhalt[1];
	$db_pass = $ab_inhalt[2];
	$db_data = $ab_inhalt[3];

	echo '<form action="settings.php" method="post">

		<table border="0">
			<tr>
				<td align="right">Datenbank Host:</td>
				<td><input type="text" name="db_host" size="12" value="'.$db_host.'"></td>
			</tr>
			<tr>
				<td align="right">Datenbank User:</td>
				<td> <input type="text" name="db_user" size="12" value="'.$db_user.'"></td>
			</tr>
			<tr>
				<td align="right">Datenbank Passwort:</td>
				<td> <input type="password" name="db_pass" size="12" value="'.$db_pass.'"></td>
			</tr>
			<tr>
				<td align="right">Name der Datenbank</td>
				<td> <input type="text" name="db_data" size="12" value="'.$db_data.'"></td>
			</tr>
			<tr>
				<td align="right">Seitenname:</td>
				<td> <input type="text" size="12" name="sitename"></td>
			</tr>
			<tr>
				<td align="right">Autor:</td>
				<td> <input type="text" size="12" name="autor"></td>
			</tr>
		</table>
	<p>
		<input type="submit" name="Submit" value="Speichern">
	</p>
	</form>';


} else if (!empty($_POST['db_host']) and (!empty($_POST['db_user'])) and (!empty($_POST['db_pass'])) and (!empty($_POST['db_data']))) {
	echo "nichleer";
	$db_host = $_POST['db_host'];
	$db_user = $_POST['db_user'];
	$db_pass = $_POST['db_pass'];
	$db_data = $_POST['db_data'];
	$sitename = $_POST['sitename'];
	$autor = $_POST['autor'];

	$db_host = (trim($db_host));
	$db_user = (trim($db_user));
	$db_pass = (trim($db_pass));
	$db_data = (trim($db_data));
	$sitename = (trim($sitename));
	$autor = (trim($autor));

	//$db = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
	//$db = "CMS";

	//Datenbank erstellen, wenn nicht vorhanden

	mysql_connect($db_host, $db_user, $db_pass) or die ("<H3>Datenbankserver nicht erreichbar oder Anmeldedaten falsch.</H3>");



	$sql[0] = "INSERT INTO informations (infos, inhalt) VALUES ('sitename', '$sitename')";
	$sql[1] = "INSERT INTO informations (infos, inhalt) VALUES ('autor', '$autor')";

	foreach ($sql as $key => $value) {
	mysql_query($value);

	}
	mysql_close();
	$datei = fopen("config.txt","w+");
	$datei2 = "config.txt";

	echo "Es hat funktioniert!";





//EINTRAGEN


//--VORBEREITUNG


//--ÜBERGABE
	$schreiben = $db_host."\n".$db_user."\n".$db_pass."\n".$db_data;
	rewind($datei);
	fwrite($datei, $schreiben);
	fclose($datei);


} else {
	echo "FEHLER DU HONK";
}

/*//AUSLESEN

	$data = 'config.txt';
	$inhalt	 = file($data);

	echo "<br />";
	echo "<h4>Einzeln auslesen</h4>";
	echo $inhalt[0];
	echo "<br />";
	echo $inhalt[1];
	echo "<br />";
	echo $inhalt[2];
	echo "<br />";
	echo $inhalt[3];
	echo "<br />";
*/







?>
