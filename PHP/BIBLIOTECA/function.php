<?php
	function conn(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="biblioteca";
	$connessione = mysqli_connect($servername, $username,$password,$dbname);
	if (!$connessione) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $connessione;
	}

	function head(){
		   if(isset($_SESSION['admin'])){
       echo'<head>
    <meta charset="utf-8">
    <meta name="author" content="Maijkena Isufaj">
    <link rel="stylesheet" href="style.css" type="text/css" >
    <link rel="icon" href="IMG/logo.png">
    <title>TO-KNOW</title>
	</head>';
} else { header('location:index.php');}
	}
	function nav($num){
		$home="";
		$biblio="";
		$aule="";
		switch ($num) {
			case '1':
				$home="active";
				break;
			case '2':
			 $biblio="active";
			 break;
			default:
			  $aule="active";
       break;

		}
	echo "<header>
      <h1><span class='rosso'>TO</span>-<span class='blu'>KN</span><span class='giallo'>OW</span></h1>
    </header>

    <nav>
      <a href='home.php' class=".$home.">Home</a>
      <a href='biblioteche.php' class=".$biblio.">Biblioteche</a>
      <a href='aulestudio.php' class=".$aule.">Aule Studio</a>";
			echo "<a href='logout.php' style='float:right'>Logout</a>";
			if ($_SESSION ['admin']===1) {
				 echo "<a href='admin.php' style='float:right'> <strong> Admin </strong> </a>";
			}
		  echo'</nav>';
	}
	function right_column(){
		echo"<div id='rightcolumn'>
        <div class='panel'>
          <h2><a href='info.html' class='giallo'>Info</a></h2> <br>
          <p>Vieni a scoprire l'idea di questo sito e i servizi che offre!</p>
        </div>
        <div class='panel'>
          <h2>Cerca aule studio</h2> <br>
          <form class='search' action='ricerca.php' method='post'>
            <input type='search' name='searchbar' placeholder='Cerca per nome'>
            <input type='submit' name='Pulsante ricerca' value='Ricerca'> <br>
          </form>
					<form class='search' action='ricerca.php' method='post'>
	        	<input type='search' name='cercavia' placeholder='Cerca per indirizzo'>
						<input type='submit' name='Pulsante ricerca' value='Ricerca'> <br>
					</form>
        </div>
        <div class='panel'>
          <h3>Seguici su</h3> <br>
          <div>
            <a href='https://www.facebook.com/' target='_blank'> <img src='IMG/fb.png' alt='logo facebook' title='Facebook' style='height:50px;' ></a>
            <a href='https://twitter.com/' target='_blank'> <img src='IMG/twitter.png' alt='logo twitter' title='Twitter' ></a>
            <a href='https://www.instagram.com/' target='_blank'> <img src='IMG/instagram.png' alt='logo instagram' title='Instagram' ></a>
          </div>
        </div><br>
      </div>";
	}

	function footer(){
	   echo' <footer>
      <dl>
         <dt>Creato da:</dt>
         <dd>
          <address class="mail ">
           <p><a href="mailto:maijkenaisufaj@gmail.com" title="Mail">Maijkena Isufaj</a> </p> <br>
          </address>
        </dd>
      </dl>
     <p><span class="copyright">&copy; 2021 M.I.</span></p> <br>
    </footer>
  </body>

</html>';
}
