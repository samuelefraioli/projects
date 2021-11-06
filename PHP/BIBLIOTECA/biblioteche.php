<?php
	session_start();
	include'function.php';
	head();
	echo'<body>';
	nav(2);
	echo'
    <div id="content">
      <div>
        <img src="IMG/biblioteca.jpg" alt="Biblioteca del vaticano" id="img-biblioteca">
      </div>
      <div class="panel">
        <h2>Lista Biblioteche a Torino</h2> <br>
        <ul>
          <li><a href="schedaB1.html">Civica centrale</a></li>
          <li><a href="#">Musicale A. della corte</a></li>
          <li><a href="#">Rita atria</a></li>
          <li><a href="#">Dietrich Bonhoeffer</a></li>
          <li><a href="#">Italo Calvino </a></li>
          <li><a href="#">Luigi Carluccio</a></li>
          <li><a href="#">Cascina Marchesa</a></li>
          <li><a href="#">Francesco Cognasso</a></li>
          <li><a href="#">Alberto Geisser</a></li>
          <li><a href="#">Natalia Ginzburg</a></li>
          <li><a href="#">Primo Levi</a></li>
          <li><a href="#">Mausoleo della Bela Rosin</a></li>
          <li><a href="#">Don Lorenzo Milani</a></li>
          <li><a href="#">Mirafiori</a></li>
          <li><a href="#">Cesare Pavese</a></li>
        </ul>
      </div>
    </div>';
	footer();
	?>
