<?php 
/*##Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable
*/

$a= 100;
$b= 68;

while($a>10){
    $product= $a*$b;
    echo 'valeur de $a: '.$a. ' valeur produit de a et b: ' . $product . '<br/>';
    $a--;
}

?>

