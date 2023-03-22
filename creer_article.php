<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'utilisateur', 'motdepasse');

// Vérification des données envoyées
if (isset($_POST['titre']) && isset($_POST['contenu'])) {
    // Insertion de l'article dans la base de données
    $req = $bdd->prepare('INSERT INTO articles (titre, contenu, date) VALUES (?, ?, NOW())');
    $req->execute(array($_POST['titre'], $_POST['contenu']));
}

// Redirection vers la page d'accueil
header('Location: index.php');
exit();
?>
