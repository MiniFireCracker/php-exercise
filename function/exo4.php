<?php
/*
##Exercice 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux
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