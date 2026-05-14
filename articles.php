<?php
// On importe nos fonctions utilitaires
require "functions.php";
logAction("Page articles consultée");
// Tableau multidimensionnel : un tableau d'articles,
// chaque article étant un tableau associatif
$articles = [
    [
        "id"      => 1,
        "titre"   => "Pourquoi PHP en 2026 ?",
        "contenu" => "PHP a beaucoup évolué depuis ses débuts. Aujourd'hui, c'est un langage moderne, rapide, et toujours largement utilise par Facebook, Wikipedia et WordPress. PHP 8.x apporte de vraies améliorations de performance.",
        "auteur"  => "Marie Dupont",
        "date"    => "2025-12-06"
    ],
    [
        "id"      => 2,
        "titre"   => "Découvrir Bootstrap en 30 minutes",
        "contenu" => "Bootstrap est un framework CSS qui permet de créer des interfaces propres rapidement, sans écrire de CSS à la main. Il propose une grille, des composants, et un design responsive prêt à l'emploi.",
        "auteur"  => "Pierre Martin",
        "date"    => "2025-12-04"
    ],
    [
        "id"      => 3,
        "titre"   => "Pourquoi Chelsea est la meilleure équipe du monde",
        "contenu" => "Chelsea est la meilleure équipe du monde car elle est la première à avoir remporté la Coupe du monde des clubs en 2025, après avoir battu le PSG en finale. 
        Elle détient également le record d'universalité en étant le seul club à avoir gagné toutes les coupes européennes majeures (Ligue des champions, Ligue Europa, Coupe des vainqueurs de coupe et Ligue Conférence). ",
        "auteur"  => "Basile Monier",
        "date"    => "2026-02-15"
    ],
    [
        "id"      => 4,
        "titre"   => "Git pour les nuls (pour Zahara)",
        "contenu" => "add, commit, push, pull : voilà les 4 commandes qui couvrent 90% des cas d'usage. On voit comment les enchaîner pour partager son code en équipe.",
        "auteur"  => "Sophie Lemoine",
        "date"    => "2025-11-30"
    ],
    [
        "id"      => 5,
        "titre"   => "One Piece : plus grand manga de tous les temps ?",
        "contenu" => "One Piece est considéré comme le plus grand manga de l'histoire grâce à ses 600 millions d'exemplaires vendus dans le monde, ce qui en fait le plus vendu de tous les temps.  Son succès repose sur un univers riche et cohérent, une narration maîtrisée et une communauté de fans globale qui le soutient depuis sa création en 1997.",
        "auteur"  => "Eichiro Oda",
        "date"    => "2025-11-28"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>WebBlog — Articles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>WebBlog — Tous les articles</h1>
        <p><?= count($articles) ?> articles publiés.</p>
        <div class="row mt-4">
    <?php foreach ($articles as $article) : ?>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $article["titre"] ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Par <?= $article["auteur"] ?>
                        — <?= formaterDate($article["date"]) ?>
                    </h6>
                    <p class="card-text">
                        <?= genererExtrait($article["contenu"], 120) ?>
                    </p>
                    <p class="text-muted small">
                        <?= compterMots($article["contenu"]) ?> mots
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    </div>
</body>
</html>