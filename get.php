<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<?php

$eingang = htmlspecialchars($_GET["beitrag"]);
//echo $eingang;

//Verbindung mit Datenbank
$db = mysqli_connect("localhost", "php2", "1234", "CMS");

if (mysqli_connect_errno() == 0)
{
    $sql = 'SELECT `ID`, `beitragsname`, `kategorie`, `inhalt` FROM `contents` WHERE `ID` = '.$eingang;
    // Statement vorbereiten
    $ergebnis = $db->prepare( $sql );
    // an die DB schicken
    $ergebnis->execute();
    // Ergebnis an Variablen binden
    $ergebnis->bind_result( $ID, $beitragsname, $kategorie, $inhalt );
    // Ergebnisse ausgeben
    while ($ergebnis->fetch())
    {
        echo $ID. " ist zust&auml;ndig f&uuml;r " .$inhalt. "<br />";
        echo "Beitrag: ".$beitragsname." mit der ID: ".$ID." aus der Kategorie ".$kategorie." hat den Inhalt: ".$inhalt;
    }
}
else
{
    // Es konnte keine Datenbankverbindung aufgebaut werden
    echo 'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf: <span class="hinweis">' .mysqli_connect_errno(). ' : ' .mysqli_connect_error(). '</span>';
}
// Datenbankverbindung schliessen
$db->close();



?>
