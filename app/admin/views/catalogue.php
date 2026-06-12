<section>
    <h2>Catalogue</h2>
    <form method="get" action="/catalogue">
        <label>Rechercher un parfum</label><br>
        <input type="text" name="search" value="<?= htmlspecialchars($search ?? '') ?>">
        <button type="submit">Rechercher</button>
    </form>
</section>

<section>
    <h2>Résultats</h2>

    <?php if (empty($items)): ?>
        <p>Aucun parfum trouvé.</p>
    <?php endif; ?>

    <?php foreach ($items as $item): ?>
        <article>
            <h3><?= htmlspecialchars($item['label']) ?></h3>
            <?php if (!empty($item['main_image'])): ?>
                <img src="/images/<?= htmlspecialchars($item['main_image']) ?>" alt="<?= htmlspecialchars($item['label']) ?>" width="160">
            <?php endif; ?>
            <p><strong>Marque :</strong> <?= htmlspecialchars($item['brand_name'] ?? '') ?></p>
            <p><strong>Prix :</strong> <?= htmlspecialchars($item['prix']) ?> €</p>
            <p><strong>État :</strong> <?= htmlspecialchars($item['item_condition']) ?></p>
            <p><?= htmlspecialchars($item['short_description'] ?? '') ?></p>
            <p><a href="/catalogue/show/<?= $item['id'] ?>">Voir le produit</a></p>
        </article>
        <hr>
    <?php endforeach; ?>
</section>
