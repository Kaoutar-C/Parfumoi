<div class="product-page">
    <div class="product-top">
        <div class="product-image">
            <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>"
                alt="<?= escape($item['label']) ?>" onclick="this.requestFullscreen()" style="cursor: zoom-in;">
        </div>
        <div class="product-info">
            <h1><?= escape($item['label']) ?></h1>
            <p class="product-price"><?= escape($item['price']) ?> €</p>

            <div class="product-vendeur-card">
                <img src="/public/images/<?= escape($operator['avatar'] ?? 'avatar.jpeg') ?>" alt="avatar">
                <div>
                    <p class="vendeur-nom"><?= escape($operator['firstname']) ?> <?= escape($operator['lastname']) ?></p>
                    <p class="vendeur-email">📧 <?= escape($operator['email'] ?? '') ?></p>
                    <p class="vendeur-membre">Membre depuis <?= date('Y', strtotime($operator['created_at'] ?? 'now')) ?></p>
                </div>
            </div>

            <div class="product-description">
                <h3>Description</h3>
                <p><?= escape($item['short_description'] ?? 'Aucune description disponible.') ?></p>
            </div>
        </div>
    </div>

    <div class="product-tags">
        <?php if ($category): ?>
            <span class="tag-pill tag-category"><?= escape($category['label']) ?></span>
        <?php endif; ?>
        <?php if ($theme): ?>
            <span class="tag-pill tag-theme"><?= escape($theme['label']) ?></span>
        <?php endif; ?>
        <?php foreach ($tags as $tag): ?>
            <span class="tag-pill"><?= escape($tag['label']) ?></span>
        <?php endforeach; ?>
    </div>

    <div class="product-details">
        <h2>Détails du parfum</h2>
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
        <table>
            <tr>
                <td>Marque</td>
                <td><?= escape($item['brand_name'] ?? 'Non renseigné') ?></td>
            </tr>
            <tr>
                <td>État</td>
                <td><?= escape($item['item_condition']) ?></td>
            </tr>
            <tr>
                <td>Numéro de série</td>
                <td><?= escape($item['batch_code'] ?? 'Non renseigné') ?></td>
            </tr>
            <tr>
                <td>Contenance</td>
                <td><?= escape($item['quantity'] ?? 'Non renseigné') ?> ml</td>
            </tr>
            <tr>
                <td>Quantité restante</td>
                <td><?= $paliers[$item['quantity_left']] ?? 'Non renseigné' ?></td>
            </tr>
        </table>
    </div>
</div>