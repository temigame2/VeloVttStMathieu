<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des locations</title>
</head>
<body>
    <h1>Liste des locations</h1>
    <a href="/locations/create">Ajouter une location</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vélo ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Prix annuel</th>
                <th>Prix mensuel</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($locations) && is_array($locations)): ?>
            <?php foreach ($locations as $location): ?>
                <tr>
                    <td><?= esc($location['id']) ?></td>
                    <td><?= esc($location['velo_id']) ?></td>
                    <td><?= esc($location['nom']) ?></td>
                    <td><?= esc($location['prenom']) ?></td>
                    <td><?= esc($location['prix_annuel']) ?></td>
                    <td><?= esc($location['prix_mensuel']) ?></td>
                    <td><?= esc($location['date_debut']) ?></td>
                    <td><?= esc($location['date_fin']) ?></td>
                    <td>
                        <a href="/locations/show/<?= esc($location['id']) ?>">Voir</a> |
                        <a href="/locations/edit/<?= esc($location['id']) ?>">Modifier</a> |
                        <a href="/locations/delete/<?= esc($location['id']) ?>" onclick="return confirm('Supprimer cette location ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="9">Aucune location trouvée.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

