<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<html>
<head>
<title>JohannS - Registrierung</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>

<body>
<?php

include("info.php");
//echo $_POST['benutzername'];
$nutzername = $_POST['benutzername'];
$nutzeremail = $_POST['email'];
$nutzerpassword = $_POST['password'];




//Existenzabfrage des usernamens


//Abfrage des Inhaltes der Registrierung auf richtigkeit
if (!empty($_POST['benutzername'])) {

	$richtigemail = checkmail($_POST['email']);

	if ($richtigemail == 1) {

		if ($_POST['password'] == $_POST['password2']) {

			//IST DER NUTZER BIS HIERHIN GEKOMMEN, DANN WIRD SEIN KONTO ERSTELLT

			$abfrage1 = 'INSERT INTO nutzer (username, email, password) VALUES ("'.$nutzername.'", "'.$nutzeremail.'", "'.$nutzerpassword.'")';
			$ergebnis = mysqli_query($db, $abfrage1);
			echo "<div id=\"anmeldefenster\">\n";
			echo "<h2>Sie haben sich erfolgreich registriert</h2>\n";
			echo "<a href=\"anmelden.php\"><p>Melden sie sich nun an.</p></a>\n";
			echo '</div>';

		}
		else {

			echo "<div id=\"anmeldefenster\">\n";
			echo "<h2>Passwörter stimmen nicht überein</h2>\n";
			echo "<a href=\"registration.php\"><p>Versuchen sie es erneut.</p></a>\n";
			echo '</div>';


		}
	}
	else {

		echo "<div id=\"anmeldefenster\">\n";
		echo "<h2>Bitte geben sie eine gültige E-mailadresse ein.</h2>\n";
		echo "<a href=\"registration.php\"><p>Versuchen sie es erneut.</p></a>\n";
		echo '</div>';

	}

}
else {
	echo "<div id=\"anmeldefenster\">\n";

	echo "<h2>Ein Problem bei der Registrierung ist aufgetaucht...</h2>\n";
	echo "<br />\n";
	echo "<p>Geben sie einen korrekten Benutzernamen an.</p>\n";
	echo "<br />\n";
	echo "<a href=\"registration.php\">Registrieren</a>\n";
	echo '</div>';
}


//Funktion zum überprüfen der Mailadresse (schreibweise)
function checkmail($email){
  if(preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/',$email))
     { return 1; }
   else
     { return 0; }
}
?>


</html>
