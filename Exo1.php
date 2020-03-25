<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Donner une valeur superieur à 10000 et inferieur ou egale a 20000.</label><br><br>
		<input type="number" name="a"><br><br>
		<input type="submit" name="Entrer" value="Enter">
	</form>
</body>
</html>
<?php
$mtime=microtime();
$mtime=explode(" ",$mtime);
$mtime=$mtime[1]+$mtime[0];
$starttime=$mtime;
function pagination($tab){
	session_start();
	$_SESSION['tab']=$tab;
	$TotalValeur=count($_SESSION['tab']);
	$NbreParPage=100;
	$NbreDePage=ceil($TotalValeur/$NbreParPage);
	//var_dump($_SESSION['tab']);
	for($i=1; $i<=$NbreDePage; $i++){
		echo "<a href='Exo1.php?page=$i'>".$i."</a>";
	}
	$tailleTab=$_GET['page']*100;
	$indD=$tailleTab-2;
	$p=1;
	$inF=$p*$NbreParPage;
	echo "<table border='1'>";
	while($indD<$tailleTab){
		for($i=0; $i<10; $i++){
			echo "<tr>";
			for($j=0; $j<30; $j++){
				if(array_key_exists($indD, $_SESSION['tab'])){
				echo "<td>".$_SESSION['tab'][$indD]."</td>";
				}
				$indD++;
			}
			echo "<tr>";
		}
	}
	echo "</table>";
}
function premiere($a){
	$T=array();
	for ($i=2; $i <=$a ; $i++) { 
		$c=0;
		for ($j=1; $j<=$i ; $j++) { 
			if ($i%$j==0) {
				$c++;
			}
		}
		if ($c==2) {
			$T[$i]=$i;
		}
	}
	return $T;
}
function moyenne($m){
	$s=0;
	foreach ($m as $key => $value) {
		$s=$s+$value;
	}
	$moyenne=$s/count($m);
	return $moyenne;
}
if (isset($_REQUEST['Entrer'])) {
	if (!empty($_REQUEST['a'])) {
		$valeur=$_REQUEST['a'];
		$T1=array();
		if (($valeur>10000)&&($valeur<=20000)) {
			$T1=premiere($valeur);
			pagination($T1);
			/*echo "<h4>La moyenne des valeurs du tableau est: ".moyenne($T1)." </h4><br><br>";*//*
			$T = array("inferieur" => array(),"superieur" => array());
			foreach ($T1 as $key => $value) {
				if ($value<moyenne($T1)) {
					# code...
					$T["inferieur"][$key]=$value;
				}
				if ($value>moyenne($T1)) {
					# code...
					$T["superieur"][$key]=$value;
				}
			}
			echo "<h4>Les nombres premiere inferieur a la moyenne sont: </h4><br><br>";
			$n=0;
			foreach ($T["inferieur"] as $key => $value) {
				# code...
				$n++;
				if ($value<=9) {
					# code...
					echo "0000";
				}
				if (($value>9)&&($value<=99)) {
					# code...
					echo "000";
				}
				if (($value>99)&&($value<=999)) {
					# code...
					echo "00";
				}
				if (($value>999)&&($value<=9999)) {
					# code...
					echo "0";
				}
				echo $value;
				if ($n<20) {
					# code...
					echo "   -   ";
				}
				else{
					echo "<br><br>";
					$n=0;
				}
			}
			echo "<br><br>";
			echo "<h4>Les nombres premiere superieur a la moyenne sont: </h4><br><br>";
			$y=0;
			foreach ($T["superieur"] as $key => $value) {
				# code...
				$y++;
				if ($value<=9) {
					# code...
					echo "0000";
				}
				if (($value>9)&&($value<=99)) {
					# code...
					echo "000";
				}
				if (($value>99)&&($value<=999)) {
					# code...
					echo "00";
				}
				if (($value>999)&&($value<=9999)) {
					# code...
					echo "0";
				}
				echo $value;
				if ($y<20) {
					# code...
					echo "   -   ";
				}
				else{
					echo "<br><br>";
					$y=0;
				}
			}*/
		}
		else
			echo "La valeur doit etre compris entre 10000 exlu et 20000 inclu<br>";
	}
	else
	    echo "Ce champs ne doit pas etre vide<br>";
}
$mtime=microtime();
$mtime=explode(" ",$mtime);
$mtime=$mtime[1]+$mtime[0];
$endtime=$mtime;
$totaltime=($endtime - $starttime);
echo "page generer en ".number_format($totaltime,4,',','')." s";
?>