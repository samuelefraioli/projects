<?php
include "function.php";
$conn=conn();
session_start();
$tipo=$_POST["tipo"];
$user=$_POST["username"];
$psw=$_POST["password"];
$sql="SELECT * FROM utenti WHERE username='$user'";
$ris=mysqli_query($conn,$sql);

if(isset($user) and isset($psw) and !empty($user) and !empty($psw) and mysqli_num_rows($ris)<1){

		$sql="INSERT INTO utenti (username,password,tipo) VALUES('$user','$psw','USER')";
		$_SESSION['admin']=0;
		$ris=mysqli_query($conn,$sql);
		header('Location:home.php');
	} else{
	 $_SESSION['errore']="Problema nella registrazione, riprova!";
	 header('location:regform.php');
}
?>
