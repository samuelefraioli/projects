<?php
include 'function.php';
session_start();
	?>
<!DOCTYPE html>
		<html lang='it'>
		<head>
    <meta charset="utf-8">
    <meta name="author" content="Maijkena Isufaj">
    <link rel="stylesheet" href="style.css" type="text/css" >
		<div align="center">
    <img src="IMG/logo.png">
	</div><br>
    <title>TO-KNOW</title>
</head>
		<body>
		<form align="center" action='reg.php' method='POST'>
					<center>REGISTRATI ORA!!! </center><br><br>
					<input type='hidden' name='tipo' value='USER'>
					USERNAME: <input type='text' name='username'> <br><br>
					PASSWORD: <input type='password' name='password'> <br><br>
					<?php if(isset($_SESSION['errore'])){
					          echo $_SESSION['errore']. "<br><br>";
					          $_SESSION['errore']="";} ?>
					<input type='submit' value='Registra'>
				</form>
			</div>
			<?php
 footer();
?>
