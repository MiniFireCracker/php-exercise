<?php
/*
##Exercice 4 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP

*/

$nb_manip= function( $nbr1, $nbr2 ){
    if( $nbr1>$nbr2){
    
    echo $nbr1 . " est plus grand que " . $nbr2 .'<br/>';
    }
    elseif( $nbr1<$nbr2){
        echo $nbr1 . " est plus petit que " . $nbr2 .'<br/>';
    }
    elseif( $nbr1 == $nbr2){
        echo $nbr1 . " est égal à " . $nbr2.'<br/>' ;
    }
};

$nb_manip(22,680);

$nb_manip(2,0);

$nb_manip( 40,40);



?>