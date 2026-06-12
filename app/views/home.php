<div class="hero">
    <img src="/public/images/vanilla.jpg" alt="Vanilla">
    <div class="hero-text">
        <h1>Parfumoi</h1>
        <p>Une plateforme dédiée aux passionnés de parfums de niche, permettant d'acheter et de vendre des fragrances
            entre particuliers. Chaque parfum possède un numéro de série pour limiter les contrefaçons et les échanges
            se font en main propre.</p>
        <form action="/catalogue/index" method="get">
            <input type="text" name="search" placeholder="Rechercher un parfum">
            <button type="submit">Je recherche</button>
        </form>
    </div>
</div>

<section>

    <p class="section-title">Ça pourrait vous intéresser</p>

    <div class="grille">
        <?php foreach ($items as $item): ?>
            <article>
                <a href="/product/index/<?= $item['id'] ?>">
                    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>"
                        alt="<?= escape($item['label']) ?>">
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
</section>