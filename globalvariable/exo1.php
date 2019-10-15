<?php
session_start();
$_SESSION['prenom']= "Marie";
$_SESSION['nom']= "Antoinette";
$_SESSION['age']= 800;
/*
#PHP - Variables superglobales, sessions et cookies
Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS. 
##Exercice 1 Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur



    ##Exercice 2 Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
   <h1>Hey dude!</h1>
   <h2>I've got some infos for you </h2>

    <ul>
        <li>Here is your user agent: <?php echo $_SERVER ['HTTP_USER_AGENT'] ;?></li>
        <li>Here is your IP adress: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Here is the name of the server: <?php echo $_SERVER['SERVER_NAME'];?> </li>
    </ul>
    <a href=/autre_page.php>Lien vers une autre page</a>



</body>
</html>

