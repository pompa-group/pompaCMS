<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<html>
<head>
<title>JohannS - Anmelden</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>
<body>

<div id='anmeldefenster'>
<a href="https://www.johann-schilling.com"><h1>JohannS</h1></a>


  <form action="signin.php" method="post">

        <table border="0" align="center">
          <tr>
             <td align="right"> Benutzername</td>
             <td><input type="text" name="benutzername" size="12"></td>
         </tr>
          <tr>
              <td align="right"> Passwort</td>
              <td> <input type="password" name="password" size="12"></td>
        </tr>
      </table>
   <p>
     <input type="submit" name="Submit" value="Anmelden">
     <input type="reset" name="Reset" value="leeren">
     <input type="hidden" name="gesendet" value="1">
   </p>
   <a href="registration.php">Registrieren</a>
</form>
</div>
</body>
</html>
