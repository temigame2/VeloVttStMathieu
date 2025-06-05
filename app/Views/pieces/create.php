<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une pièce</title>
</head>
<body>
    <h1>Ajouter une pièce</h1>
    <form action="/pieces/store" method="post">
        <label>Tag : <input type="text" name="tag"></label><br>
        <label>Modèle : <input type="text" name="modele"></label><br>
        <label>Prix achat : <input type="number" name="prix_achat"></label><br>
        <label>Marque pièce ID : <input type="number" name="marque_piece_id"></label><br>
        <label>Type pièce ID : <input type="number" name="type_piece_id"></label><br>
        <label>Prix revente : <input type="number" name="prix_revente"></label><br>
        <label>URL : <input type="text" name="URL"></label><br>
        <button type="submit">Ajouter</button>
    </form>
    <a href="/pieces">Retour à la liste</a>
</body>
</html>

