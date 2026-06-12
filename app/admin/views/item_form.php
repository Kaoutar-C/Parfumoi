<section>
    <h2><?= $action === 'add' ? 'Ajouter une annonce' : 'Modifier une annonce' ?></h2>

    <form method="post">
        <p>
            <label>Slug</label><br>
            <input type="text" name="slug" value="<?= htmlspecialchars($item['slug'] ?? '') ?>" required>
        </p>

        <p>
            <label>Nom</label><br>
            <input type="text" name="label" value="<?= htmlspecialchars($item['label'] ?? '') ?>" required>
        </p>

        <p>
            <label>Prix</label><br>
            <input type="text" name="prix" value="<?= htmlspecialchars($item['prix'] ?? '') ?>" required>
        </p>

        <p>
            <label>Description courte</label><br>
            <input type="text" name="short_description" value="<?= htmlspecialchars($item['short_description'] ?? '') ?>">
        </p>

        <p>
            <label>Description complète</label><br>
            <textarea name="content" rows="5" cols="60"><?= htmlspecialchars($item['content'] ?? '') ?></textarea>
        </p>

        <p>
            <label>Batch code</label><br>
            <input type="text" name="batch_code" value="<?= htmlspecialchars($item['batch_code'] ?? '') ?>">
        </p>

        <p>
            <label>État</label><br>
            <select name="item_condition">
                <option value="neuf">Neuf</option>
                <option value="comme_neuf">Comme neuf</option>
                <option value="utilise">Utilisé</option>
            </select>
        </p>

        <p>
            <label>Quantité</label><br>
            <input type="number" name="quantity" value="<?= htmlspecialchars($item['quantity'] ?? 1) ?>">
        </p>

        <p>
            <label>Statut</label><br>
            <select name="status">
                <option value="published">Publié</option>
                <option value="disabled">Désactivé</option>
                <option value="draft">Brouillon</option>
            </select>
        </p>

        <p>
            <label>Marque</label><br>
            <select name="marque_id">
                <?php foreach ($brands as $brand): ?>
                    <option value="<?= $brand['id'] ?>"><?= htmlspecialchars($brand['label']) ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label>Catégorie</label><br>
            <select name="category_id">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['label']) ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label>Famille olfactive</label><br>
            <select name="theme_id">
                <?php foreach ($tags as $tag): ?>
                    <option value="<?= $tag['id'] ?>"><?= htmlspecialchars($tag['label']) ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label>Vendeur</label><br>
            <select name="operator_id">
                <?php foreach ($operators as $operator): ?>
                    <option value="<?= $operator['id'] ?>">
                        <?= htmlspecialchars($operator['firstname']) ?> <?= htmlspecialchars($operator['lastname']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <button type="submit">Enregistrer</button>
        <a href="/admin/items">Retour</a>
    </form>
</section>
