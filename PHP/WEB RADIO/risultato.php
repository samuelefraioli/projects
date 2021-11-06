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
    <title>Risultato della ricerca</title>
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
						<li><a href="La_storia_di_radiowave.html">La storia di RadioWave</a></li>
						<li><a href="palinsesto.html">Palinsesto</a></li>
						<li><a href="playlist.html">Playlist</a></li>
						<li><a href="news.html">News</a></li>
						<li><a href="eventi.html">Eventi</a></li>
						<li><a href="parla_con_noi.html">Contattaci</a></li>
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
    <li class="active">SCEGLI PER GENERE</li>
    <li>HIP-HOP <BR><input type="checkbox" name="genere[]" value="hip-hop"></li>
    <li>JAZZ <BR><input type="checkbox" name="genere[]" value="jazz"></li>
    <li>TECHNO <BR><input type="checkbox" name="genere[]" value="techno"></li>
    <li>LATIN MUSIC <BR><input type="checkbox" name="genere[]" value="latin music"></li><br>
    <li><input type="submit" style="border:none; background:none; padding:0;font-weight:bold;margin-top:10px;color:white; font-size:15px;" Value="ASCOLTA"></li>
  </form>

</ul>
</aside>
<div class="grid-container-playlist">
                 <?php
                 // creiamo connessione
                 $connessione=connessione();

                 // controlliamo se è stata effettuata la ricerca per keyword
                 if (isset($_GET['cerca']) & $_GET['cerca']!=""){
                    $ricerca= $_GET['cerca'];
              // se è stata fatta, cerchiamo corrispondenze nel database
            $query = "SELECT link FROM `playlists` WHERE nome LIKE '%$ricerca%'";
            $ris = mysqli_query($connessione,$query);
            $_GET['cerca']="";

            // se c'è una o più corrispondenze le stampiamo
            if(mysqli_num_rows($ris)>0){

        while($riga=mysqli_fetch_assoc($ris)){

           echo "<div class='grid-item'><iframe src='$riga[link]' width='300' height='380' allow='encrypted-media'></iframe>
                 <br><br><a style='font-size:15px; color:black;' href='$riga[link]'> Maggiori informazioni </a></div>";

}
} else { // altrimenti restituiamo messaggio d'errore

  echo "<h3 style='color:black;'>Ci dispiace, ma non ci sono risultati per questa ricerca. Prova per genere!</h3>";

}

} else { header('location:index.php');
$_SESSION['feedback']="La ricerca non può essere vuota";
}
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
