<?php
// importiamo funzioni
require ('function.php');
// Apriamo la sessione e cancelliamo le variabili memorizzate
session_start();
session_destroy();
// reinderizza gli utenti che hanno effettuato il logout
header('location:accedi.php');
?>
