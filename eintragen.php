<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<html>
<head>
<title>JohannS - Beitrag gespeichert</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>


<body>
<div id="middlebox">
<?php
include ("info.php");

if (empty($_POST['beitrag_name'])) {
	echo "<p>Beitrag konnte nicht gespeichert werden.</p>";
	exit;
}


$eingang_name = $_POST['beitrag_name'];


$eingang_kategorie = $_POST['beitrag_kategorie'];
$eingang_inhalt = $_POST['beitrag_inhalt'];





/*echo $eingang_name;
echo "<br />";
echo $eingang_kategorie;
echo "<br />";
echo $eingang_inhalt;*/

//$abfrage = 'INSERT INTO `contents` (`beitragsname`, `ID`, `kategorie`, `inhalt`) VALUES (`'.$eingang_name.'`, `NULL`, `'.$eingang_kategorie.'`, `'.$eingang_inhalt.'`)';
$abfrage = "INSERT INTO contents (beitragsname, ID, kategorie, inhalt) VALUES ('$eingang_name', NULL, '$eingang_kategorie', '$eingang_inhalt')";
/*echo $abfrage;*/
$eintragen = mysqli_query($db, $abfrage);

echo "<h2>Beitrag erfolgreich gespeichert</h2>";
echo "<br />";
echo "<a href=index.php><p>Startseite</p></a>";

?>
</div>
</body>

</html>
