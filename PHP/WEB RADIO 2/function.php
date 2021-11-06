<?php

session_start();
// Creazione connessione al database "radio"
	function connessione(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="radio";
	$connessione = mysqli_connect($servername, $username,$password,$dbname);
	if (!$connessione) {
		die("Connessione fallita");
	}
	return $connessione;
	}

// Funzione riconoscimento admin
	function pannello_utente(){
// Controllo se l'utente è loggato
		if(isset($_SESSION['username'])){

			// benvenuto
			echo "<p style='color:black;font-family:oswald;font-size:18px;'>Benvenuto " .$_SESSION['username']."</p>";
			// solo per admin: se sono presenti dei feedback di aggiunta o eliminazione, li stampa.
			if(isset($_SESSION['feedback'])){
				echo "<p style='color:orange;font-family:oswald;'>".$_SESSION['feedback']. "</p>";
				$_SESSION['feedback']="";
			}

       // Mostra pannello admin a chi amministra il sito
		   if(isset($_SESSION['admin'])){

       echo "<form action='admin.php' method='post'>
			       <p style='color:black;font-family:oswald;'>Aggiungi una playlist:</p><input type='text' name='nome' placeholder='nome'><input type='url' name='link' placeholder='link'>
						 <select name='genere'><option selected='true'disabled='disabled'>Genere</option><option name='genere' value='hip-hop'>Hip-hop</option><option name='genere' value='jazz'>Jazz</option>
						 <option name='genere' value='techno'>Techno</option><option name='genere' value='latin-music'>Latin music</option></select>
		      	 <input type='hidden' name='aggiungi'>
			       <input type='submit' style='font-family:oswald;' value='Aggiungi playlist'></form><br><br>";

			// Recuperiamo dal database la lista delle playlists
			$connessione=connessione();
		  $ris=mysqli_query($connessione,"SELECT * FROM playlists");

			echo "<form action='admin.php' method='post'>";
			echo "<select name='rimuovi'>";

			while($lista=mysqli_fetch_assoc($ris)){
      // le stampiamo in una select
      echo "<option name='rimuovi' value='";
			echo $lista['link'];
			echo "'>";
			echo $lista['nome'];
			echo "</option>";

		}
		  echo  "</select>";
			echo	"<input type='submit' style='font-family:oswald;' value='Rimuovi playlist'></form><br><br>";


}
       // Altrimenti mostra soltanto pannello utente

       echo "<div style='float:left;display:block;'><form action='risultato.php' method='get'>
             <label for='cerca' style='color:black;font-family:oswald;'>Cerca per parola chiave</label><br><br>
             <input type='search' name='cerca' placeholder='inserisci parola chiave'>
             <input type='submit' value='Cerca playlist'><br>
             </form><div>";

	} else {

		// Se l'utente non è loggato reinderizziamo alla pagina di Login
		header('location:accedi.php');
	}
	
}
