<h1>Annonces</h1>

<?php
$paliers = [
    1 => '0% - 25%',
    2 => '25% - 50%',
    3 => '50% - 70%',
    4 => '70% - 80%',
    5 => '80% - 90%',
    6 => '90% - 100%',
];
?>

<?php if ($item_edit): ?>
<section>
    <h2>Modifier l'annonce</h2>
    <form method="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $item_edit['id'] ?>">
        <input type="hidden" name="brands_id" value="<?= $item_edit['brands_id'] ?>">
        <input type="hidden" name="category_id" value="<?= $item_edit['category_id'] ?>">
        <input type="hidden" name="theme_id" value="<?= $item_edit['theme_id'] ?>">
        <input type="hidden" name="operator_id" value="<?= $item_edit['operator_id'] ?>">
        <input type="text" name="slug" value="<?= htmlspecialchars($item_edit['slug']) ?>" placeholder="Slug">
        <input type="text" name="label" value="<?= htmlspecialchars($item_edit['label']) ?>" placeholder="Nom">
        <input type="number" name="price" value="<?= htmlspecialchars($item_edit['price']) ?>" placeholder="Prix">
        <textarea name="short_description" placeholder="Description courte"><?= htmlspecialchars($item_edit['short_description'] ?? '') ?></textarea>
        <input type="text" name="batch_code" value="<?= htmlspecialchars($item_edit['batch_code'] ?? '') ?>" placeholder="Batch code">
        <select name="item_condition">
            <option value="neuf" <?= $item_edit['item_condition'] === 'neuf' ? 'selected' : '' ?>>Neuf</option>
            <option value="comme_neuf" <?= $item_edit['item_condition'] === 'comme_neuf' ? 'selected' : '' ?>>Comme neuf</option>
            <option value="utilise" <?= $item_edit['item_condition'] === 'utilise' ? 'selected' : '' ?>>Utilisé</option>
        </select>
        <input type="number" name="quantity" value="<?= htmlspecialchars($item_edit['quantity'] ?? '') ?>" placeholder="Taille du flacon (ml)">
        <select name="status">
            <option value="draft" <?= $item_edit['status'] === 'draft' ? 'selected' : '' ?>>Brouillon</option>
            <option value="published" <?= $item_edit['status'] === 'published' ? 'selected' : '' ?>>Publié</option>
        </select>
        <button type="submit">Enregistrer</button>
    </form>
</section>
<?php endif; ?>

<section>
    <h2>Liste des annonces</h2>
    <form method="get">
        <input type="text" name="search" placeholder="Rechercher une annonce..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit" class="btn-modifier">Rechercher</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>État</th>
                    <th>Flacon</th>
                    <th>Détails</th>
                    <th>Statut</th>
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
                    <td data-label="État"><?= htmlspecialchars($item['item_condition'] ?? '') ?></td>
                    <td data-label="Flacon">
                        <?= htmlspecialchars($item['quantity'] ?? '') ?> ml<br>
                        <?= $paliers[$item['quantity_left']] ?? '' ?>
                    </td>
                    <td data-label="Détails">
                        <?php if (!empty($item['category_label'])): ?>
                            <span class="tag-pill tag-category"><?= htmlspecialchars($item['category_label']) ?></span>
                        <?php endif; ?>
                        <?php if (!empty($item['theme_label'])): ?>
                            <span class="tag-pill tag-theme"><?= htmlspecialchars($item['theme_label']) ?></span>
                        <?php endif; ?>
                        <?php if (!empty($item['tag_label'])): ?>
                            <span class="tag-pill"><?= htmlspecialchars($item['tag_label']) ?></span>
                        <?php endif; ?>
                    </td>
                    <td data-label="Statut"><?= htmlspecialchars($item['status']) ?></td>
                    <td data-label="Vendeur"><?= htmlspecialchars($item['firstname'] ?? '') ?> <?= htmlspecialchars($item['lastname'] ?? '') ?></td>
                    <td data-label="Actions">
                        <a href="?edit=<?= $item['id'] ?>" class="btn-modifier">Modifier</a>
                        <?php if ($item['status'] !== 'published'): ?>
                            <a href="?publish=<?= $item['id'] ?>" class="btn-activer">Activer</a>
                        <?php endif; ?>
                        <a href="?delete=<?= $item['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>