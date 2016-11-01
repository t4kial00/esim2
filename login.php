<?php
	session_start();

	if(isset($_POST['nappi'])){
		$username="testi";
		$password="testi";

		if($_POST['tunnus']==$username){
			if ($_POST['sala']==$password) {
				# käyttäjätunnus ja salasana on oikein
				$_SESSION['kirjautunut']=TRUE;
				$_SESSION['user']=$username;
				header("Location: oma.php");
			}
			else{
				echo "Käyttäjätunnus tai salasana on väärin";
			}
		}

	else{
		echo "Käyttäjätunnus tai salasana on väärin";
	}
	}

?>

<?php include 'menu.php'; ?>

<form method="post" action="login.php">
<table border="0">
	<tr>
		<td>Käyttäjätunnus</td>	<td><input type="text" name="tunnus" placeholder="Käyttäjätunnus"></td></tr>
		<td>Salasana</td><td><input type="password" name="sala" placeholder="Salasana"></td></tr>
	</tr>	
	<tr>
		<td></td><td><input type="submit" name="nappi" value="Kirjaudu"></td>
	</tr>	
</table>
</form>

<?php include 'footer.php'; ?>