<?php
// On récupère la date et l'heure actuelles dans des variables
$dateActuelle  = date("d/m/Y");
$heureActuelle = date("H:i:s");
$heure = date("H");
if ($heure < 12) {
    $message = "Bonjour ! Bienvenue sur WebBlog";
} elseif ($heure < 18) {
    $message = "Bon après-midi ! Bienvenue sur WebBlog";
} else {
    $message = "Bonsoir ! Bienvenue sur WebBlog";
}
$article = [
    "Pourquoi PHP en 2026 ? ",
    "Découvrir Bootstrape en 30 minutes",
    "Pourquoi Chelsea est la meilleure équipe du monde ?",
    "Git pour les nuls (pour Zahara)",
    "One Piece : plus grand manga de tous les temps ?",
]
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>WebBlog — Accueil</title>
    <!-- Bootstrap via CDN, pas besoin de télécharger -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1><?= $message ?></h1>
        <p class="lead">
            Nous sommes le <?= $dateActuelle ?>,
            il est <?= $heureActuelle ?>.
        </p>
        <div class="row">
            <?php foreach ($article as $titre) : ?>
                <div class=""col-md-6 mb-3>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $titre ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
