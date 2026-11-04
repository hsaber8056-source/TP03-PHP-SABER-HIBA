<?php
const ETABLISSEMENT = "FSSM";
define("NOTE_MIN",0);
define("NOTE_MAX",20);
define("SEUIL",10);
##EXERCECE 1.3:
$prix_ht=60 ;
$tva=20;
$prix_ttc= $prix_ht + ($prix_ht * $tva / 100);
echo"Le prix TTC du produit est de $prix_ttc € <br>" ;
### Exercice 1.4 : Types et conversions:
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

?>