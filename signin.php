<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<html>
<head>
	<title> JohannS - Anmeldung</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>


<body>

<?php
include ("info.php");

//sql Anfrage erstellen
$abfrage = "SELECT username, email, password FROM nutzer";
$ergebnis = mysqli_query($db, $abfrage);

while($row = mysqli_fetch_object($ergebnis))
{
  $nutzer = $row->username;
  $$nutzer = $row->password;
}

if (!empty($_POST['benutzername'])) {

	$namedb = $_POST['benutzername'];


	if ($_POST['password'] == $$namedb) {

		echo "<div id=\"middlebox\">\n";
		echo "<h2>Herzlich willkommen, ".$_POST['benutzername']."</h2>\n";
		echo "<h5>Frontend</h5>";
		echo "<hr class=\"signin\">";
		echo "<a href=\"index.php\"><p>Startseite.</p></a>\n";
		echo "<h5>Adminbereich</h5>";
		echo "<hr class=\"signin\">";
		echo "<a href=\"write.php\"><p>Beitrag schreiben</p></a>\n";
		echo "<a href=\"delete.php\"><p>Beitrag löschen</p></a>\n";
		echo "<hr class=\"signin2\">";
		echo "<a href=\"abmelden.php\"><p>Abmelden.</p></a>\n";
		echo '</div>';

		session_start();
		$_SESSION["Login"] = "YES";
		$_SESSION["Username"] = $namedb;
	}
	else {
		echo "<div id=\"anmeldefenster\">\n";


		echo "<p>Falsches Passwort - Bitte melden sie sich erneut an.</p>";
		echo "<br />";
		echo '<a href="anmelden.php">Anmelden</a>';

		echo '</div>';

		session_start();
	 	 $_SESSION["Login"] = "NO";
	}




}
else {
	echo "<div id=\"middlebox\">\n";
		echo "<h2>Backend</h2>\n";
		echo "<h5>Frontend</h5>";
		echo "<hr class=\"signin\">";
		echo "<a href=\"index.php\"><p>Startseite.</p></a>\n";
		echo "<h5>Adminbereich</h5>";
		echo "<hr class=\"signin\">";
		echo "<a href=\"write.php\"><p>Beitrag schreiben</p></a>\n";
		echo "<a href=\"delete.php\"><p>Beitrag löschen</p></a>\n";
		echo "<hr class=\"signin2\">";
		echo "<a href=\"abmelden.php\"><p>Abmelden.</p></a>\n";
		echo '</div>';


}

?>





</body>
</html>
