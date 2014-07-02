<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
include ("info.php");
session_start();

if ($_SESSION["Login"] != "YES") {
	  header("Location: anmelden.php");
	}

?>

<html>
<head>
	<title> JohannS - Beitrag schreiben</title>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
        tinymce.init({selector:'textarea'});
	</script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>


</head>


<body>

<div id="contentbox">

<form action="eintragen.php" method="post">
	<table border="0">
		<tr>
			<td></td>
			<td align="left"><h2>Beitrag Schreiben</h2></td>

		</tr>
		<tr>
			<td><p class="write1">Name:</p></td>
			<td><p class="write"><input type="text" name="beitrag_name" size="12" class="write"></p></td>
		</tr>
		<tr>
			<td><p class="write1">Kategorie:</p></td>
			<td><p class="write"><input type="text" name="beitrag_kategorie" size="12" class="write"></p></td>
		</tr>
		<tr>
			<td><p class="write1"></p></td>
			<td>
			<div>
      			<label for="beitrag"></label>
         			<textarea id="beitrag_inhalt" name="beitrag_inhalt" cols="35" rows="10" class="write"></textarea>
      				<!--<input type="submit" value="Senden" >-->



   			</div>
   				<p class="write"><input type="submit" name="Speichern" value="Speichern" class="write"></p>
   			</td>

		</tr>
	</table>
	<br />


</form>


</div>





</body>
</html>
