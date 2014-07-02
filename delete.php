<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>JohannS - Beitrag Löschen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="contentbox">
<?php
include ("info.php");

//PRÜFEN OB POST BEFEHL VORHANDEN IST

if (!empty($_GET["delete"])) {

	$aktuell = $_GET["delete"];

} else {
	$aktuell = "leer";
}

if ($aktuell == "leer") {
	echo "<h2>Beitrag löschen</h2>";
	echo "<p>Klicken sie auf einen der Beiträge um diesen entgültig zu entfernen.</p>";
	echo "<hr />";
	echo "<br />";

	if (mysqli_connect_errno() == 0)
	{
    	$sql = 'SELECT `ID`, `beitragsname`, `kategorie`, `inhalt` FROM `contents`';
    	// Statement vorbereiten
    	$ergebnis = $db->prepare( $sql );
    	// an die DB schicken
    	$ergebnis->execute();
    	// Ergebnis an Variablen binden
    	$ergebnis->bind_result( $ID, $beitragsname, $kategorie, $inhalt );
    	// Ergebnisse ausgeben
    	while ($ergebnis->fetch())
    	{
    	    echo '<a href="?delete='.$ID.'">'.$ID.' - '.$beitragsname.'</a>';
    	    echo "<br />";
    	}
	}
	else
	{
  	  // Es konnte keine Datenbankverbindung aufgebaut werden
  	  echo 'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf: <span class="hinweis">' .mysqli_connect_errno(). ' : ' .mysqli_connect_error(). '</span>';
	}
	// Datenbankverbindung schliessen
	$db->close();

} else {
	$abfrage1 = "DELETE FROM contents WHERE ID = ".$aktuell;
	$ergebnis1 = mysqli_query($db, $abfrage1);
	echo "<br />";
	echo "<p>Der Beitrag mit der ID: ".$aktuell." wurde erfolgreich gelöscht!</p>";
	echo "<br />";
	echo '<a href="anmelden/signin.php">Backend</a>';
	echo "<br />";
	echo '<a href="index.php">Startseite</a>';

}




?>
</div>
</body>
</html>
