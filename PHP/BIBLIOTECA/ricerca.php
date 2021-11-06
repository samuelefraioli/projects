<?php
  session_start();
	include "function.php" ;
	$conn=conn();
 if(isset($_POST['searchbar'])){	$cerca=$_POST["searchbar"];
}
if(isset($_POST['cercavia'])){ $cercavia=$_POST["cercavia"];}
	head();
	echo'<body>';
	nav(3);
	if(isset($_POST['scelta'])){
		$scelta=$_POST['scelta'];
		$sql="SELECT * FROM biblioteca WHERE nome='$scelta'";
		$ris=mysqli_query($conn,$sql);
		while($riga=mysqli_fetch_assoc($ris)) {

		echo "<br><div><h1>	<strong>Biblioteca ". $riga['nome']. ".<strong></h1><p>La biblioteca ". $riga['nome']. " si trova in " .$riga['via']. " e ha i seguenti orari: 9:00-21:00.</p></div>";
		echo "<br><a href='ricerca.php'>Lista completa</a>";
	}
} else {
	echo'
    <div id="content">
      <div class="panel">
        <h2>Lista Biblioteche a Torino</h2> <br>
        <ul>';
		if (isset($cerca)) {
		$sql="SELECT * FROM `biblioteca` WHERE `nome` LIKE '%$cerca%'";
	 }elseif(isset($cercavia)){
    $sql="SELECT * FROM `biblioteca` WHERE via LIKE '%$cercavia%'";
	} else {
		$sql="SELECT * FROM `biblioteca` WHERE 1";
	}
		$ris=mysqli_query($conn,$sql);

		if(mysqli_num_rows($ris)>0){
		echo"<table id='ricerca' align='center'>
		<tr>
			<th>
				Nome
			</th>
			<th>
				Indirizzo
			</th>
			<th>
				Informazioni
			</th>
    </tr>";
    while($riga=mysqli_fetch_assoc($ris))
{
		$a=$riga["nome"];
		$b=$riga["via"];
        $id=$riga["ID"];
        echo"<tr><td>$a</td><td>$b</td><td><form align='center' method='post' action='ricerca.php'><input type='hidden' name='scelta' value='$a'><input type='submit' value='Maggiori informazioni'></form><tr>";

    if ($_SESSION['admin']==1){
			echo"<td>
				<form action='operazioni.php' method='POST'>
					<input type='hidden' name='elimina' value='$id'>
					<input type='submit' value='elimina'>
				</form>
			</td>".
			"<td>
				<form action='operazioni.php' method='POST'>
					<input type='hidden' name='modifica' value='$id'>
					<input type='submit' value='modifica'>
				</form>
			</td>";
		}
		echo"</tr>";
}

} else {
	  echo "<br> Non ci sono risultati pertinenti con la ricerca!";
}
    echo"</table>";
	if ($_SESSION['admin']==1){
	echo"<br> <CENTER> <form action='operazioni.php' method='POST'>
	<input type='hidden' name='aggiungi'>
	<input type='submit' value='aggiungi'>
</form></center>";
	}
}
