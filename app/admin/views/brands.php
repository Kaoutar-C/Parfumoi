<h1>Marques</h1>

<section>
    <h2>Ajouter une marque</h2>
    <form method="post">
        <input type="text" name="slug" placeholder="slug" required>
        <input type="text" name="label" placeholder="Nom de la marque" required>
        <button type="submit">Ajouter</button>
    </form>
</section>

<section>
    <h2>Liste des marques</h2>
    <form method="get">
        <input type="text" name="search" placeholder="Rechercher une marque..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit" class="btn-modifier">Rechercher</button>
    </form>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead>
                <tr><th>Label</th><th>Slug</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($brands as $brand): ?>
                <tr>
                    <td><?= htmlspecialchars($brand['label']) ?></td>
                    <td><?= htmlspecialchars($brand['slug']) ?></td>
                    <td>
                        <a href="?delete=<?= $brand['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>