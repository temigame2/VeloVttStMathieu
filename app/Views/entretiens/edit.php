<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un entretien</title>
</head>
<body>
    <h1>Modifier un entretien</h1>
    <form action="/entretiens/update/<?= esc($entretien['id']) ?>" method="post">
        <label>Vélo :
            <select name="velo_id" required>
                <option value="">-- Sélectionner un vélo --</option>
                <?php foreach ($velos as $velo): ?>
                    <option value="<?= esc($velo['id']) ?>" <?= $entretien['velo_id'] == $velo['id'] ? 'selected' : '' ?>>[<?= esc($velo['id']) ?>] <?= esc($velo['tag']) ?> - <?= esc($velo['modele']) ?></option>
                <?php endforeach; ?>
            </select>
        </label><br>
        <label>Pièce installée :
            <select name="piece2_id" required>
                <option value="">-- Sélectionner une pièce --</option>
                <?php foreach ($pieces as $piece): ?>
                    <option value="<?= esc($piece['id']) ?>" <?= $entretien['piece2_id'] == $piece['id'] ? 'selected' : '' ?>>[<?= esc($piece['id']) ?>] <?= esc($piece['tag']) ?> - <?= esc($piece['modele']) ?></option>
                <?php endforeach; ?>
            </select>
        </label><br>
        <label>Description : <input type="text" name="description" value="<?= esc($entretien['description']) ?>"></label><br>
        <label>Date : <input type="date" name="horodatage" value="<?= esc($entretien['horodatage']) ?>"></label><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="/entretiens">Retour à la liste</a>
</body>
</html>

