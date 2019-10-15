<?php
/*
##Exercice 2 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.
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
    <form action=user.php method=POST>
        <input type=text id=nom name=nom placeholder=nom>
        <input type=text id=prenom name=prenom placeholder=prenom>
        <button type=submit>Envoyer</button>
    </form>
</body>
</html>