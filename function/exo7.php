<?php
/*
##Exercice 7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
*/


$genres= array('homme', 'femme');
$maturites= array('mineur', 'majeur');

$identify_sex_and_maturity = function( $genre, $maturite){

    if ($genre== $genres[0] && $maturite == $maturites[0]){
        echo    "Vous etes un" . $genre[0] . " et vous etes " . $maturites[0];

    }elseif($genre== $genres[0] && $maturite == $maturites[1]){
        echo    "Vous etes un" . $genre[0] . " et vous etes " . $maturites[1];
    }
    elseif ($genre== $genres[1] && $maturite == $maturites[0]){
        echo    "Vous etes une" . $genre[1] . " et vous etes " . $maturites[0];

    }elseif($genre== $genres[1] && $maturite == $maturites[1]){
        echo    "Vous etes une" . $genre[1] . " et vous etes " . $maturites[1];
    }
};

$identify_sex_and_maturity( 'femme', 'majeur');


?>