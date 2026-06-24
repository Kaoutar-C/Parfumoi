<h1>Opérateurs</h1>

<?php if ($op_edit): ?>
<section>
    <h2>Modifier l'utilisateur</h2>
    <form method="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $op_edit['id'] ?>">
        <input type="text" name="firstname" value="<?= htmlspecialchars($op_edit['firstname']) ?>" placeholder="Prénom">
        <input type="text" name="lastname" value="<?= htmlspecialchars($op_edit['lastname']) ?>" placeholder="Nom">
        <input type="email" name="email" value="<?= htmlspecialchars($op_edit['email']) ?>" placeholder="Email">
        <button type="submit">Enregistrer</button>
    </form>
</section>
<?php endif; ?>

<?php if ($op_show): ?>
<section>
    <h2>Annonces de <?= htmlspecialchars($op_show['firstname']) ?> <?= htmlspecialchars($op_show['lastname']) ?></h2>
    <?php if (empty($op_items)): ?>
        <p>Aucune annonce pour cet utilisateur.</p>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($op_items as $it): ?>
                <tr>
                    <td data-label="Nom"><?= htmlspecialchars($it['label']) ?></td>
                    <td data-label="Marque"><?= htmlspecialchars($it['brand_name'] ?? '') ?></td>
                    <td data-label="Prix"><?= htmlspecialchars($it['price']) ?> €</td>
                    <td data-label="Statut"><?= htmlspecialchars($it['status']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>

<section>
    <h2>Liste des utilisateurs</h2>
    <form method="get">
        <input type="text" name="search" placeholder="Rechercher un utilisateur..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit" class="btn-modifier">Rechercher</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($operators as $op): ?>
                <tr>
                    <td data-label="Prénom"><a href="?show=<?= $op['id'] ?>" class="btn-modifier"><?= htmlspecialchars($op['firstname']) ?></a></td>
                    <td data-label="Nom"><?= htmlspecialchars($op['lastname']) ?></td>
                    <td data-label="Email"><?= htmlspecialchars($op['email']) ?></td>
                    <td data-label="Statut"><?= $op['is_active'] ? 'Actif' : 'Bloqué' ?></td>
                    <td data-label="Actions">
                        <?php if ($op['is_active']): ?>
                            <a href="?block=<?= $op['id'] ?>" class="btn-desactiver" onclick="return confirm('Désactiver ?')">Désactiver</a>
                        <?php else: ?>
                            <a href="?activate=<?= $op['id'] ?>" class="btn-activer">Activer</a>
                        <?php endif; ?>
                        <a href="?edit=<?= $op['id'] ?>" class="btn-modifier">Modifier</a>
                        <a href="?delete=<?= $op['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>