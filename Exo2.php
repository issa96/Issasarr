<form method="POST">
	<select name="langue">
		<option>FR</option>
		<option>Ang</option>
	</select><br/>
	<input type="submit"name="valider"/>
</form>
<?php
if (isset($_POST['valider'])) {
		# code...
		if ($_POST['langue']=='FR') {
			# code...
			galery(0);
		}
		elseif ($_POST['langue']=='Ang') {
			# code...
			galery(1);
		}
}
function galery($ok){
$i=1;
$z=0;
$tab= array(
		'1'=>['janvier', 'january'],
		'2'=>['Fevrier', 'Febary'],
		'3'=>['Mars',  'marche'],
		'4'=>['Avril',  'April'],
		'5'=>['Mais',  'May'],
		'6'=>['Juin',  'june'],
		'7'=>['Juillet',  'July'],
		'8'=>['Aout',  'August'],
		'9'=>['Septembre',  'Septembre'],
		'10'=>['Octobre',  'Octobrer'],
		'11'=>['novembre',  'November'],
		'12'=>['Decembre',  'December']	
);
echo "<table border='2px' cellpadding='5' style='background-image: linear-gradient(sandybrown,  white)'>";
foreach ($tab as $key => $value) {
	# code...
		if ($i<=3) {
			# code...
			echo "<td>".$key."</td>"; echo "<td>".$value[$ok]."</td>";
			$i++;
			if ($i==4) {
				# code...
				echo "<tr>";
				echo "</tr>";
			}
		}
		elseif (($i>=4)&&($i<7)) {
			# code...
			echo "<td>".$key."</td>"; echo "<td>".$value[$ok]."</td>";
			$i++;
			if ($i==7) {
				# code...
				echo "<tr>";
				echo "</tr>";
			}
		}
		elseif (($i>=7)&&($i<=9)) {
			# code...
			echo "<td>".$key."</td>"; echo "<td>".$value[$ok]."</td>";
			$i++;
			if ($i==10) {
				# code...
				echo "<tr>";
				echo "</tr>";
			}
		}
		elseif (($i>=10)&&($i<=12)) {
			# code...
			echo "<td>".$key."</td>"; echo "<td>".$value[$ok]."</td>";
			$i++;
		}
}
echo "</table>";
}
?>