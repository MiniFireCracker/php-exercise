<?php
/*
#PHP - Les paramètres d'URL ##Exercice 1 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean
/*
##Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
##Exercice 3 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016*/



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action=index.php method=GET>
        <input type=text id=nom name=nom placeholder=nom>
        <input type=text id=prenom name=prenom placeholder=prenom>
        <input type=number id=age name=age>
        <label for=dateDebut>
        <input type=date id=dateDebut name=dateDebut>
        <label for=dateFin>
        <input type=date id=dateFin name=dateFin>
        <button type=submit>Envoyer</button>
    </form>

    <p>Welcome to you <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> </p>
    <p> Let's check how old you are...</p>
    <?php 
    if ( isset($_GET['age'])){ 
    ?>
        <p> You are <?php echo $_GET['age']; ?> </p>
    <?php } else{ echo "Let s be honnest here, if you didn t tell me it is because you are some old hag, huh ?"; }; ?>

    <p>exo 3</p>
    <?php print_r($_GET); ?>
</body>
</html>