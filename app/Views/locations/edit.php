<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une location</title>
</head>
<body>
    <h1>Modifier une location</h1>
    <form action="/locations/update/<?= esc($location['id']) ?>" method="post">
        <label>Vélo :
            <select name="velo_id" required>
                <option value="">-- Sélectionner un vélo --</option>
                <?php foreach ($velos as $velo): ?>
                    <option value="<?= esc($velo['id']) ?>" <?= $location['velo_id'] == $velo['id'] ? 'selected' : '' ?>>[<?= esc($velo['id']) ?>] <?= esc($velo['tag']) ?> - <?= esc($velo['modele']) ?></option>
                <?php endforeach; ?>
            </select>
        </label><br>
        <label>Nom : <input type="text" name="nom" value="<?= esc($location['nom']) ?>" required></label><br>
        <label>Prénom : <input type="text" name="prenom" value="<?= esc($location['prenom']) ?>" required></label><br>
        <label>Prix annuel : <input type="number" step="0.01" name="prix_annuel" value="<?= esc($location['prix_annuel']) ?>" required></label><br>
        <label>Prix mensuel : <input type="number" step="0.01" name="prix_mensuel" value="<?= esc($location['prix_mensuel']) ?>" required></label><br>
        <label>Date début : <input type="date" name="date_debut" value="<?= esc($location['date_debut']) ?>" required></label><br>
        <label>Date fin : <input type="date" name="date_fin" value="<?= esc($location['date_fin']) ?>" required></label><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="/locations">Retour à la liste</a>
</body>
</html>

