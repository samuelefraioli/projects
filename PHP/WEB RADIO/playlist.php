<!doctype html>
<?php
// importiamo file function
require ('function.php');

 // controlliamo se utente loggato, altrimenti si reinderizza
		if(!isset($_SESSION['username'])){
          header('location:accedi.php');
    }

?>
<html lang="it">
<head>
    <meta charset="utf-8" />
    <title>Playlist</title>
    <link rel="stylesheet" href="stile.css" type="text/css" media="screen" />
    <!-- link per Google font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link rel="icon" href="img/radio-wave-logo-unito-min.png" type="image/png" />
</head>
<body>

	<header id="header">

		<div id="nav-container">

				<h1><a id="logo" href="index.html">Logo</a></h1>

				<nav id="nav">

					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="playlist.html">Tutte le Playlist</a></li>
						<li><a href="parla_con_noi.html">Contattaci</a></li>
            <li><a href="logout.php">Logout</a></li>
					</ul>

				</nav>

			</div>

			<div id="social">

                 <a id="fb" href="https://www.facebook.com" target="blank" title="Seguici su Facebook"></a>
				 <a id="tw" href="https://www.twitter.com" target="blank" title="Seguici su Twitter"></a>

					<div id="cta">
						<a id="ascolta-la-radio" href="http://stream12.top-ix.org/radiotorino" target="blank" title="Ascolta RadioWave in streaming"></a>
			        </div>
		 </div>
	</header>

	    <section id="banner-playlist">
				<h1>Ascoltaci sempre dove vuoi</h1>
			   <a href="playlist.php" target="blank" class="button-sp">Tutte le playlist</a>
		</section>
					<header class="titolo-playlist">
						<h4>Playlist - ultimi aggiunti</h4>
					</header>
<aside>
 <ul id="menu-secondario">

 <form method="get" action="playlist.php">
    <li class="active">SCEGLI IL GENERE</li>
    <li>HIP-HOP <BR><input type="checkbox" name="genere[]" value="hip-hop"></li>
    <li>JAZZ <BR><input type="checkbox" name="genere[]" value="jazz"></li>
    <li>TECHNO <BR><input type="checkbox" name="genere[]" value="techno"></li>
    <li>LATIN MUSIC <BR><input type="checkbox" name="genere[]" value="latin-music"></li><br>
    <li><input type="submit" style="border:none; background:none; padding:0;font-weight:bold;margin-top:10px;color:white; font-size:15px;" Value="ASCOLTA"></li>
  </form>

</ul>
</aside>
<div class="grid-container-playlist">
                 <?php
                 // creiamo connessione
                 $connessione=connessione();

                 // controlliamo se è stata effettuata la ricerca per genere
                 if (isset($_GET['genere'])){
                    $generi= $_GET['genere'];
                   // nel caso, recuperiamo dati dal form
            if(!$generi){
            // In caso non abbiano cliccato su nessuna checkbox (e quindi non abbiano scelto nessun genere):
                    echo "<h2>Bisogna selezionare almeno un genere</h2>";
           } else {
            // Altrimenti stampiamo le playlist corrispondeti, recuperando i link dal database con una query
            // dato che la checkbox restituisce un array, cicliamo sull'array di generi
          for($i = 0; $i < count($generi); $i++) {
            $query = "SELECT link FROM `playlists` WHERE `genere`='$generi[$i]'";
            $ris = mysqli_query($connessione,$query);


            if(mysqli_num_rows($ris)>0){
              while($riga=mysqli_fetch_assoc($ris)){
            echo "<div class='grid-item'><iframe src='$riga[link]' width='300' height='380' allow='encrypted-media'></iframe>
                  <br><br><a style='font-size:15px; color:black;' href='$riga[link]'> Maggiori informazioni </a></div>";
                }
          }
    }

  }

 // Se invece non è stata fatta la ricerca per generi stampiamo tutta la lista delle playlist disponibili
} else {
  $query = "SELECT link FROM `playlists` WHERE 1";
  $ris = mysqli_query($connessione,$query);

while ($riga=mysqli_fetch_assoc($ris)){

 echo "<div class='grid-item'><iframe src='$riga[link]' width='300' height='380' allow='encrypted-media'></iframe></div>";
}
}
  $_GET['genere']=null;
?>
</div>
<section id="banner-playlist2">
</section>
		<footer id="footer">
    <p>


			©2020 <strong>Radio Wave</strong> <br>Designed by Andrea Paolino - Università degli studi di Torino
		</p>
		</footer>



</body>
</html>
