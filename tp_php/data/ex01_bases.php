<?php
echo 'Hello PHP <br>'; 
//commentaire sur une ligne
#commentaire sur une ligne
/*commentaire
sur plusieurs
lignes*/
########-------------------########
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
require __DIR__ ."/../config.php";
//afichage des constante
echo "Etablissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";
var_dump(defined("SEUIL"));
echo "<br>";
var_dump(defined("INCONNUE"));
/* Question 1 :
 Si on affiche une constante non définie, PHP produit généralement
 un avertissement ou une erreur selon le contexte et la version.
Il ne faut donc pas utiliser une constante avant de vérifier son existence.*/

/* Question 2 :
const permet de déclarer une constante directement dans le code.
define() permet de créer une constante avec une fonction.
define() peut être appelée conditionnellement, contrairement à const.*/

?>
