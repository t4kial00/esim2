<?php 
	session_start();
	if($_SESSION['kirjautunut'] != TRUE){
		header("Location: login.php");
	}

?>

<?php include 'menu.php'; ?>

<h1>Asiakkaat</h1>

<?php
	include 'connection.php';
	$sql="SELECT etunimi, sukunimi FROM asiakkaat";
	#echo $sql;
	$asiakkaat=$db->query($sql);

	echo "<table border=1>";
	echo "<tr><th>Etunimi</th><th>Sukunimi</th></tr>";
	foreach ($asiakkaat as $rivi) {
		echo '<tr><td>'.$rivi['etunimi'].'</td><td> '.$rivi['sukunimi'].'</td></tr>';
	}
	echo "</table>";
?>

<?php include 'footer.php'; ?>