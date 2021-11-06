<?php
include("function.php");
$conn=conn();
session_start();
head();
nav(2);

echo "<body>";

if(isset($_POST['aggiungi'])){
    ?>
    <br><br><br><h3 align="center"> Aggiungi un'aula studio</h3><br>
    <form align='center' action='operazioni.php' method='POST'>
		Nome <br> <input type='text' name='nome' ><br>
		Via <br> <input type='text' name='via'><br><br>
		<input type='submit' value='Inserisci'>
    <input type='hidden' name='aggiunta'>
  </form>

<?php } elseif(isset($_POST['aggiunta'])){

   $nome=$_POST['nome'];
   $via=$_POST['via'];
   $controllo= "SELECT via from biblioteca WHERE via='$via'";
   $esiste=mysqli_query($conn,$controllo);

   if(mysqli_num_rows($esiste)>0){
     echo "<br> <p align='center'> Attenzione: l'aula esiste già!</p>";
   } else {

   $sql= "INSERT INTO biblioteca (nome,via) VALUES ('$nome','$via')";
   $ris=mysqli_query($conn,$sql);
   echo "<br> <h4 align='center'> L'aula è stata aggiunta correttamente!</h4>";
}

} elseif(isset($_POST['modifica'])){

       $id=$_POST['modifica'];
       $sql="SELECT * FROM biblioteca WHERE ID='$id'";
       $ris=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($ris)){
         $nome=$row['nome'];
         $via=$row['via'];
         echo "<form method='post' action='operazioni.php'>Nome<br><input type='text' name='nome' value='$nome'>";
         echo "<br>Indirizzo<br><input type='text' name='via' value='$via'>";
         echo "<input type='hidden' name='aggiorna'value='$id'><br><input type='submit' value='Aggiorna'></form>";
       }

      } elseif(isset($_POST['aggiorna'])){

         $aggiorna=$_POST['aggiorna'];
         $nome=$_POST['nome'];
         $via=$_POST['via'];
         $sql= "UPDATE biblioteca SET nome='$nome',via='$via' WHERE ID='$aggiorna'";
         $ris=mysqli_query($conn,$sql);
         echo "<br><br>L'aula è stata aggiornata correttamente! <a href='ricerca.php'>Controlla</a>";

       } elseif(isset($_POST['elimina'])){

         $id=$_POST['elimina'];
         $sql= "DELETE FROM biblioteca WHERE ID='$id'";
         $ris=mysqli_query($conn,$sql);
         echo "<br><br>L'aula è stata eliminata! <a href='ricerca.php'>Controlla</a>";

       } else {
         header("location:index.php");
       }

footer();
?>
</body>
</html>
