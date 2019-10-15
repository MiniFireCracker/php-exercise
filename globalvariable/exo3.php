<?php
setcookie('username', $_POST['username'],  time() + 365*24*3600); 
setcookie( 'password', $_POST['password'], time() + 365*24*3600); 

/*
##Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.

##Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.

##Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.

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
    <form action='exo3.php' method='post' >
        <input type= text id=username name=username placeholder=username>
        <input type=password id=password name=password placeholder=password>
        <button type=submit>Envoyer les données</button>
    </form>



</body>
</html>

