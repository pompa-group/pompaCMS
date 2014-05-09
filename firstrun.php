<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php
//include("info.php");


//Verbindung mit Datenbank





?>
<html>
<head>
<title>Startseite - <?php echo $sitename ?></title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="page">
<br />




<div id="middlebox">
<?php if (empty($_POST['db_host']) and (empty($_POST['db_user'])) and (empty($_POST['db_pass'])) and (empty($_POST['db_data'])) and (empty($_POST['sitename'])) and (empty($_POST['autor']))) {

?>
<form action="firstrun.php" method="post">

  <table border="0" align="center">
    <tr>
      <td><p>Datenbank Host</p></td>
      <td><input type="text" name="db_host" size="12"></td>
    </tr>
    <tr>
      <td><p>Datenbank Nutzer</p></td>
      <td><input type="text" name="db_user" size="12"></td>
    </tr>
    <tr>
      <td><p>Datenbank Passwort</p></td>
      <td><input type="password" name="db_pass" size="12"></td>
    </tr>
    <tr>
      <td><p>Datenbank Name</p></td>
      <td><input type="text" name="db_data" size="12"></td>
    </tr>
    <tr>
      <td><p>Name der Seite</p></td>
      <td><input type="text" name="sitename" size="12"></td>
    </tr>
    <tr>
      <td><p>Erstellen der Seite</p></td>
      <td><input type="text" name="autor" size="12"></td>
    </tr>
  </table>
  <input type="submit" name="erstellen" size="12" value="Abschließen">
<?php
} else if (!empty($_POST['db_host']) and (!empty($_POST['db_user'])) and (!empty($_POST['db_pass'])) and (!empty($_POST['db_data'])) and (!empty($_POST['sitename'])) and (!empty($_POST['autor']))) {

    $db_host = $_POST['db_host'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];
    $db_data = $_POST['db_data'];
    $sitename = $_POST['sitename'];
    $autor = $_POST['autor'];
    
    mysql_connect($db_host, $db_user, $db_pass) or die ("<H3>Datenbankserver nicht erreichbar</H3>");


    echo("creating database!\n");
    mysql_query("CREATE DATABASE '$db_data'");
    mysql_select_db($db_data);
    mysql_close();

  /*$sql[0] = "CREATE TABLE nutzer (username VARCHAR(50) NOT NULL, email VARCHAR(50),
  password VARCHAR(50))";
  $sql[1] = "CREATE TABLE contents (beitragsname VARCHAR(50) NOT NULL, id int, kategorie VARCHAR(50), inhalt text)";
  $sql[2] = "CREATE TABLE informations (infos VARCHAR(30) NOT NULL, inhalt text)";
  foreach ($sql as $key => $value) {
  mysql_query($value);
  }
  mysql_close();*/
} else {
  echo "<h2>Leider konnten wir ihre Anfrage nicht verarbeiten</h2>\n<br />\n<a href='firstrun.php'><p>Versuchen sie es bitte erneut.</p></a>";
}
?>
</div>
</div>


</body>
</html>



<?php

/*$sql[0] = "CREATE TABLE nutzer (username VARCHAR(50) NOT NULL, email VARCHAR(50),
password VARCHAR(50))";
$sql[1] = "CREATE TABLE contents (beitragsname VARCHAR(50) NOT NULL, id int, kategorie VARCHAR(50), inhalt text)";
$sql[2] = "CREATE TABLE informations (infos VARCHAR(30) NOT NULL, inhalt text)";
foreach ($sql as $key => $value) {
mysql_query($value);


//Die "informations" Tabelle bestücken ;-)
$sql[0] = 'INSERT INTO `'.$db_data.'`.`informations` (`infos`, `inhalt`) VALUES (`sitename`, `'.$sitename.'`);';
$sql[1] = 'INSERT INTO `sync`.`informations` (`infos`, `inhalt`) VALUES (`autor`, `'.$autor.'`);';
foreach ($sql as $key => $value) {
mysql_query($value);
mysql_close();
}*/
?>
