<?php

session_start();

include 'function.php';

$connessione=connessione();

$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM `utenti` WHERE `username`='$username' AND `password`='$password'";
$ris = mysqli_query($connessione,$query);

if(mysqli_num_rows($ris)>0){

          $riga=mysqli_fetch_assoc($ris);

          $_SESSION['username']=$username;

          if($riga['admin']== 1){
        	$_SESSION['admin']=1;
          }
          header('location:index.php');

} else {
	$_SESSION['errore']="Le credenziali sono errate, riprova!";
	header('location:accedi.php');
}

?>
