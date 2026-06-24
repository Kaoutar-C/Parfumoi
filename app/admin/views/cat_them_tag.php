<h1>Catégories, Thèmes & Tags</h1>

<section>
    <h2>Catégories</h2>
    <form method="post">
        <input type="hidden" name="type" value="category">
        <input type="text" name="slug" placeholder="slug" required>
        <input type="text" name="label" placeholder="Nom" required>
        <button type="submit">Ajouter</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr><th>Label</th><th>Slug</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                <tr>
                    <td><?= htmlspecialchars($cat['label']) ?></td>
                    <td><?= htmlspecialchars($cat['slug']) ?></td>
                    <td>
                        <a href="?delete_category=<?= $cat['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<section>
    <h2>Thèmes</h2>
    <form method="post">
        <input type="hidden" name="type" value="theme">
        <input type="text" name="slug" placeholder="slug" required>
        <input type="text" name="label" placeholder="Nom" required>
        <button type="submit">Ajouter</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr><th>Label</th><th>Slug</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($themes as $theme): ?>
                <tr>
                    <td><?= htmlspecialchars($theme['label']) ?></td>
                    <td><?= htmlspecialchars($theme['slug']) ?></td>
                    <td>
                        <a href="?delete_theme=<?= $theme['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<section>
    <h2>Tags</h2>
    <form method="post">
        <input type="hidden" name="type" value="tag">
        <input type="text" name="slug" placeholder="slug" required>
        <input type="text" name="label" placeholder="Nom" required>
        <button type="submit">Ajouter</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr><th>Label</th><th>Slug</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><?= htmlspecialchars($tag['label']) ?></td>
                    <td><?= htmlspecialchars($tag['slug']) ?></td>
                    <td>
                        <a href="?delete_tag=<?= $tag['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>