<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail de la location</title>
</head>
<body>
    <h1>Détail de la location</h1>
    <ul>
        <li><strong>ID :</strong> <?= esc($location['id']) ?></li>
        <li><strong>Vélo ID :</strong> <?= esc($location['velo_id']) ?></li>
        <li><strong>Nom :</strong> <?= esc($location['nom']) ?></li>
        <li><strong>Prénom :</strong> <?= esc($location['prenom']) ?></li>
        <li><strong>Prix annuel :</strong> <?= esc($location['prix_annuel']) ?></li>
        <li><strong>Prix mensuel :</strong> <?= esc($location['prix_mensuel']) ?></li>
        <li><strong>Date début :</strong> <?= esc($location['date_debut']) ?></li>
        <li><strong>Date fin :</strong> <?= esc($location['date_fin']) ?></li>
    </ul>
    <a href="/locations">Retour à la liste</a>
    <a href="/locations/edit/<?= esc($location['id']) ?>">Modifier</a>
    <a href="/locations/delete/<?= esc($location['id']) ?>" onclick="return confirm('Supprimer cette location ?');">Supprimer</a>
</body>
</html>

