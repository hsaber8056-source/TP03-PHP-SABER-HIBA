<?php
##-----------Partie 2 : Structures de contrôle et boucles--------##
#--------Exercice 2.1 : if / elseif / else------#
require_once __DIR__ . "/../config.php";
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
echo "la note est 18 --> ".mention(18)."<br>"; 
echo "la note est 15 --> ".mention(15)."<br>"; 
echo "la note est 13 --> ".mention(13)."<br>"; 
echo "la note est 10 --> ".mention(SEUIL)."<br>"; 
echo "la note est 0 --> ".mention(0)."<br>"; 
#----------Exercice 2.2 : switch------#
//Récupérez le mois courant avec date("m") et stockez-le dans une variable.
$numeroMOIS= date("m");
//Affichez le nom du mois en français avec une instruction switch, sans oublier le cas default.
switch ($numeroMOIS){
    case 1:
        $mois = "janvier";
        break;
    case 2 :
        $mois = "fevrier";
        break;
    case 3 :
        $mois = "mars" ;
        break;
    case 4: 
        $mois = "avril";
        break;
    case 5 :
        $mois= "mai";
        break;
    case 6 :
        $mois = "juin";
        break;
    case 7 :
        $mois = "juillet";
        break;
    case 8 :
        $mois = "auot";
        break;
    case 9:
        $mois = "septempre";
        break;
    case 10 :
        $mois = "october";
        break;
    case 11 :
        $mois = "november";
        break;
    case 12 :
        $mois = "désembre";
        break;
    default :
        $mois = "mois incunnu" ;       
}
echo "<br> Nous sommes au mois de " . $mois."<br>";
echo"<hr>"; 
//Question : que se passe-t-il si vous oubliez un break dans un case ?
####PHP continuera à exécuter les cas suivants jusqu'à ce qu'il rencontre un `break` ou que le `switch` se termine.
#------Exercice 2.3 : Boucles------#
//Avec deux boucles for imbriquées, affichez ce triangle :
$i=0;
for($i=1;$i<=6;$i++){
    for($j=1;$j<=$i;$j++){
        echo"*";
    };
    echo"<br>";
};
// Avec while, affichez les nombres de 0 à 20 par pas de 2. Quand la valeur vaut 10, affichez-la en gras avec la balise HTML appropriée.
echo"<hr>";   
$nbr = 0;
while($nbr>=0 && $nbr<=20 ){
    if($nbr==10){
        echo"<br><b>$nbr</b><br>";
    }else {
        echo"<br>$nbr<br>";    
    }
    $nbr+=2;
        
} ;  
//Avec for et continue, affichez uniquement les nombres pairs de 0 à 10.
echo"<hr>";
for($i=0;$i<=10;$i++){
    if($i%2 !=0)
        continue;
    echo "<br>$i<br>";
};
//Avec while, switch et break 2, parcourez les entiers à partir de 1. Pour $i = 5, affichez « At 5 » et sortez uniquement du switch. Pour $i = 10, affichez « At 10; quitting » et sortez du switch et de la boucle.
echo"<hr>";
$i=1;
while(true){
    switch($i){
        case 5:
            echo"At 5 <br>";
            break;
        case 10:
            echo"At 10 ; quitting";    
            break 2;
        default:
            echo"$i <br>"; 
            break;   

    };
    $i++;
};
//Réécrivez la question 2 avec do-while. Quelle est la différence essentielle avec while ?
echo"<hr>";
$k=0;
do{
     if($k==10){
        echo"<br><b>$k</b><br>";
    }else {
        echo"<br>$k<br>";    
    }
    $k+=2;   
} while($k<=20 );
?>