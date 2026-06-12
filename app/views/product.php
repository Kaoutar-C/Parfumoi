<article>
    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
    <h2><?= escape($item['label']) ?></h2>
    <p><?= escape($item['brand_name'] ?? '') ?></p>
    <p><?= escape($item['price']) ?> €</p>
    <p><?= escape($item['item_condition']) ?></p>
    <p><?= escape($item['short_description'] ?? '') ?></p>
    <p><?= escape($item['content'] ?? '') ?></p>
    <p>Numéro de série : <?= escape($item['batch_code'] ?? '') ?></p>
</article>

<section class="vendeur">
    <h3>Vendeur</h3>
    <p><?= escape($operator['firstname']) ?> <?= escape($operator['lastname']) ?></p>
    <p>Téléphone : <?= escape($operator['phone'] ?? 'Non renseigné') ?></p>
    <a href="/vendre/<?= $operator['id'] ?>">Voir le profil du vendeur</a>
</section>
