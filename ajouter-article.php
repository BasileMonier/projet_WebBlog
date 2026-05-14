<?php
require "functions.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>WebBlog — Ajouter un article</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter un article</h1>

        <form method="POST" action="ajouter-article.php" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Catégorie</label>
                <select name="categorie" class="form-select">
                    <option value="">-- Choisir --</option>
                    <option value="Technologie">Technologie</option>
                    <option value="Voyage">Voyage</option>
                    <option value="Cuisine">Cuisine</option>
                    <option value="Lifestyle">Lifestyle</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Contenu</label>
                <textarea name="contenu" class="form-control" rows="6"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tags (séparés par des virgules)</label>
                <input type="text" name="tags" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>
</body>
</html>