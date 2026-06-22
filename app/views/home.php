<div class="hero">
    <div class="hero-text">
        <h1>Parfumoi</h1>
        <p>Une plateforme dédiée aux passionnés de parfums de niche, permettant d'acheter et de vendre des fragrances entre particuliers. Chaque parfum possède un numéro de série pour limiter les contrefaçons et les échanges se font en main propre.</p>
    </div>

    <form action="/catalogue/index" method="get" class="hero-search">
        <select name="categorie">
            <option value="">Catégorie</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>">
                    <?= escape($category['label']) ?>
                </option>
            <?php endforeach; ?>
        </select>
             
        <input type="search" name="search" placeholder="Marque ou nom du parfum">

        <button type="button" onclick="this.closest('form').submit()" class="nav-btn">
            Voir les parfums
        </button>
    </form>

    <p class="section-title">Ça pourrait vous intéresser</p>

    <div class="grille">
        <?php foreach ($items as $item): ?>
            <article>
                <a href="/product/index/<?= $item['id'] ?>">
                    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
                </a>
                <?php if (is_logged()): ?>
                           
                    <a href="/favoris/toggle/<?= $item['id'] ?>" 
   class="btn-favori <?= in_array((int)$item['id'], $ids_favoris) ? 'favori-actif' : '' ?>">
   <?= in_array((int)$item['id'], $ids_favoris) ? '♥' : '♡' ?>
</a>
                <?php endif; ?>
                <a href="/product/index/<?= $item['id'] ?>">
                    <h2><?= escape($item['label']) ?></h2>
                    <p><?= escape($item['brand_name'] ?? '') ?></p>
                    <p><?= escape($item['price']) ?> €</p>
                </a>
            </article>
        <?php endforeach; ?>
        <?php if (empty($items)): ?>
            <p>Aucun parfum disponible pour l'instant.</p>
        <?php endif; ?>
    </div>
</div>