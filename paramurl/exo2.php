<?php
/*
##Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
*/




$string_manip = function($string){
//    echo string;
    return 'My string: ' . $string . '<br/>';
};

print $string_manip('Il était un petit navire qui n\'avait ja ja jamais navigué ohé ohé') ;
print $string_manip ('Saucisse va!')



?>