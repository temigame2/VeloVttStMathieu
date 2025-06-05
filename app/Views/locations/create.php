<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une location</title>
</head>
<body>
    <h1>Ajouter une location</h1>
    <form action="/locations/store" method="post">
        <label>Vélo :
            <select name="velo_id" required>
                <option value="">-- Sélectionner un vélo --</option>
                <?php foreach ($velos as $velo): ?>
                    <option value="<?= esc($velo['id']) ?>">[<?= esc($velo['id']) ?>] <?= esc($velo['tag']) ?> - <?= esc($velo['modele']) ?></option>
                <?php endforeach; ?>
            </select>
        </label><br>
        <label>Nom : <input type="text" name="nom" required></label><br>
        <label>Prénom : <input type="text" name="prenom" required></label><br>
        <label>Prix annuel : <input type="number" step="0.01" name="prix_annuel" required></label><br>
        <label>Prix mensuel : <input type="number" step="0.01" name="prix_mensuel" required></label><br>
        <label>Date début : <input type="date" name="date_debut" required></label><br>
        <label>Date fin : <input type="date" name="date_fin" required></label><br>
        <button type="submit">Ajouter</button>
    </form>
    <a href="/locations">Retour à la liste</a>
</body>
</html>

