<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un vélo</title>
</head>
<body>
    <h1>Modifier un vélo</h1>
    <form action="/velos/update/<?= esc($velo['id']) ?>" method="post">
        <label>Tag : <input type="text" name="tag" value="<?= esc($velo['tag']) ?>"></label><br>
        <label>Modèle : <input type="text" name="modele" value="<?= esc($velo['modele']) ?>"></label><br>
        <label>Gravage : <input type="text" name="gravage" value="<?= esc($velo['gravage']) ?>"></label><br>
        <label>Date achat : <input type="date" name="date_achat" value="<?= esc($velo['date_achat']) ?>"></label><br>
        <label>Prix achat : <input type="number" step="0.01" name="prix_achat" value="<?= esc($velo['prix_achat']) ?>"></label><br>
        <label>Prix location : <input type="number" step="0.01" name="prix_location" value="<?= esc($velo['prix_location']) ?>"></label><br>
        <label>Taille :
            <select name="taille_id" id="taille_select">
                <?php foreach ($tailles as $taille): ?>
                    <option value="<?= esc($taille['id']) ?>" <?= $velo['taille_id'] == $taille['id'] ? 'selected' : '' ?>><?= esc($taille['lib']) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="checkbox" id="new_taille_cb" onclick="
                document.getElementById('taille_select').style.display=this.checked?'none':'inline';
                document.getElementById('new_taille').style.display=this.checked?'inline':'none';
            ">
            <label for="new_taille_cb">Nouvelle taille</label>
            <input type="text" name="new_taille" id="new_taille" style="display:none;" placeholder="Entrer une nouvelle taille">
        </label><br>
        <label>Couleur :
            <select name="couleur_id" id="couleur_select">
                <?php foreach ($couleurs as $couleur): ?>
                    <option value="<?= esc($couleur['id']) ?>" <?= $velo['couleur_id'] == $couleur['id'] ? 'selected' : '' ?>><?= esc($couleur['lib']) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="checkbox" id="new_couleur_cb" onclick="
                document.getElementById('couleur_select').style.display=this.checked?'none':'inline';
                document.getElementById('new_couleur').style.display=this.checked?'inline':'none';
            ">
            <label for="new_couleur_cb">Nouvelle couleur</label>
            <input type="text" name="new_couleur" id="new_couleur" style="display:none;" placeholder="Entrer une nouvelle couleur">
        </label><br>
        <label>Marque :
            <select name="marque_velo_id" id="marque_select">
                <?php foreach ($marques as $marque): ?>
                    <option value="<?= esc($marque['id']) ?>" <?= $velo['marque_velo_id'] == $marque['id'] ? 'selected' : '' ?>><?= esc($marque['lib']) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="checkbox" id="new_marque_cb" onclick="
                document.getElementById('marque_select').style.display=this.checked?'none':'inline';
                document.getElementById('new_marque').style.display=this.checked?'inline':'none';
            ">
            <label for="new_marque_cb">Nouvelle marque</label>
            <input type="text" name="new_marque" id="new_marque" style="display:none;" placeholder="Entrer une nouvelle marque">
        </label><br>
        <label>Numéro série : <input type="text" name="numero_serie" value="<?= esc($velo['numero_serie']) ?>"></label><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="/velos">Retour à la liste</a>
</body>
</html>
