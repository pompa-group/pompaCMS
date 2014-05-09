<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
session_start();

if ($_SESSION["Login"] != "YES") {
	  header("Location: index.php");
	}

?>
<html> <head>
<title>JohannS - Geschützt</title> </head>
<body> 
<?php 

?>

<h1>Geschütztes Dokumtent</h1>

</body>
</html>

