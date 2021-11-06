<html lang="it">
   <head>
        <meta charset="utf-8" />
        <title>RadioWave</title>
        <link rel="stylesheet" href="stile.css" type="text/css" media="screen" />
	   <!-- link per Google font -->
       <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
       <link rel="icon" href="img/radio-wave-logo-unito-min.png" type="image/png" />
    </head>
<body>
	<!-- nav-bar -->
	<header id="header">

			<div id="nav-container">

				<h1><a id="logo" href="check.php">Logo</a></h1><br><br><br>
        <section id="banner2"><br><br>
            <h3><form action='registra.php' method='POST' align='center'>
          		  	<h2><strong>Registrati</strong></h2>

          			      <input type='text' name='username' placeholder="   username"> <br><br>
          		        <input type='password' name='password' placeholder="   password">

          		<h6 style="color:orange;background-color:black;margin-top:20px;">
                  <?php session_start(); if(isset($_SESSION['esiste']) && $_SESSION['esiste']!="" ){
                     echo $_SESSION['esiste'];
                  $_SESSION['esiste']="";
                } ?>
             </h6>

                    <button type='submit' class='button'>Go</button>
                      </form></h3>



        </section>

</html>
