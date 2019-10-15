<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Comment c'est trop cool... Je suis une page et je m'appelle autre</h1>

<h2>Et toi tu t'appelles comment? </h2>

<h3>Moi? Ben, je sais pas...</h3>

<h4>Je vais juste t'appeller <?php echo $_SESSION['$prenom'] . ' ' . $_SESSION['$nom'] ; ?>  et dire que tu as <?php echo $_SESSION['$age']; ?> ans.</h4>
<h5>J'avais justement sauvegarder ces variables pour un cas comme celui ci, au cas où...</h5>
</body>
</html>