<?php
include 'function.php';
session_start();
 echo'<head>
 <meta charset="utf-8">
 <meta name="author" content="Maijkena Isufaj">
 <link rel="stylesheet" href="style.css" type="text/css" >
 <link rel="icon" href="IMG/logo.png">
 <title>TO-KNOW</title>
 </head>';

	echo"<body>";
	echo"<form action='login.php' method='POST' align='center'>
	     <br>
			<CENTER>BENVENUTO NELLA PAGINA DI LOGIN DEL SITO</CENTER><br><br>
			USERNAME: <input type='text' name='username'> <br><br>
			PASSWORD: <input type='password' name='password'> <br><br>";
			if(isset($_SESSION['errore'])){ echo $_SESSION['errore']."<br><br>";}
			echo "<input type='submit' value='Login'><br><br>
		</form><br>
		<form action='regform.php' method='POST'>
			<center>SE NON SEI REGISTRATO UNISCITI A NOI<br>
			<input type='submit' value='Registra'></center>
		</form>";
	footer();
	echo" </body>
		</html>";
?>
