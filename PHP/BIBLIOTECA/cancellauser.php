<?php
	session_start();
	include("function.php");
	$conn=conn();
	$a=$_POST["elimina"];
	$sql="DELETE FROM utenti WHERE username='$a'";
	$ris=mysqli_query($conn,$sql);
	if($ris) {
		header('location:admin.php');
	}
?>
