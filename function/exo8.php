<?php
/*
##Exercice 8 Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.
*/

$nbr1;
$nbr2;
$nbr3;


$faire_somme= function( $nbr1, $nbr2, $nbr3){
    $sum =  $nbr1+ $nbr2+ $nbr3 . '<br/>';
    echo $sum;
};

$faire_somme( 1,1,1);

$faire_somme( 4,4,4);

?>