<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<textarea name="message"cols="50"rows="10"><?php if(isset($_POST['message'])) echo @$_POST['message'];?></textarea><br/>
		<input type="submit" name="valider"/>
    </form>
</body>
</html>
<?php
include("testFonction.php");
if (isset($_REQUEST['valider'])) {
	if (!empty($_POST['message'])) {
		if(verifie_debut_maj_fin_point($_POST['message'])){
			 echo "Chaine corret!!! Et respect bien la ponctuation<br/><br/><br/><br/>".$_POST['message'];
		}
		else{
			echo $_POST['message']." :Chaine incorret!!! Ne respectant la ponctuation<br/><br/>La correction est ci-dessous<br/><br/>";
			echo phrase_complet($_POST['message']);
		}
    }
}
?>