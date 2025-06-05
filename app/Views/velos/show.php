<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail du vélo</title>
</head>
<body>
    <h1>Détail du vélo</h1>
    <ul>
        <li><strong>ID :</strong> <?= esc($velo['id']) ?></li>
        <li><strong>Tag :</strong> <?= esc($velo['tag']) ?></li>
        <li><strong>Modèle :</strong> <?= esc($velo['modele']) ?></li>
        <li><strong>Gravage :</strong> <?= esc($velo['gravage']) ?></li>
        <li><strong>Date achat :</strong> <?= esc($velo['date_achat']) ?></li>
        <li><strong>Prix achat :</strong> <?= esc($velo['prix_achat']) ?></li>
        <li><strong>Prix location :</strong> <?= esc($velo['prix_location']) ?></li>
        <li><strong>Nom locataire :</strong> <?= esc($velo['nom_locataire']) ?></li>
        <li><strong>Prénom locataire :</strong> <?= esc($velo['prenom_locataire']) ?></li>
        <li><strong>Taille :</strong> <?= esc($velo['taille'] ?? $velo['taille_id']) ?></li>
        <li><strong>Couleur :</strong> <?= esc($velo['couleur'] ?? $velo['couleur_id']) ?></li>
        <li><strong>Marque :</strong> <?= esc($velo['marque'] ?? $velo['marque_velo_id']) ?></li>
        <li><strong>Numéro série :</strong> <?= esc($velo['numero_serie']) ?></li>
        <li><strong>Début location :</strong> <?= esc($velo['debut_location']) ?></li>
        <li><strong>Fin location :</strong> <?= esc($velo['fin_location']) ?></li>
    </ul>
    <a href="/velos">Retour à la liste</a>
    <a href="/velos/edit/<?= esc($velo['id']) ?>">Modifier</a>
    <a href="/velos/delete/<?= esc($velo['id']) ?>" onclick="return confirm('Supprimer ce vélo ?');">Supprimer</a>
</body>
</html>
