<?php
##------------Partie 0 : Mise en place-------------##
echo 'Hello PHP <br>'; 
//commentaire sur une ligne
#commentaire sur une ligne
/*commentaire
sur plusieurs
lignes*/
##---------Partie 1 : Variables, constantes, types et chaînes----------##
/*#### Parmi les noms suivants, lesquels sont valides ? Justifiez chaque réponse dans un commentaire, puis déclarez uniquement les variables valides.*/
// $x : Valide, car le nom commence par une lettre.

$x = 10;
// $_x : Valide, car le nom commence par un underscore.
$_x = 20;

// $2x : Invalide, car le nom commence par un chiffre.

/* $x-y : Invalide, car le caractère "-" n'est pas autorisé
dans un nom de variable.*/
/*$Prix_HT : Valide, car le nom commence par une lettre
et le caractère "_" est autorisé.*/
$Prix_HT = 100;

// $prix ht : Invalide, car le nom contient un espace.

/*$état : À éviter pour un nom de variable portable, car il contient un caractère accentué.*/
$état = "valide";

// Démonstration : $a et $A sont deux variables distinctes.
$a = 5;
$A = 15;

echo $a; // Affiche 5
echo "<br>";
echo $A; // Affiche 15
echo "<br>";
#-------Exercice 1.2 : Constantes-----#
require __DIR__ ."/../config.php";
//afichage des constante
echo "Etablissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";
var_dump(defined("SEUIL"));
echo "<br>";
var_dump(defined("INCONNUE"));
#-------EXERCECE 1.3:-------#
$prix_ht=60 ;
$tva=20;
$prix_ttc= $prix_ht + ($prix_ht * $tva / 100);
echo"Le prix TTC du produit est de $prix_ttc € <br>" ;
#-------Exercice 1.4 : Types et conversions:------#
//1. Déclarez `$test = 42`. À l'aide d'un cast, faites en sorte que son type soit `string` tout en gardant la valeur 42. Vérifiez avec `var_dump()`.
$test = 42;
var_dump($test);
echo $test;echo "<br>";
$test = (string)$test;
var_dump($test);
echo $test;
var_dump($test);
//2. **Prédisez d'abord, puis vérifiez** avec `var_dump((bool) ...)` : `0`, `0.0`, `"0"`, `""`, `"abc"`, `[]`, `null`.
var_dump((bool)0);echo "<br>";//false
var_dump((bool)0.0);echo "<br>";//false
var_dump((bool)"0");echo "<br>";//false
var_dump((bool)"");echo "<br>";//true
var_dump((bool)"abc");echo "<br>";//true
var_dump((bool)[]);echo "<br>";//true
var_dump((bool)null);echo "<br>";//false
//3. **Prédisez, puis vérifiez** : `(int) 3.9`, `(int) "12abc"`, `(float) "1.5e3"`, `(int) true`.
var_dump((int)3.9);echo "<br>";//3
var_dump((int)"12abc");echo "<br>";//12
var_dump((float)"15e3");echo "<br>";//false
var_dump((int)true);echo "<br>";//1
//4. Écrivez le nombre 255 en notation décimale, hexadécimale, octale et binaire, et affichez les quatre valeurs.
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Decimal : " . $decimal . "-->255<br>";
echo "Hexadecimal : " . $hexadecimal . "-->0xFF <br>";
echo "Octal : " . $octal . "-->0377<br>";
echo "Binaire : " . $binaire . "-->0b11111111<br>";
$traitees = "égales à";
$ici =2;
//1. `Ahmed a dit : "J'ai réussi"`
echo '<br> Ahmed a dit : "J\'ai réussi"';
//2. `Voulez-vous supprimer C:\*.*?`
echo'<br> Voulez-vous supprimer C:\*.*?';
//3. `Ceci n'affichera pas \n de nouvelle ligne` (le `\n` doit apparaître tel quel)
echo'<br> Ceci n\'affichera pas \n de nouvelle ligne ';
//4. `Les variables ne seront pas $traitees $ici` (variables non interprétées)
echo'<br> les varaibles ne seront pas $traitees $ici';
//5. `Les variables seront égales à 2` (variables interprétées)
echo"<br> les varaibles seront $traitees $ici";
//- retirez les `*` de la chaîne `"*Bonjour les développeurs*"` avec `trim()` ;
$texte = "*Bonjour les developpeurs*";
$resultat = trim($texte,"*");
echo "<br>";
echo"$resultat";
echo "<br>";
//- affichez chaque lettre sur une ligne différente, avec `strlen()` et une boucle `for`. 
for ($i = 0; $i < strlen($resultat); $i++) {
    echo $resultat[$i] . "<br>";
}

?>
