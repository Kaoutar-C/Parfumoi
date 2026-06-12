<section class="profil-vendeur">
    <img src="/public/images/<?= escape($operator['avatar'] ?? 'avatar.jpeg') ?>" alt="photo de profil">
    <h1><?= escape($operator['firstname']) ?> <?= escape($operator['lastname']) ?></h1>
    <p>Membre depuis <?= date('Y', strtotime($operator['created_at'])) ?></p>
</section>

<section class="engagement">
    <h2>Engagement</h2>
    <p>Je certifie l'authenticité et la conformité des parfums que je mets en vente. Chaque parfum est vérifié avec son numéro de série. Les échanges se font uniquement en main propre.</p>
</section>

<section class="annonces">
    <h2>Ses annonces (<?= count($items) ?>)</h2>
    <div class="catalogue">
        <?php foreach ($items as $item): ?>
            <article>
                <a href="/product/index/<?= $item['id'] ?>">
                    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
                    <h3><?= escape($item['label']) ?></h3>
                    <p><?= escape($item['brand_name'] ?? '') ?></p>
                    <p><?= escape($item['price']) ?> €</p>
                </a>
            </article>
        <?php endforeach; ?>
        <?php if (empty($items)): ?>
            <p>Aucune annonce pour l'instant.</p>
        <?php endif; ?>
    </div>
</section>
