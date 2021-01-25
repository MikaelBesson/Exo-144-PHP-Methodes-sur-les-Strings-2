<?php

echo "<br>exo 1 <br><br>";

$monMot = "Ajourd'hui il fait -1000 degrés<br>";
$monMot = addslashes($monMot);

echo addslashes($monMot)."<br>";

echo "<br>exo 2 <br><br>";

$maPhrase = "bonjour je fait du php !!";

$maPhrase1 = strtoupper($maPhrase);
echo $maPhrase1."<br><br>";

$maPhrase2 = ucfirst ($maPhrase);
echo $maPhrase2."<br><br>";

$maPhrase3 = ucwords($maPhrase);
echo $maPhrase3."<br><br>";

$maPhrase4 = "LE PHP C'EST VRAIMENT SYMPA !!";

$maPhrase5 = strtolower($maPhrase4);
echo $maPhrase5."<br><br>";

$maPhrase6 = lcfirst($maPhrase4);
echo $maPhrase6."<br><br>";

echo "<br>exo 3 <br><br>";

$maLonguePhrases = "je suis content d'etre en formation a up-to meme si parfois je comprend pas tout,
                    heureusement ya une bonne ambiance le café est bon et on rigole bien je sais plus quoi ecrire pour aller a 25.";

$maLonguePhrases1 = str_word_count($maLonguePhrases);
echo "ma phrase contient: ".$maLonguePhrases1." mots<br><br>";

echo "<br>exo 4 <br><br>";

$maChaineExo4 = "je crée une chaine de caracteres pour l'exo 4";
$mots = explode(" ", $maChaineExo4);
foreach ($mots as $mot){
    echo "Mot: $mot <br>";
}

echo "<br>exo 5 <br><br>";

$tab = ["pomme", "bannane", "fraise", "melon", "mangue"];
$chaineTab = implode(",",$tab);
echo $chaineTab."<br>";

echo "<br>exo 6 <br><br>";

$maChaineExo6 = "Hello World Go to PHP !!";
$reverse = strrev($maPhrase6);
echo $reverse."<br>";
$ramdom = str_shuffle($maPhrase6);
echo $ramdom."<br>";

echo "<br>exo 7 <br><br>";

$exo7 ="Hello, nous apprenons PHP";
echo $exo7."<br>";
$delete = strip_tags($exo7);
echo $exo7."<br>";

echo "<br>exo 8 <br><br>";

$chaineExo8 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type
                  specimen book.";
$exo8 = str_pad("$chaineExo8",500);
echo $exo8."<br>";

echo "<br>exo 9 <br><br>";

$motExo9 = "carambole";
$split9 = str_split($motExo9);
foreach ($split9 as $item){
    echo "$item <br>";
}

echo "<br>exo 10 <br><br>";

$chaineExo10 = "Hello mika !!";
$replace10 = str_ireplace("mika","World",$chaineExo10);
echo $replace10."<br>";

echo "<br>exo 11 <br><br>";

$chaineExo11 = "ma chaine test pour l'exo 11";
$search = "test";
$recherche = stripos($chaineExo11, $search);
if($recherche !== false){
    echo "le mot test et bien dans la chaine<br>";
}

echo "<br>exo 12 <br><br>";


function recherche12(){
    $chaineExo12 = "Hello World comment ca va ?";
    $search12 = "Hello";
    if($position = strpos($chaineExo12, $search12)){
        echo "le mot 'hello' est bien en debut de chaine";
    }
}
recherche12();


echo "<br>exo 13 <br><br>";

function recherche13(){
    $chaineExo13 = "Hello World comment ca va ?";
    $search13 = "?";
    if($position = strlen($chaineExo13) - strlen($search13)){
        echo "le caractere '?' est bien en fin de chaine";
    }
}
recherche13();










