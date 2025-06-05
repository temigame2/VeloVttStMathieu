<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail de l'entretien</title>
</head>
<body>
    <h1>Détail de l'entretien</h1>
    <ul>
        <li><strong>ID :</strong> <?= esc($entretien['id']) ?></li>
        <li><strong>Date :</strong> <?= esc($entretien['horodatage']) ?></li>
        <li><strong>Description :</strong> <?= esc($entretien['description']) ?></li>
        <li><strong>Vélo ID :</strong> <?= esc($entretien['velo_id']) ?></li>
        <li><strong>Pièce installée ID :</strong> <?= esc($entretien['piece2_id']) ?></li>
    </ul>
    <a href="/entretiens">Retour à la liste</a>
    <a href="/entretiens/edit/<?= esc($entretien['id']) ?>">Modifier</a>
    <a href="/entretiens/delete/<?= esc($entretien['id']) ?>" onclick="return confirm('Supprimer cet entretien ?');">Supprimer</a>
</body>
</html>

