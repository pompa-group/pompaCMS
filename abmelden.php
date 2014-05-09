<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
session_start();

if (empty($_SESSION["Username"])) {

	echo "<html>";
	echo "<head>";
	echo "<title>Erfolgreich Abgemeldet</title>";
	echo '<link rel="stylesheet" type="text/css" href="style.css">';
	echo '<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,200,900" rel="stylesheet" type="text/css">';
	echo '</head>';
	echo '<body>';
	echo '<div id="anmeldefenster">';
	echo '<h2>Sie sind bereits abgemeldet.</h2>';
	echo '<a href="anmelden.php">Um sich erneut anzumeldet, klicken sie bitte hier.</a>';
	echo '</div>';
	exit;
}

?>
<html>
<head>
	<title>Erfolgreich Abgemeldet</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>


</head>
<body>

<div id="anmeldefenster">

	<a href="index.php"><h2>Sie haben sich erfolgreich abgemeldet, <?php $_SESSION["Username"] ?> </h2></a>

<br />
<p>Bis bald!</p>


</div>


</body>
</html>

<?php
$_SESSION = array();
session_destroy();
?>
