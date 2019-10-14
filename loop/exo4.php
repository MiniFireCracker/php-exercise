<?php

/*
##Exercice 4 Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur

*/

$a=1;

while($a<10){
    echo $a . '<br/>';
    $half_of_a= $a/2;
    $a += $half_of_a;

}


?>