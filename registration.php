<!DOCTYPE html>
<html lang="de">
<meta charset="utf-8">

<html> 
<head>
<title>JohannS - Registrieren</title> 

<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,900' rel='stylesheet' type='text/css'>

</head>


<body> 
<div id='anmeldefenster'>
<a href="registration.php"><h2>Registrieren</h2></a>

<form action="confirm.php" method="post">

	<table border="0" align="center">
  		<tr>
    		<td align="right"> Benutzername </td>
    		<td align="left"><input type="text" name="benutzername" size="12"></td>
  		</tr>
  		<tr>
    		<td align="right"> E-mail </td>
    		<td align="left"><input type="text" name="email" size="24"></td>
  		</tr>
  		<tr> 
    		<td align="right"> Passwort </td>
    		<td align="left"><input type="password" name="password" size="12"></td>
  		</tr>
  		<tr>
    		<td align="right"> Password wdh. </td>
    		<td align="left"><input type="password" name="password2" size="12"></td>
  		</tr>
  		<tr>
    		<td align="right"> <input type="submit" name="Submit" value="Registrieren"></td>
    		<td align="left"><a href="index.php">zurück zur Anmeldung</a></td>
  		</tr>
	</table>

  <!--<p> 
     Benutzername: <input type="text" name="benutzername" size="12">
  </p>
  <p> 
    E-mail: <input type="text" name="email" size="24">
  </p>
  <p> 
    Password: <input type="password" name="password" size="12">
  </p>
  <p> 
    Password wiederholen: <input type="password" name="password2" size="12">
  </p>
	
  <p> 
    <input type="submit" name="Submit" value="Registrieren">
  </p>-->
  
</form>
</div>

</body>

</html>