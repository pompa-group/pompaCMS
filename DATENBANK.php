<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
//SYNC
//Verbindung mit Datenbank
$db = mysqli_connect("localhost", "php2", "1234", "CMS");

if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());

}

//sql Anfrage erstellen
$abfrage = 'SELECT ID, beitragsname, kategorie, inhalt FROM contents';
$ergebnis = mysqli_query($db, $abfrage);


while($row = mysqli_fetch_object($ergebnis))
{
  $usr = "char".$row->ID;
  $nme = $row->beitragsname;
  $kat = $row->kategorie;
  $int = $row->inhalt;

  $$usr = $row->ID;
  $$nme = $row->beitragsname;
  $$kat = $row->kategorie;
  $$int = $row->inhalt;

  echo '<a href="get.php/?beitrag='.$row->ID.'">'.$row->ID.'</a>';
  echo $row->beitragsname;
  echo $row->kategorie;
  echo $row->inhalt;
  echo "<br />";

}
echo "<br />";
?>
