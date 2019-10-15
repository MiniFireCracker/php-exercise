<?php
/*
##Exercice 6 Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".
*/

$bjr_personnalise= function($nom, $prenom,$age){
    echo "Bonjour " . $nom . " " . $prenom . " , tu as " . $age . " ans.";

};

$bjr_personnalise('John', 'Smith', 602);


?>