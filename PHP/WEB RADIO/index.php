<!doctype html>
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

				<h1><a id="logo" href="index.html">Logo</a></h1>
				<nav id="nav">

					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="playlist.php"> Tutte le Playlist</a></li>
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
             <!--fine -->
		<section id="banner-home">
				<h1>Cavalca l'onda della sessione</h1>
			   <a href="http://stream12.top-ix.org/radiotorino" target="blank" class="button">Ascoltaci</a>
		</section>
					<header class="titolo-home">
						<h4>Oggi in onda</h4>
					</header>
					<!----inizio prima sezione palinsesto--->
			<div class="new-section">
        <?php
            // importiamo funzioni
            require ('function.php');
        // lanciamo la funzione mostra il pannello di controllo utente oppure che reinderizza utenti non loggati
        pannello_utente();
        ?>
			<div class="box-radio programma1">
		    	<a href="venticinque_anni_fa_oggi.html"> <img src="img/venticinque-anni-fa-oggi-radiounito.jpg" title="Venticinque anni fa oggi RadioWave Unito" alt="immagine programma di radiowave"/></a>
		    	<a href="venticinque_anni_fa_oggi.html"><h3>Venticinque anni fa oggi</h3></a>
		    	<p>Quali brani, avvenimenti, eventi rilevanti segnavano le cronache di 25 anni fa, lo spiega ogni martedì Davide Messineo, non perdetevelo.</p>
		    </div>

		    <div class="box-radio programma2">
		    	<a href="venticinque_anni_fa_oggi.html"><img src="img/radio-anche-noi-radio-unito-torino.jpg" title="Radio anche noi RadioWave Unito" alt="immagine programma di radiowave"/></a>
		    	<a href="venticinque_anni_fa_oggi.html"><h3>Radio con noi</h3></a>
		    	<p>La sincerità del titolo (omaggio ad uno storico talk di Radio RAI1) e la sincerità di trattare l’attualità con i nostri ospiti. Radio ora on noi. </p>
		    </div>

		    <div class="box-radio programma3">
		    	<a href="venticinque_anni_fa_oggi.html"><img src="img/school-bell-unito.jpg" title=" School bell RadioWave Unito" alt="immagine programma di radiowave"/></a>
		    	<a href="venticinque_anni_fa_oggi.html"><h3>La campanella</h3></a>
		    	<p>La campanella suona per voi, per fornire tutte quelle informazioni che riguardano la vita all’interno del Campus. La suoniamo noi, potete suonarla voi. </p>
		    </div>
						<a href="palinsesto.html" class="pulsante">Programmi della settimana</a>
			</div>
			<section id="banner2">
		</section>

				<!----inizio sezione box news--->

					<header class="titolo-home2">
				<h4>news</h4>
					</header>
			<section id="content">
			<div class="box-news ateneo">
		    	<a href="news_ateneo.html"><img src="img/ateneo-torino-unito.jpg" alt="immagine repertorio di notizie di torino"/></a>
		    	<a href="news_ateneo.html"><h3>news ateneo</h3></a>
		    	<p>Sezione dedicata a tutte le notizie riguardanti attività, iniziative, progetti e proposte riguardante l'Università di Torino e la vita degli studenti.</p>
		    </div>

		    <div class="box-news regione">
		    	<a href="news_piemonte.html"><img src="img/regione-piemonte-torino-immagine-unito.jpg" alt="immagine repertorio di notizie in piemonte"/></a>
		    	<a href="news_piemonte.html"><h3>news piemonte</h3></a>
		    	<p>Sezione dedicata a tutte le notizie riguardanti cronaca, attività ed iniziative culturali della città di Torino e del territorio piemontese.</p>
		    </div>

		    <div class="box-news capitale">
		    	<a href="news_nazionali.html"><img src="img/capitale-italia-unito-torino-italia.jpg" alt="immagine repertorio di notizie nazionali"/></a>
		    	<a href="news_nazionali.html"><h3>news nazionali</h3></a>
		    	<p>Sezione dedicata a tutte le notizie riguardanti cronaca, progetti, scambi studenteschi, attività ed iniziative culturali sull'intero territorio italiano.</p>
		    </div>
						<a href="news.html" class="pulsante2">Tutte le news</a>
	    </section>
			<section id="banner3">
		</section>
					<header class="titolo-home2">
						<h4>Eventi</h4>
					</header>

					<!----inizio sezione box eventi--->

					<div class="section-event">
			<div class="box-eve event1">
		    	<a href="evento.html"><img src="img/treno-storytelling-unito-torino.jpg" title="Storytelling interattivo all'Università di Torino" alt="evento storytelling università"/></a>
		    	<a href="evento.html"><h3>interactive storytelling</h3></a>
		    	<p>Gli incontri affrontano il tema dello storytelling interattivo presentando gli ultimi progetti dei Blast Theory, tra cui il documentario interattivo.</p>
		    </div>

		    <div class="box-eve event2">
		    	<a href="evento.html"><img src="img/ateneo-torino-unito-open-day.jpg" title="Open day ateneo Università Torino" alt="open day università di torino"/></a>
		    	<a href="evento.html"><h3>Benvenuti in ateneo</h3></a>
		    	<p>Nel corso dell'evento viene presentata l'offerta formativa dell'Ateneo. Gli incontri sono a ingresso libero senza prenotazione, non mancate.</p>
		    </div>

		    <div class="box-eve event3">
		    	<a href="evento.html"><img src="img/aula-unito-histoire-du-musique.jpg" title="Evento di musica francese" alt="evento di musica francese unito"/></a>
		    	<a href="evento.html"><h3>Histoire(s) du musique</h3></a>
		    	<p>Riproduzioni e incontri proposti dal Conservatorio di Torino in collaborazione con il DAMS dell'Università degli studi di Torino.</p>
		    </div>
<a href="eventi.html" class="pulsante3">Tutti gli eventi</a>
			</div>
<section id="banner-eventi2">
		</section>
		<footer id="footer">
    <p>
			©2020 <strong>Radio Wave</strong> <br>Designed by Andrea Paolino - Università degli studi di Torino
		</p>
		</footer>



</body>
</html>
