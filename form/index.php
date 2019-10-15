<?php
/*
##Exercice 5 Créer un formulaire sur la page index.php avec :

    Une liste déroulante pour la civilité (Mr ou Mme)
    Un champ texte pour le nom
    Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.

##Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.



##Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

##Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.

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
    
<?php 

    if( isset($_POST)){
        
?>
    <form action=index.php method=POST>
        <input type=text id=nom name=nom placeholder=nom>
        <input type=text id=prenom name=prenom placeholder=prenom>
        <select id= civilite name=civilite>
            <option value= Mr>Mr</option>
            <option value= Mme>Mme</option>

        </select>
        <button type=submit>Envoyer</button>
    </form>

<?php
    } else {
        print_r( $_POST);  
    };
?>
</body>
</html>

