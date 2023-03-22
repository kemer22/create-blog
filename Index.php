<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'utilisateur', 'motdepasse');

// Récupération des articles
$articles = $bdd->query('SELECT * FROM articles ORDER BY date DESC');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Mon blog</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">À propos</a></li>
        </ul>
    </nav>
    <main>
        <?php foreach ($articles as $article): ?>
        <article>
            <h2><?= $article['titre'] ?></h2>
            <p class="date"><?= $article['date'] ?></p>
            <p class="contenu"><?= $article['contenu'] ?></p>
        </article>
        <?php endforeach ?>
    </main>
    <footer>
        <p>&copy; Mon blog 2023</p>
    </footer>
</body>
</html>
