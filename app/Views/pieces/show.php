<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail de la pièce</title>
</head>
<body>
    <h1>Détail de la pièce</h1>
    <ul>
        <li><strong>ID :</strong> <?= esc($piece['id']) ?></li>
        <li><strong>Tag :</strong> <?= esc($piece['tag']) ?></li>
        <li><strong>Modèle :</strong> <?= esc($piece['modele']) ?></li>
        <li><strong>Prix achat :</strong> <?= esc($piece['prix_achat']) ?></li>
        <li><strong>Marque pièce ID :</strong> <?= esc($piece['marque_piece_id']) ?></li>
        <li><strong>Type pièce ID :</strong> <?= esc($piece['type_piece_id']) ?></li>
        <li><strong>Prix revente :</strong> <?= esc($piece['prix_revente']) ?></li>
        <li><strong>URL :</strong> <?= esc($piece['URL']) ?></li>
    </ul>
    <a href="/pieces">Retour à la liste</a>
    <a href="/pieces/edit/<?= esc($piece['id']) ?>">Modifier</a>
    <a href="/pieces/delete/<?= esc($piece['id']) ?>" onclick="return confirm('Supprimer cette pièce ?');">Supprimer</a>
</body>
</html>

