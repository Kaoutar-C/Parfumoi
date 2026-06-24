<h1>Annonces en attente</h1>

<section>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Vendeur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['label']) ?></td>
                    <td><?= htmlspecialchars($item['brand_name'] ?? '') ?></td>
                    <td><?= htmlspecialchars($item['price']) ?> €</td>
                    <td><?= htmlspecialchars($item['firstname'] ?? '') ?> <?= htmlspecialchars($item['lastname'] ?? '') ?></td>
                    <td>
                        <a href="?publish=<?= $item['id'] ?>" class="btn-activer">Accepter</a>
                        <a href="?delete=<?= $item['id'] ?>" class="btn-supprimer" onclick="return confirm('Refuser et supprimer ?')">Refuser</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>