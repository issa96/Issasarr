<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="Exo3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
	<label class="label1">Combien de mots ?</label>
    <input type="texte" name="val" value="<?= @$_POST['val']; ?>" class="input1"><br/><br/>
	<input type="submit" name="valider" value="valider" class="submit1">
	<input type="reset" name="annuler" value="annuler" class="reset1"><br/><br/>
	<div id="boucle">
    <?php if(isset($_POST['val']) && $_POST['val']>0){
        for($i=0; $i<$_POST['val']; $i++){?>
        <input type="texte" class="affiche" name="lettre[]"  placeholder="<?= "Entrer le mot n°".($i+1)?>" value="<?= @$_POST['lettre'][$i]; ?>"/><br/><br/>
        <?php }?>
        <button name="envoyer" class="resultat">resultat</button>
        <?php }?>
	</div>
</form>
</body>
</html>
<?php
include("testFonction.php");
if(isset($_POST['valider'])){
    $numeriq=est_caractere($_POST['val']);
    if(($numeriq==true) || $_POST['val']<=0){
        echo "Entrer un entier positif";
    }
}
if(isset($_POST['envoyer'])){
    $j=0;
    for($i=0; $i<$_POST['val']; $i++){
        if(!empty($_POST['lettre'][$i])){
            if(est_caractere($_POST['lettre'][$i])==true){
                $valeur=supprimeSpace($_POST['lettre'][$i]);
                if(tailleChaine($valeur)<20){
                    if(chercheCaractere($valeur,'m')==true){
                        $j++;
                    }
                }
                else echo "Ce mots n°".($i+1)." ne doit pas depasser 20 caractere<br/>";
            }else echo "Veiller saisir un mots valide sur le mot n°".($i+1)." valide<br/>";
        }
        else echo "Ce mots n°".($i+1)." ce doit pas etre vide<br/>";
    }
    echo " le nombre de mots contenant la lettre m est ".$j;
}
?>