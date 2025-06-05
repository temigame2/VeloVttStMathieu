<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des pièces</title>
</head>
<body>
    <h1>Liste des pièces</h1>
    <a href="/pieces/create">Ajouter une pièce</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tag</th>
                <th>Modèle</th>
                <th>Prix achat</th>
                <th>Prix revente</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($pieces) && is_array($pieces)): ?>
            <?php foreach ($pieces as $piece): ?>
                <tr>
                    <td><?= esc($piece['id']) ?></td>
                    <td><?= esc($piece['tag']) ?></td>
                    <td><?= esc($piece['modele']) ?></td>
                    <td><?= esc($piece['prix_achat']) ?></td>
                    <td><?= esc($piece['prix_revente']) ?></td>
                    <td>
                        <a href="/pieces/show/<?= esc($piece['id']) ?>">Voir</a> |
                        <a href="/pieces/edit/<?= esc($piece['id']) ?>">Modifier</a> |
                        <a href="/pieces/delete/<?= esc($piece['id']) ?>" onclick="return confirm('Supprimer cette pièce ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">Aucune pièce trouvée.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

