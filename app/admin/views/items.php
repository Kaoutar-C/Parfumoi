<section>
    <h2>Gestion des annonces</h2>

    <p><a href="/admin/items?action=add">Ajouter une annonce</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Vendeur</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= htmlspecialchars($item['label']) ?></td>
                <td><?= htmlspecialchars($item['brand_name'] ?? '') ?></td>
                <td><?= htmlspecialchars($item['prix']) ?> €</td>
                <td><?= htmlspecialchars($item['status']) ?></td>
                <td>
                    <?= htmlspecialchars($item['firstname'] ?? '') ?>
                    <?= htmlspecialchars($item['lastname'] ?? '') ?>
                </td>
                <td>
                    <a href="/admin/items?action=edit&id=<?= $item['id'] ?>">Modifier</a> |
                    <a href="/admin/items?action=publish&id=<?= $item['id'] ?>">Activer</a> |
                    <a href="/admin/items?action=disable&id=<?= $item['id'] ?>">Désactiver</a> |
                    <a href="/admin/items?action=delete&id=<?= $item['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
