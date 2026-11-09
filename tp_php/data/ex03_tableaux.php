<?php
require_once __DIR__ . "/../config.php";
##------Partie 3 : Tableaux-------##
#-------Exercice 3.1 : Création---------#
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];
$modules=["programmation web","UML","systeme d'exploitation"];

function afficher($tab) {
    foreach ($tab as $nom => $note) {
        echo $nom . " : " . $note . "<br>";
    }
}
afficher($notes);
echo"<hr>";
echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2] . "<br>";
echo"<hr>";
#--------Exercice 3.2 : Affichage HTML--------#
function mention($note){
    if($note >= 16){
        return "tres bien";
    }elseif($note >= 14){
        return "bien";
    }elseif($note >= 12){
        return "assez bien";
    }elseif($note >= SEUIL){
        return "passable";
    }else{
        return "ajourné";
    };

}

    echo "<table border='1'>";
    echo "<tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Mention</th>
        </tr>";
foreach($notes as $nom => $note ){
    if ($note < SEUIL) {
        $couleur = "red";
    } else {
        $couleur = "black";
    }


    echo "<tr style='color:$couleur'>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>".mention($note)."</td>";
    echo "</tr>";
    
};
echo "</table>";
echo"<hr>";
#-----Exercice 3.3 : Statistiques------#
//Sans utiliser array_sum(), calculez avec une boucle la somme et la moyenne des notes, ainsi que la meilleure et la plus faible note.
$somme = 0;
$moynne = 0;
$meilleureNote = 0;
$faibleNote = 20;
foreach($notes as $nom => $note ){
    $somme += $note;
        if ($note > $meilleureNote) {
            $meilleureNote = $note;
        };
        if( $note < $faibleNote ){
            $faibleNote = $note;
        };

};
$moyenne = $somme / count($notes);
echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne : $moyenne</p>";
echo "<p>Meilleure note : $meilleureNote</p>";
echo "<p>faible note : $faibleNote</p>";
echo"<hr>";
//Vérifiez vos résultats avec array_sum, count, max et min.
echo "somme : ".array_sum($notes)."<br>";
echo"nombre des etudaintes : ". count($notes)."<br>";
echo "max des notes : ".max($notes)."<br>";
echo "min des notes : ".min($notes)."<br>";
echo "moyenne : ".array_sum($notes) / count($notes)."<br>";
echo"<hr>";
//Construisez un tableau associatif $effectifs donnant le nombre d'apprenants par mention.
$effectifs = [];

foreach ($notes as $nom => $note) {

    $m = mention($note);

    if (isset($effectifs[$m])) {
        $effectifs[$m]++;
    } else {
        $effectifs[$m] = 1;
    }
}

echo "<pre>";
print_r($effectifs);
echo "</pre>";
#-----Exercice 3.4 : Tri------#

echo"<hr>";
//1. le tableau trié par noms croissants (`ksort`) ;
echo "<h3>Tri par noms croissants</h3>";
ksort($notes);
afficher($notes);
//2. le tableau trié par notes décroissantes (`arsort`) ;
echo "<h3>Tri par notes décroissantes</h3>";
arsort($notes);
afficher($notes);
//3. le tableau trié par noms décroissants (`krsort`) ;
echo "<h3>Tri par noms décroissants</h3>";
krsort($notes);
afficher($notes);
//4. le tableau trié par notes croissantes (`asort`).
echo "<h3>Tri par notes croissantes</h3>";
asort($notes);
afficher($notes);
//Question : quelle fonction de tri utiliser sur un tableau indexé comme `$modules` ?
/*==> Pour trier un tableau indexé comme `$modules`,
vous pouvez utiliser la fonction `sort()` pour trier les éléments par ordre croissant ou `rsort()` pour trier par ordre décroissant.
Ces fonctions réorganisent les éléments du tableau en fonction de leur valeur.
*/

?>