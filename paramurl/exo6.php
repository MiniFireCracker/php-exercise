<?php
/*
##Exercice 6 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101

*/

$bjr_personnalise= function($nom, $prenom,$age){
    echo "Bonjour " . $nom . " " . $prenom . " , tu as " . $age . " ans.";

};

$bjr_personnalise('John', 'Smith', 602);


?>