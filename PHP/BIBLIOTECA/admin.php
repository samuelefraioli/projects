<?php
session_start();
include("function.php");
$conn=conn();
head();
echo"<html lang='it'>";
  if ($_SESSION['admin']!=1){
  header("location: index.php");
} else {
    $sql="SELECT *FROM utenti";
			$ris=mysqli_query($conn,$sql);
?>
    <table>
		<tr>
			<td>
				tipo
			</td>
			<td>
				username
			</td>
			<td>
        password
			</td>
		</tr>
<?php
        while($riga=mysqli_fetch_assoc($ris))
{
        $a=$riga["tipo"];
		$b=$riga["username"];
		$c=$riga["password"];
		echo"<tr><td>$a</td><td>$b</td><td>$c</td>";
        echo"<td>
				<form action='cancellauser.php' method='POST'>
					<input type='hidden' name='elimina' value='$b'>
					<input type='submit' value='elimina'";
           if($riga['tipo']=="ADMIN"){echo "disabled";}
          echo ">	</form></td></tr>";
}
    echo"</table>";
        if (isset ($_SESSION['admin']) and $_SESSION['admin']==1){
        echo"<br> <center> <form action='regform.php' method='POST'>
        <input type='submit' value='aggiungi'>
    </form></center>";
}
    footer();
    echo" </body>
   </html>";
 }
 ?>
