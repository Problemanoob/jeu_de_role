<!DOCTYPE html>
<html>

<head>
	<title>Pardanotes - Identification requise</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
	<div id="container">
		<form action="catalogue.php" method="POST">
			<img src="connexion.png"><br><br>
			<Label for="username">Votre nom :</Label> <input type="text" placeholder="Entrer votre nom d'utilisateur"
				name="username" id="username" required><br> <Label for="username">Mot de passe : </Label><input
				type="password" placeholder="Entrer le mot de passe" name="password" id="password"
				required /><br /><br />
			<input type="reset" value="Annuler" /> <input type="submit" value='Se connecter' />
	</div>
	<footer>
		<p>Copyright 2023 - Tous droits réservés <br>Mentions légales - CGU - Nous contacter</p>
	</footer>
</body>

</html>