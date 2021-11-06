<?php
// importiamo file function
require ('function.php');


 // controlliamo se utente loggato, altrimenti si reinderizza
		if(!isset($_SESSION['admin'])){
          header('location:index.php');
    }

require('function.php');
$connessione=connessione();

// aggiungi playlist
if(isset($_POST['aggiungi'])){
$nome=$_POST['nome'];
$link=$_POST['link'];
$genere=$_POST['genere'];
$controllo= "SELECT link from playlists WHERE link='$link'";
$esiste=mysqli_query($connessione,$controllo);

if(mysqli_num_rows($esiste)>0){
  $_SESSION['feedback']="Attenzione: la playlist esiste già!";
} else {

$sql= "INSERT INTO playlists (nome,link,genere) VALUES ('$nome','$link','$genere')";
$ris=mysqli_query($connessione,$sql);
$_SESSION['feedback']="La playlist è stata aggiunta!";

}

// elimina playlist
} elseif (isset($_POST['rimuovi'])){

  $link=$_POST['rimuovi'];
  $sql= "DELETE FROM playlists WHERE link='$link'";
  $ris=mysqli_query($connessione,$sql);
  $_SESSION['feedback']="La playlist è stata eliminata!";
}

header('location:index.php');

?>
