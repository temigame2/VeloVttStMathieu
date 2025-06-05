<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des entretiens</title>
</head>
<body>
    <h1>Liste des entretiens</h1>
    <a href="/entretiens/create">Ajouter un entretien</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Description</th>
                <th>Vélo</th>
                <th>Pièce installée</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($entretiens) && is_array($entretiens)): ?>
            <?php foreach ($entretiens as $entretien): ?>
                <tr>
                    <td><?= esc($entretien['id']) ?></td>
                    <td><?= esc($entretien['horodatage']) ?></td>
                    <td><?= esc($entretien['description']) ?></td>
                    <td><?= esc($entretien['velo_id']) ?></td>
                    <td><?= esc($entretien['piece2_id']) ?></td>
                    <td>
                        <a href="/entretiens/show/<?= esc($entretien['id']) ?>">Voir</a> |
                        <a href="/entretiens/edit/<?= esc($entretien['id']) ?>">Modifier</a> |
                        <a href="/entretiens/delete/<?= esc($entretien['id']) ?>" onclick="return confirm('Supprimer cet entretien ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">Aucun entretien trouvé.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

