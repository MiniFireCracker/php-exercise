<?php
/*
#PHP - Les formulaires Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....) ##Exercice 1 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
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
    <form action=user.php method=GET>
        <input type=text id=nom name=nom placeholder=nom>
        <input type=text id=prenom name=prenom placeholder=prenom>
        <button type=submit>Envoyer</button>
    </form>
</body>
</html>