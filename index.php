<?php
// On récupère la date et l'heure actuelles dans des variables
$dateActuelle  = date("d/m/Y");
$heureActuelle = date("H:i:s");
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
        <h1>WebBlog</h1>
        <p class="lead">
            Nous sommes le <?= $dateActuelle ?>,
            il est <?= $heureActuelle ?>.
        </p>
    </div>
</body>
</html>
