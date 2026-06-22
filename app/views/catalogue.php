<div class="catalogue">
    <h1>Catalogue</h1>

    <form method="get">
        <input type="text" name="search" placeholder="Rechercher un parfum" value="<?= escape($search) ?>">
        <button type="submit">Rechercher</button>

        <select name="categorie">
            <option value="">Toutes les catégories</option>
            <?php foreach ($categories as $cat): ?>
                <option value="<?= $cat['id'] ?>" <?= $categorie == $cat['id'] ? 'selected' : '' ?>>
                    <?= escape($cat['label']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select name="theme">
            <option value="">Toutes les occasions</option>
            <?php foreach ($themes as $t): ?>
                <option value="<?= $t['id'] ?>" <?= $theme == $t['id'] ? 'selected' : '' ?>>
                    <?= escape($t['label']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select name="tag">
            <option value="">Famille olfactive</option>
            <?php foreach ($tags as $t): ?>
                <option value="<?= $t['id'] ?>" <?= $tag == $t['id'] ? 'selected' : '' ?>>
                    <?= escape($t['label']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select name="tri">
            <option value="">Trier</option>
            <option value="prix-croissant" <?= $tri === 'prix-croissant' ? 'selected' : '' ?>>Prix croissant</option>
            <option value="prix-decroissant" <?= $tri === 'prix-decroissant' ? 'selected' : '' ?>>Prix décroissant</option>
            <option value="nom" <?= $tri === 'nom' ? 'selected' : '' ?>>Nom</option>
        </select>
    </form>

    <div class="grille">
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
</div>
?>