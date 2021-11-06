<!DOCTYPE html>
<?php
	session_start();
	include"function.php";
	head();
	echo"<body>";
	nav(1);
	echo"
    <div id='content'>

      <div id='leftcolumn'>
        <div class='panel'>
          <h2><a href='biblioteche.php' class='rosso'>Biblioteche</a></h2> <br>
          <img src='IMG/biblioteca.jpg' alt='Immagine biblioteca' style='height:200px;'>
          <p>A Torino sono presenti ottime biblioteche dove poter consultare vaste collezioni di libri, attraverso il menu potete accedere alla sezione dedicata.</p>
        </div>
        <div class='panel'>
          <h2><a href='aulestudio.php' class='blu'>Aule Studio</a></h2> <br>
          <img src='IMG/(home)studio.jpg' alt='Immagine ragazzo con testa sui libri' style='height:200px;'>
          <p>A Torino sono presenti numerose aule studio dove poter concetrarsi e ripassare in tranquillità, visitando la sezione dedicata sarà possibile accedere alla lista completa delle aule.</p>
        </div>
      </div>";
		right_column();

    footer();
?>
