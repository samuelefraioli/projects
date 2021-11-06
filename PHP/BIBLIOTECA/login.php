<?php
session_start();
include 'function.php';
$conn=conn();
head();
$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM `utenti` WHERE `username`='$username' AND `password`='$password'";
$ris = mysqli_query($conn,$query);

if(mysqli_num_rows($ris)>0){

$riga=mysqli_fetch_assoc($ris);

if($riga['tipo']== "ADMIN"){
	$_SESSION['admin']=1;
} else {
$_SESSION['admin']=0;
}
header('location:home.php');
footer();
} else {
	$_SESSION['errore']="L'account non esiste, riprova!";
	header('location:index.php');
}
?>
