<!DOCTYPE html>
<html>
<head>
	<title>Créer un nouvel article</title>
</head>
<body>
	<h1>Créer un nouvel article</h1>
	<form action="submit_article.php" method="POST">
		<label for="titre">Titre :</label>
		<input type="text" name="titre" id="titre" required><br><br>
		
		<label for="contenu">Contenu :</label><br>
		<textarea name="contenu" id="contenu" rows="10" cols="50" required></textarea><br><br>

		<label for="auteur">Auteur :</label>
		<input type="text" name="auteur" id="auteur" required><br><br>

		<input type="submit" value="Publier">
	</form>
</body>
</html>
