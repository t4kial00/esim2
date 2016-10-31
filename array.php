<h1>PHP Array</h1>

<?php
	$asiakkaat = array(
		array("en" => 'Mikko', "sn" => 'Virtanen'),
		array("en" => 'Antti', "sn" => 'Jyövinen'),
		array("en" => 'Antti', "sn" => 'Työvinen'),
		array("en" => 'Saad', "sn" => 'Maan')
		);

	echo "<h2>Print_r</h2>";
	print_r($asiakkaat);
?>

<h2>Tulostus foreach-loopilla</h2>

<?php
	#ini_set('display_error', 1);

	foreach ($asiakkaat as $rivi) {
		echo 'Etunimi '.$rivi['en'].' Sukunimi '.$rivi['sn'].'<br>';
	}
?>

<h2>Tulostus taulukkona</h2>

<TABLE border=1>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
		<?php
			foreach ($asiakkaat as $rivi) {
				echo'<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
			}

		?>
</TABLE>