<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un vélo</title>
</head>
<body>
    <h1>Ajouter un vélo</h1>
    <form action="/velos/store" method="post">
        <label>Tag : <input type="text" name="tag"></label><br>
        <label>Modèle : <input type="text" name="modele"></label><br>
        <label>Gravage : <input type="text" name="gravage"></label><br>
        <label>Date achat : <input type="date" name="date_achat"></label><br>
        <label>Prix achat : <input type="number" step="0.01" name="prix_achat"></label><br>
        <label>Taille :
            <select name="taille_id" id="taille_select">
                <?php foreach ($tailles as $taille): ?>
                    <option value="<?= esc($taille['id']) ?>"><?= esc($taille['lib']) ?></option>
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
                    <option value="<?= esc($couleur['id']) ?>"><?= esc($couleur['lib']) ?></option>
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
                    <option value="<?= esc($marque['id']) ?>"><?= esc($marque['lib']) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="checkbox" id="new_marque_cb" onclick="
                document.getElementById('marque_select').style.display=this.checked?'none':'inline';
                document.getElementById('new_marque').style.display=this.checked?'inline':'none';
            ">
            <label for="new_marque_cb">Nouvelle marque</label>
            <input type="text" name="new_marque" id="new_marque" style="display:none;" placeholder="Entrer une nouvelle marque">
        </label><br>
        <label>Numéro série : <input type="text" name="numero_serie"></label><br>
        <label>Prix location : <input type="number" step="0.01" name="prix_location"></label><br>
        <button type="submit">Ajouter</button>
    </form>
    <a href="/velos">Retour à la liste</a>
</body>
</html>
