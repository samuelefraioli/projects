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

				<h1><a id="logo" href="check.php">Logo</a></h1><br><br><br><br><br><br><br><br></br></br></br></br>
        <section id="banner-home"><br><br>
            <h3><form action='check.php' method='POST' align='center'><br>
          		  	<h2><strong>Accedi</strong></h2>
                  <br><br><br>
          			      <input type='text' name='username' placeholder="   username"> <br><br>
          		        <input type='password' name='password' placeholder="   password">


                        <?php session_start();
                        if(isset($_SESSION['errore'])&& $_SESSION['errore']!=""){
                          echo "<h5 style='color:orange;'>". $_SESSION['errore']. " o <a href='registrati.php' style='color:orange;'>Registrati</a><h5>";
                          $_SESSION['errore']="";
                        } else {
                        echo "<h5>Se non hai un'account <a href='registrati.php'>Registrati</a></h5>";
                        } ?>


                      <button type='submit' class='button'>Login</button>
                      </form></h3>



        </section>

</html>
