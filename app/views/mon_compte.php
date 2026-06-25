<section class="profil">
    <img src="/public/images/<?= escape($operator['avatar'] ?? 'femme.jpeg') ?>" alt="photo de profil">
    <h1><?= escape($operator['firstname'] ?? '') ?> <?= escape($operator['lastname'] ?? '') ?></h1>
    <p>Membre depuis <?= date('Y', strtotime($operator['created_at'])) ?></p>
</section>

<section class="infos-verifiees">
    <h2>Informations vérifiées</h2>
    <ul>
        <li>Email : <?= escape($operator['email']) ?></li>
    </ul>
</section>

<section class="mes-annonces">
    <h2>Mes annonces (<?= $total_items ?>)</h2>
    <div class="grille">
        <?php foreach ($items as $item): ?>
            <article class="<?= $item['status'] === 'draft' ? 'article-draft' : '' ?>">
                <?php if ($item['status'] === 'draft'): ?>
                    <span class="badge-draft">⏳ En attente de validation</span>
                <?php endif; ?>
                <a href="/product/index/<?= $item['id'] ?>">
                    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
                    <div class="article-body">
                        <h3><?= escape($item['label']) ?></h3>
                        <p><?= escape($item['price']) ?> €</p>
                    </div>
                </a>
                <a href="/annonce/delete/<?= $item['id'] ?>" class="btn-supprimer-annonce">Supprimer</a>
            </article>
        <?php endforeach; ?>
        <?php if (empty($items)): ?>
            <p>Aucune annonce pour l'instant.</p>
        <?php endif; ?>
    </div>
    <a href="/annonce">+ Ajouter une annonce</a>
</section>

<section class="mes-favoris">
    <h2>Mes favoris</h2>
    <div class="grille">
        <?php foreach ($favoris as $item): ?>
            <article>
                <a href="/product/index/<?= $item['id'] ?>">
                    <img src="/public/images/<?= escape($item['main_image'] ?? 'default.jpg') ?>" alt="<?= escape($item['label']) ?>">
                    <div class="article-body">
                        <h3><?= escape($item['label']) ?></h3>
                        <p><?= escape($item['price']) ?> €</p>
                    </div>
                </a>
                <a href="/favoris/toggle/<?= $item['id'] ?>" class="btn-favori favori-actif">♥</a>
            </article>
        <?php endforeach; ?>
        <?php if (empty($favoris)): ?>
            <p>Aucun favori pour l'instant.</p>
        <?php endif; ?>
    </div>
</section>

<a href="/checkin/logout">Se déconnecter</a>