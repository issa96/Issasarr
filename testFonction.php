<?php
$caracteres=[
    ['a', 'A'],['b', 'B'],['c', 'C'],['d', 'D'],['e', 'E'],
    ['f', 'F'],['g', 'G'],['h', 'H'],['i', 'I'],['j', 'J'],
    ['k', 'K'],['l', 'L'],['m', 'M'],['n', 'N'],['o', 'O'],
    ['p', 'P'],['q', 'Q'],['r', 'R'],['s', 'S'],['t', 'T'],
    ['u', 'U'],['v', 'V'],['w', 'W'],['x', 'X'],['y', 'Y'],
    ['z', 'Z']
];
function est_caractere($ok){
    return ((($ok>='a')||($ok>='A')) && (($ok<='z')||($ok<='Z')));
} 
function numerique($int){
    return (($int>=0)&&($int<=9));
}
function minuscule($ok){
    return (($ok>='a') && ($ok<='z'));
}
function majuscule($ok){
    return (($ok>='A') && ($ok<='Z'));
}
function faitCaractereMinuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[0];
            }
        }
    }
    return $car;
}
function faitCaractereMajuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[1];
            }
        }
    }
    return $car;
}
function inverse_casse($chaine){
    for($i=0; $i<tailleChaine($chaine); $i++){
        if(majuscule($chaine[$i])==true){
            $chaine[$i]=faitCaractereMinuscule($chaine[$i]);
        }
        else{
            $chaine[$i]=faitCaractereMajuscule($chaine[$i]);
        }
    }
    return $chaine;
}  
function debut_majuscule($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(minuscule($phrase[$i])){
            $phrase[$i]=inverse_casse($phrase[$i]);
            $i=tailleChaine($phrase);
        }else break;
    }
    return $phrase;
}
function point_fin_phrase($phrase){
        $phrase[tailleChaine($phrase)]=".";
    return $phrase;
}
function verifie_point_fin_phrase($phrase){
    if(($phrase[tailleChaine($phrase)-1]==".")||($phrase[tailleChaine($phrase)-1]=="!")||($phrase[tailleChaine($phrase)-1]=="?")){
        return true;
    }
    else return false;
}
function phrase_complet($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(($phrase[$i]==".")||($phrase[$i]=="!")||($phrase[$i]=="?")){
            if(!empty($phrase[$i+1])){
                if($phrase[$i+1]!=" "){
                    $phrase[$i+1]=debut_majuscule($phrase[$i+1]);
                }
                else{
                    $phrase[$i+2]=debut_majuscule($phrase[$i+2]);
                }
            }else return debut_majuscule($phrase);
        }
    }
    return point_fin_phrase(debut_majuscule($phrase));
}
function decoupe_chaine($chaine){
    $mot=array( array());
    $k=0;
    for($i=0;$i<strlen($chaine); $i++){
        if($chaine[$i]!="?"){
            $mot[$k][$i]=$chaine[$i];
            echo $mot[$k][$i];
        }
        elseif($chaine[$i]=="."){
            echo "    phrase n°".$k;
            /*if(count($mot[$k])>5){
                echo "le mot n°".$k." est superieur a 5 caractere<br/>";
            }*/
            echo "<br/>";
            $k++;
        }
    }
}
//decoupe_chaine("Abdoulaye la valeur de pi est .je vais tresbien. sauf que jai fain.");
function verifie_debut_maj_fin_point($phrase){
    if(majuscule($phrase[0])){
        if(verifie_point_fin_phrase($phrase[tailleChaine($phrase)-1])==true){
            return true;
        }
        else return false;
    }
    else return false;
}
//verifie_debut_maj_fin_point("Issa.");
function chercheCaractere($ok, $recherche){
    $tab=array();
    $tab=$ok;
    $i=0;
    $k=0;
    while(isset($tab[$i])){
        if(($tab[$i]==faitCaractereMinuscule($recherche))||($tab[$i]==faitCaractereMajuscule($recherche))){
            $k++;
            break;
        }
        $i++;
    }
    if($k>=1) return true;
    else return false;
}
function tailleTableau($tab){
    $i=0;
    while(isset($tab[$i])){
        $i++;
    }
    return $i;
}
function tailleChaine($chaine){
    $tab=$chaine;
    return tailleTableau($tab);
}
function supprimeSpace($phrase){
    $pas="";
    for($i=0; $i<tailleChaine($phrase); $i++){
        if($phrase[$i]!=" "){
            $pas .=$phrase[$i];
        }
    }
    return $pas;
}
function supprime_Space_unitile($phrase){
    $pas=preg_replace('/\s\s+/',' ',$phrase);//supprime espace au milieu
    //$pas1= ltrim($pas);//supprime espace debut
    //$pas2= rtrim($pas1);//supprime les espace en fin
    return trim($pas);//supprime espace debut et fin
}
?><?php
$caracteres=[
    ['a', 'A'],['b', 'B'],['c', 'C'],['d', 'D'],['e', 'E'],
    ['f', 'F'],['g', 'G'],['h', 'H'],['i', 'I'],['j', 'J'],
    ['k', 'K'],['l', 'L'],['m', 'M'],['n', 'N'],['o', 'O'],
    ['p', 'P'],['q', 'Q'],['r', 'R'],['s', 'S'],['t', 'T'],
    ['u', 'U'],['v', 'V'],['w', 'W'],['x', 'X'],['y', 'Y'],
    ['z', 'Z']
];
function est_caractere($ok){
    return ((($ok>='a')||($ok>='A')) && (($ok<='z')||($ok<='Z')));
} 
function numerique($int){
    return (($int>=0)&&($int<=9));
}
function minuscule($ok){
    return (($ok>='a') && ($ok<='z'));
}
function majuscule($ok){
    return (($ok>='A') && ($ok<='Z'));
}
function faitCaractereMinuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[0];
            }
        }
    }
    return $car;
}
function faitCaractereMajuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[1];
            }
        }
    }
    return $car;
}
function inverse_casse($chaine){
    for($i=0; $i<tailleChaine($chaine); $i++){
        if(majuscule($chaine[$i])==true){
            $chaine[$i]=faitCaractereMinuscule($chaine[$i]);
        }
        else{
            $chaine[$i]=faitCaractereMajuscule($chaine[$i]);
        }
    }
    return $chaine;
}  
function debut_majuscule($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(minuscule($phrase[$i])){
            $phrase[$i]=inverse_casse($phrase[$i]);
            $i=tailleChaine($phrase);
        }else break;
    }
    return $phrase;
}
function point_fin_phrase($phrase){
        $phrase[tailleChaine($phrase)]=".";
    return $phrase;
}
function verifie_point_fin_phrase($phrase){
    if(($phrase[tailleChaine($phrase)-1]==".")||($phrase[tailleChaine($phrase)-1]=="!")||($phrase[tailleChaine($phrase)-1]=="?")){
        return true;
    }
    else return false;
}
function phrase_complet($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(($phrase[$i]==".")||($phrase[$i]=="!")||($phrase[$i]=="?")){
            if(!empty($phrase[$i+1])){
                if($phrase[$i+1]!=" "){
                    $phrase[$i+1]=debut_majuscule($phrase[$i+1]);
                }
                else{
                    $phrase[$i+2]=debut_majuscule($phrase[$i+2]);
                }
            }else return debut_majuscule($phrase);
        }
    }
    return point_fin_phrase(debut_majuscule($phrase));
}
function decoupe_chaine($chaine){
    $mot=array( array());
    $k=0;
    for($i=0;$i<strlen($chaine); $i++){
        if($chaine[$i]!="?"){
            $mot[$k][$i]=$chaine[$i];
            echo $mot[$k][$i];
        }
        elseif($chaine[$i]=="."){
            echo "    phrase n°".$k;
            /*if(count($mot[$k])>5){
                echo "le mot n°".$k." est superieur a 5 caractere<br/>";
            }*/
            echo "<br/>";
            $k++;
        }
    }
}
//decoupe_chaine("Abdoulaye la valeur de pi est .je vais tresbien. sauf que jai fain.");
function verifie_debut_maj_fin_point($phrase){
    if(majuscule($phrase[0])){
        if(verifie_point_fin_phrase($phrase[tailleChaine($phrase)-1])==true){
            return true;
        }
        else return false;
    }
    else return false;
}
//verifie_debut_maj_fin_point("Issa.");
function chercheCaractere($ok, $recherche){
    $tab=array();
    $tab=$ok;
    $i=0;
    $k=0;
    while(isset($tab[$i])){
        if(($tab[$i]==faitCaractereMinuscule($recherche))||($tab[$i]==faitCaractereMajuscule($recherche))){
            $k++;
            break;
        }
        $i++;
    }
    if($k>=1) return true;
    else return false;
}
function tailleTableau($tab){
    $i=0;
    while(isset($tab[$i])){
        $i++;
    }
    return $i;
}
function tailleChaine($chaine){
    $tab=$chaine;
    return tailleTableau($tab);
}
function supprimeSpace($phrase){
    $pas="";
    for($i=0; $i<tailleChaine($phrase); $i++){
        if($phrase[$i]!=" "){
            $pas .=$phrase[$i];
        }
    }
    return $pas;
}
function supprime_Space_unitile($phrase){
    $pas=preg_replace('/\s\s+/',' ',$phrase);//supprime espace au milieu
    //$pas1= ltrim($pas);//supprime espace debut
    //$pas2= rtrim($pas1);//supprime les espace en fin
    return trim($pas);//supprime espace debut et fin
}
?><?php
$caracteres=[
    ['a', 'A'],['b', 'B'],['c', 'C'],['d', 'D'],['e', 'E'],
    ['f', 'F'],['g', 'G'],['h', 'H'],['i', 'I'],['j', 'J'],
    ['k', 'K'],['l', 'L'],['m', 'M'],['n', 'N'],['o', 'O'],
    ['p', 'P'],['q', 'Q'],['r', 'R'],['s', 'S'],['t', 'T'],
    ['u', 'U'],['v', 'V'],['w', 'W'],['x', 'X'],['y', 'Y'],
    ['z', 'Z']
];
function est_caractere($ok){
    return ((($ok>='a')||($ok>='A')) && (($ok<='z')||($ok<='Z')));
} 
function numerique($int){
    return (($int>=0)&&($int<=9));
}
function minuscule($ok){
    return (($ok>='a') && ($ok<='z'));
}
function majuscule($ok){
    return (($ok>='A') && ($ok<='Z'));
}
function faitCaractereMinuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[0];
            }
        }
    }
    return $car;
}
function faitCaractereMajuscule($car){
    global $caracteres;
    foreach($caracteres as $lettres){
        for($i=0; $i<tailleChaine($lettres); $i++){
            if($lettres[$i]===$car){
                return $lettres[1];
            }
        }
    }
    return $car;
}
function inverse_casse($chaine){
    for($i=0; $i<tailleChaine($chaine); $i++){
        if(majuscule($chaine[$i])==true){
            $chaine[$i]=faitCaractereMinuscule($chaine[$i]);
        }
        else{
            $chaine[$i]=faitCaractereMajuscule($chaine[$i]);
        }
    }
    return $chaine;
}  
function debut_majuscule($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(minuscule($phrase[$i])){
            $phrase[$i]=inverse_casse($phrase[$i]);
            $i=tailleChaine($phrase);
        }else break;
    }
    return $phrase;
}
function point_fin_phrase($phrase){
        $phrase[tailleChaine($phrase)]=".";
    return $phrase;
}
function verifie_point_fin_phrase($phrase){
    if(($phrase[tailleChaine($phrase)-1]==".")||($phrase[tailleChaine($phrase)-1]=="!")||($phrase[tailleChaine($phrase)-1]=="?")){
        return true;
    }
    else return false;
}
function phrase_complet($phrase){
    for($i=0; $i<tailleChaine($phrase); $i++){
        if(($phrase[$i]==".")||($phrase[$i]=="!")||($phrase[$i]=="?")){
            if(!empty($phrase[$i+1])){
                if($phrase[$i+1]!=" "){
                    $phrase[$i+1]=debut_majuscule($phrase[$i+1]);
                }
                else{
                    $phrase[$i+2]=debut_majuscule($phrase[$i+2]);
                }
            }else return debut_majuscule($phrase);
        }
    }
    return point_fin_phrase(debut_majuscule($phrase));
}
function decoupe_chaine($chaine){
    $mot=array( array());
    $k=0;
    for($i=0;$i<strlen($chaine); $i++){
        if($chaine[$i]!="?"){
            $mot[$k][$i]=$chaine[$i];
            echo $mot[$k][$i];
        }
        elseif($chaine[$i]=="."){
            echo "    phrase n°".$k;
            /*if(count($mot[$k])>5){
                echo "le mot n°".$k." est superieur a 5 caractere<br/>";
            }*/
            echo "<br/>";
            $k++;
        }
    }
}
//decoupe_chaine("Abdoulaye la valeur de pi est .je vais tresbien. sauf que jai fain.");
function verifie_debut_maj_fin_point($phrase){
    if(majuscule($phrase[0])){
        if(verifie_point_fin_phrase($phrase[tailleChaine($phrase)-1])==true){
            return true;
        }
        else return false;
    }
    else return false;
}
//verifie_debut_maj_fin_point("Issa.");
function chercheCaractere($ok, $recherche){
    $tab=array();
    $tab=$ok;
    $i=0;
    $k=0;
    while(isset($tab[$i])){
        if(($tab[$i]==faitCaractereMinuscule($recherche))||($tab[$i]==faitCaractereMajuscule($recherche))){
            $k++;
            break;
        }
        $i++;
    }
    if($k>=1) return true;
    else return false;
}
function tailleTableau($tab){
    $i=0;
    while(isset($tab[$i])){
        $i++;
    }
    return $i;
}
function tailleChaine($chaine){
    $tab=$chaine;
    return tailleTableau($tab);
}
function supprimeSpace($phrase){
    $pas="";
    for($i=0; $i<tailleChaine($phrase); $i++){
        if($phrase[$i]!=" "){
            $pas .=$phrase[$i];
        }
    }
    return $pas;
}
function supprime_Space_unitile($phrase){
    $pas=preg_replace('/\s\s+/',' ',$phrase);//supprime espace au milieu
    //$pas1= ltrim($pas);//supprime espace debut
    //$pas2= rtrim($pas1);//supprime les espace en fin
    return trim($pas);//supprime espace debut et fin
}
?>
