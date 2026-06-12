<section>
    <h2>Résumé général</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Indicateur</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Annonces</td>
            <td><?= $totalItems ?></td>
        </tr>
        <tr>
            <td>Utilisateurs</td>
            <td><?= $totalOperators ?></td>
        </tr>
        <tr>
            <td>Messages</td>
            <td><?= $totalMessages ?></td>
        </tr>
        <tr>
            <td>Comptes bloqués</td>
            <td><?= $totalBlockedOperators ?></td>
        </tr>
    </table>
</section>

<section>
    <h2>Actions rapides</h2>

    <ul>
        <li><a href="/admin/items?action=add">Ajouter une annonce</a></li>
        <li><a href="/admin/items">Gérer les annonces</a></li>
        <li><a href="/admin/operators?action=add">Ajouter un utilisateur</a></li>
        <li><a href="/admin/operators">Gérer les utilisateurs</a></li>
        <li><a href="/admin/brands">Gérer les marques</a></li>
        <li><a href="/admin/messages">Voir les messages</a></li>
    </ul>
</section>

<section>
    <h2>Dernières annonces</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Vendeur</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($lastItems as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= htmlspecialchars($item['label']) ?></td>
                <td><?= htmlspecialchars($item['prix']) ?> €</td>
                <td><?= htmlspecialchars($item['status']) ?></td>
                <td>
                    <?= htmlspecialchars($item['firstname'] ?? '') ?>
                    <?= htmlspecialchars($item['lastname'] ?? '') ?>
                </td>
                <td>
                    <a href="/admin/items?action=edit&id=<?= $item['id'] ?>">Modifier</a> |
                    <a href="/admin/items?action=disable&id=<?= $item['id'] ?>">Désactiver</a> |
                    <a href="/admin/items?action=delete&id=<?= $item['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
