<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
include("info.php");


//Verbindung mit Datenbank



//sql Anfrage erstellen
$informations = "SELECT infos, inhalt FROM informations";
$informations_ergebnis = mysqli_query($db, $informations);

while($row = mysqli_fetch_object($informations_ergebnis))
{
  $infos = $row->infos;
  $$infos = $row->inhalt;
}

?>
<html>
<head>
<title>Startseite - <?php echo $sitename ?></title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="page">
<h1 class="titel"><?php echo $sitename ?> by <?php echo $autor ?></h1>
<br />



<?php
//SQL Anfrage
$abfrage = 'SELECT ID, beitragsname, kategorie, inhalt FROM contents';
$ergebnis = mysqli_query($db, $abfrage);


?>


<?php
//PRÜFEN OB $GET WERT VORHANDEN IST
if (!empty($_GET['beitrag'])) {

  $abfrage1 = 'SELECT ID, beitragsname, kategorie, inhalt FROM contents WHERE `ID` = '.htmlspecialchars($_GET["beitrag"]);
  $ergebnis1 = mysqli_query($db, $abfrage1);

  //aktuellen Beitrag abfragen
  while($row = mysqli_fetch_object($ergebnis1)) {

    $usr = "char".$row->ID;
    $nme = $row->beitragsname;
    $kat = $row->kategorie;
    $int = $row->inhalt;

    $$usr = $row->ID;
    $$nme = $row->beitragsname;
    $$kat = $row->kategorie;
    $$int = $row->inhalt;

  $aktuellerbeitrag = $row->inhalt;
  $aktuellername = $row->beitragsname;
  $aktuellekategorie = $row->kategorie;

  //echo $row->beitragsname;
  //echo $row->kategorie;
  //echo $row->inhalt;
  echo "<br />";

}

} else {
  $aktuellerbeitrag = "no beitrag";
  $aktuellername = "no name";
  $aktuellekategorie = "no kat";
}

?>

<!--GRUNDGERÜST PAGE-->

<div id="contentbox">
<table border="0" cellpadding="7%">

 <tr>
  <td width="7%" class="line"><div id="kasten_linie">
  <h2>Beiträge</h2>
  <?php while($row = mysqli_fetch_object($ergebnis))
{
  $usr = "char".$row->ID;
  $nme = $row->beitragsname;
  $kat = $row->kategorie;
  $int = $row->inhalt;

  $$usr = $row->ID;
  $$nme = $row->beitragsname;
  $$kat = $row->kategorie;
  $$int = $row->inhalt;

  echo '<a href="?beitrag='.$row->ID.'">'.$row->beitragsname.'</a>';
  //echo $row->beitragsname;
  //echo $row->kategorie;
  //echo $row->inhalt;
  echo "<br />";

} ?>
</div>
</td>
  <td class="inhalt">

  <?php
  if (!empty($aktuellerbeitrag)) {
    echo "<h2>".$aktuellername."</h2>";
    echo "<h5> Kategorie: ".$aktuellekategorie."</h5>";
    echo "<hr / color=\"grey\" size=\"1px\">";
    echo "<p>".$aktuellerbeitrag."</p>";
  } else {
    header("Location: index.php");
  }
  ?>

  </td>
  <!-- eigentliche Zelle -->
 </tr>
</table>

</div>
<a href="./signin.php" id="footer">ADMINISTRATOR</a>
</div>

<div id="footer">


</div>

</body>
</html>
