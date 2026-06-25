<h1>Annonces en attente</h1>

<section>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Batch code</th>
                    <th>Vendeur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td data-label="Nom"><?= htmlspecialchars($item['label']) ?></td>
                    <td data-label="Marque"><?= htmlspecialchars($item['brand_name'] ?? '') ?></td>
                    <td data-label="Prix"><?= htmlspecialchars($item['price']) ?> €</td>
                    <td data-label="Batch code"><?= htmlspecialchars($item['batch_code'] ?? 'Non renseigné') ?></td>
                    <td data-label="Vendeur"><?= htmlspecialchars($item['firstname'] ?? '') ?> <?= htmlspecialchars($item['lastname'] ?? '') ?></td>
                    <td data-label="Actions">
                        <a href="?publish=<?= $item['id'] ?>" class="btn-activer">Accepter</a>
                        <a href="?delete=<?= $item['id'] ?>" class="btn-supprimer" onclick="return confirm('Refuser et supprimer ?')">Refuser</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>