<?php
include "function.php";
$connessione=connessione();
session_start();


$user=$_POST["username"];
$psw=$_POST["password"];

$sql="SELECT * FROM utenti WHERE username='$user'";
$ris=mysqli_query($connessione,$sql);

if(isset($user) and isset($psw) and !empty($user) and !empty($psw) and mysqli_num_rows($ris)<1){

		$sql="INSERT INTO `utenti`(`username`, `password`, `admin`) VALUES ('$user','$psw','0')";
		$ris=mysqli_query($connessione,$sql);
		$_SESSION['username']=$user;
		header('Location:index.php');
	} else{
	 $_SESSION['esiste']="Hai inserito dati non corretti, oppure lo username esiste già. Riprova!";
	 header('location:registrati.php');
}
?>
