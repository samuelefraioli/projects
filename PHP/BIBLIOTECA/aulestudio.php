<?php
  session_start();
  include "function.php";
	head();
	echo'<body>';
	nav(3);
	echo'
    <div class="content">
	  <div>
	   <img src="IMG/(home)studio.jpg"  alt="aulastudio" id="aulastudio"> </img>
	  </div>
	  <div class="panel">
	    <h2> Lista aule studio a Torino </h2> <br>
		<ul>
		<li><a href="schedaA1.html">Opera</a></li>
          <li><a href="#">Aule studio Palazzo Nuovo</a></li>
          <li><a href="#">Aule studio Architettura, farmacia e scienze</a></li>
          <li><a href="#">Verdi</a></li>
          <li><a href="#">POlitecnico di Torino</a></li>
          <li><a href="#">Università degli Studi di Torino</a></li>
        </ul>
      </div>
    </div>


    </div>';

		echo'
	    <div id="content">
	      <div class="panel">
	        <h2>Lista Biblioteche a Torino</h2> <br>
	        <ul>';
					$conn=conn();
		  $sql="SELECT * FROM `biblioteca` WHERE 1";
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


footer();
?>
