<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP Partie 1</title>
    <style> 
    h2{
        Color: #f94144;
    }
    </style>
</head>
<body>
    <h1>Exercices PHP - Partie 1</h1>
    <h2>Exercice 1</h2>
    <!-- Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable. -->
    <?php
    $myVar = "Mon premier exercice PHP";
    echo $myVar; 
    ?>

    <h2>Exercice 2</h2>
    <!-- Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase
    (ex: Je m'appelle "nom prénom" et j'ai "age" ans.) -->
    <?php
    $firstName = 'Emma';
    $lastName = 'DUFLOT';
    $age = 34;
    echo 'Je m\'appelle ' . $firstName . ' ' . $lastName . ' et j\'ai '. $age . ' ans.'
    ?>

    <h2>Exercice 3</h2>
    <!-- Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge. -->

    <?php
    $age = 18;

    if ($age > 0) 
    {
        if ($age >= 18)
        {
            echo 'Vous êtes majeur';
        }
        else 
        {
        echo 'Vous êtes mineur';
        }
        } 
    else {
        echo 'Ce n\'est pas possible';
        }
    ?>

    <h2>Exercice 4</h2>
    <!-- Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu. -->
<?php 
$age = rand(0, 100);
echo $age;
if($age >= 18){
    echo 'Vous êtes majeur';
} else {
    echo 'Vous êtes mineur';
}
?>

<h2>Exercice 5</h2>
<!-- Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et
 vous avez xans ou vous êtes un homme et vous avez xans. -->
 
 <?php 
 $age = random_int(1,100);
 $womenManArray = array('femme', 'homme');
 $randIndexWomenManArray = array_rand($womenManArray);
 // var_dump( $randIndexWomenManArray );
 $womenManGender = $womenManArray[$randIndexWomenManArray];
 // var_dump( $womenManGender);
 echo "Vous êtes un(e) " . $womenManGender. " et vous avez  ". $age . " ans.";
 ?>


 <h2>Exercice 6</h2>
 <!-- Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.

1. Micro-séisme impossible à ressentir
2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres
3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti
4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats
5. Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes
6. Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre
7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance
8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres
9. Séisme capable de tout détruire sur une très vaste zone -->

<?php
$varMagn = random_int(0, 9);

switch ($varMagn){
    case 1:
        echo '1. Micro-séisme impossible à ressentir';
        break;
    case 2:
        echo '2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres';
        break;
    case 3:
        echo '3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti';
        break;
    case 4:
        echo '4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats';
        break;
    case 5:
        echo '5. Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes';
        break;
    case 6:
        echo '6. Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre';
        break;
    case 7:
        echo '7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance';
        break;
    case 8:
        echo '8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres';
         break;
    case 9:
        echo '9. Séisme capable de tout détruire sur une très vaste zone ';
        break;
    default:
        echo 'Tout va bien, rien à signaler';
}
    
?>

</body>
</html>