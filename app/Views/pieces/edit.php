<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une pièce</title>
</head>
<body>
    <h1>Modifier une pièce</h1>
    <form action="/pieces/update/<?= esc($piece['id']) ?>" method="post">
        <label>Tag : <input type="text" name="tag" value="<?= esc($piece['tag']) ?>"></label><br>
        <label>Modèle : <input type="text" name="modele" value="<?= esc($piece['modele']) ?>"></label><br>
        <label>Prix achat : <input type="number" name="prix_achat" value="<?= esc($piece['prix_achat']) ?>"></label><br>
        <label>Marque pièce ID : <input type="number" name="marque_piece_id" value="<?= esc($piece['marque_piece_id']) ?>"></label><br>
        <label>Type pièce ID : <input type="number" name="type_piece_id" value="<?= esc($piece['type_piece_id']) ?>"></label><br>
        <label>Prix revente : <input type="number" name="prix_revente" value="<?= esc($piece['prix_revente']) ?>"></label><br>
        <label>URL : <input type="text" name="URL" value="<?= esc($piece['URL']) ?>"></label><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="/pieces">Retour à la liste</a>
</body>
</html>

