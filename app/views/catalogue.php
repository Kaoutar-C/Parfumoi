<h1>Catalogue</h1>

<form method="get">
    <input type="text" name="search" placeholder="Rechercher un parfum" value="<?= escape($search) ?>">
    <button type="submit">Rechercher</button>
    <select name="categorie">
        <option value="">Toutes les catégories</option>
        <option value="1" <?= $categorie === '1' ? 'selected' : '' ?>>Femme</option>
        <option value="6" <?= $categorie === '6' ? 'selected' : '' ?>>Homme</option>
        <option value="7" <?= $categorie === '7' ? 'selected' : '' ?>>Unisex</option>
        <option value="8" <?= $categorie === '8' ? 'selected' : '' ?>>Enfant</option>
    </select>
    <select name="tri">
        <option value="">Trier</option>
        <option value="prix-croissant" <?= $tri === 'prix-croissant' ? 'selected' : '' ?>>Prix croissant</option>
        <option value="prix-decroissant" <?= $tri === 'prix-decroissant' ? 'selected' : '' ?>>Prix décroissant</option>
        <option value="nom" <?= $tri === 'nom' ? 'selected' : '' ?>>Nom</option>
    </select>
</form>

<div class="catalogue">
    <?php foreach ($items as $item): ?>
        <article>
            <a href="/product/index/<?= $item['id'] ?>">
                <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
                <h2><?= escape($item['label']) ?></h2>
                <p><?= escape($item['brand_name'] ?? '') ?></p>
                <p><?= escape($item['price']) ?> €</p>
            </a>
        </article>
    <?php endforeach; ?>
    <?php if (empty($items)): ?>
        <p>Aucun parfum trouvé.</p>
    <?php endif; ?>
</div>
