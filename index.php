<?php

// exo 1
$age = 33;
if ($age > 18) {
    echo "Vous êtes majeur. <br>";
} else {
    echo "Vous êtes mineur. <br>";
}

//exo2
$isEasy = true;
if ($isEasy = true) {
    echo "C'est facile!! <br>";
} else {
    echo "C'est difficile !!! <br>";
}
// bonus
$HowIs = ($isEasy) ? "C'est facile!! <br>" : "C'est difficile !!! <br>";
echo $HowIs;

//exo3
$age = 33;
$gender = "Homme";

if ($age > 18 && $gender = true) {
    echo "Vous êtes un homme et vous êtes majeur";
} else if ($age < 18 && $gender = true) {
    echo "Vous êtes un homme et vous êtes mineur";
} else if ($age > 18 && $gender = false) {
    echo "Vous êtes une femme et vous êtes majeur";
} else if ($age < 18 && $gender = false) {
    echo "Vous êtes une femme et vous êtes mineur";
};
echo "<br>";

//exo4
$magnitude = rand (1, 9);
switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
}

echo "<br>";

//exo5
$gender = "Femme";

if ($gender = false) {
    echo "C\'est un développeur !!!";
} else {
    echo "C\'est une développeuse !!!";
}

echo "<br>";

//exo6

$age = 33;
if ($age >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu n\'es pas majeur";
}

echo "<br>";

//exo7
$isOk = false;
if ($isOk = true) {
    echo "c\'est pas bon !!!";
} else {
    echo "c\'est ok !!";
}

echo "<br>";

//exo8

$isOk = true;
if ($isOk = true) {
    echo "c\'est ok !!";
} else {
    echo "c\'est pas bon !!!";
}