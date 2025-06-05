<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des vélos</title>
</head>
<body>
    <h1>Liste des vélos</h1>
    <form id="searchForm">
        <label>Tag : <input type="text" id="search_tag"></label>
        <label>Marque : <input type="text" id="search_marque"></label>
        <label>Taille : <input type="text" id="search_taille"></label>
        <label>Locataire actuel : <input type="text" id="search_locataire"></label>
    </form>
    <a href="/velos/create">Ajouter un vélo</a>
    <table border="1" cellpadding="5" cellspacing="0" id="velosTable">
        <thead>
            <tr>
                <th>Tag</th>
                <th>Marque</th>
                <th>Taille</th>
                <th>Modèle</th>
                <th>Couleur</th>
                <th>Date achat</th>
                <th>Numéro de série</th>
                <th>Gravage</th>
                <th>Prix location</th>
                <th>Locataire actuel</th>
                <th>Prix achat</th>
                <th>Prix de revient</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($velos) && is_array($velos)): ?>
            <?php foreach ($velos as $velo): ?>
                <tr>
                    <td><?= esc($velo['tag']) ?></td>
                    <td><?= esc($velo['marque']) ?></td>
                    <td><?= esc($velo['taille']) ?></td>
                    <td><?= esc($velo['modele']) ?></td>
                    <td><?= esc($velo['couleur']) ?></td>
                    <td><?= esc($velo['date_achat']) ?></td>
                    <td><?= esc($velo['numero_serie']) ?></td>
                    <td><?= esc($velo['gravage']) ?></td>
                    <td><?= esc($velo['prix_location']) ?></td>
                    <td><?= esc(($velo['nom_locataire'] ?? '') . ' ' . ($velo['prenom_locataire'] ?? '')) ?></td>
                    <td><?= esc($velo['prix_achat']) ?></td>
                    <td><?= esc($velo['prix_reviens']) ?></td>
                    <td>
                        <a href="/velos/show/<?= esc($velo['id']) ?>">Voir</a> |
                        <a href="/velos/edit/<?= esc($velo['id']) ?>">Modifier</a> |
                        <a href="/velos/delete/<?= esc($velo['id']) ?>" onclick="return confirm('Supprimer ce vélo ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="13">Aucun vélo trouvé.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
    <script>
    const searchInputs = [
        document.getElementById('search_tag'),
        document.getElementById('search_marque'),
        document.getElementById('search_taille'),
        document.getElementById('search_locataire')
    ];
    const table = document.getElementById('velosTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    function filterTable() {
        const tag = searchInputs[0].value.toLowerCase();
        const marque = searchInputs[1].value.toLowerCase();
        const taille = searchInputs[2].value.toLowerCase();
        const locataire = searchInputs[3].value.toLowerCase();
        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            const tagVal = cells[0].textContent.toLowerCase();
            const marqueVal = cells[1].textContent.toLowerCase();
            const tailleVal = cells[2].textContent.toLowerCase();
            const locataireVal = cells[9].textContent.toLowerCase();
            if (
                tagVal.indexOf(tag) !== -1 &&
                marqueVal.indexOf(marque) !== -1 &&
                tailleVal.indexOf(taille) !== -1 &&
                locataireVal.indexOf(locataire) !== -1
            ) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }
    searchInputs.forEach(input => input.addEventListener('input', filterTable));
    </script>
    <br>
    <a href="/">Retour à l'accueil</a>
</body>
</html>
