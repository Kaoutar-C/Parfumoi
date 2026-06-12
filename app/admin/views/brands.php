<section>
    <h2>Gestion des marques</h2>

    <form method="post">
        <p>
            <label>Slug</label><br>
            <input type="text" name="slug" required>
        </p>

        <p>
            <label>Nom de la marque</label><br>
            <input type="text" name="label" required>
        </p>

        <button type="submit">Ajouter</button>
    </form>
</section>

<section>
    <h2>Liste des marques</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>

        <?php foreach ($brands as $brand): ?>
            <tr>
                <td><?= $brand['id'] ?></td>
                <td><?= htmlspecialchars($brand['slug']) ?></td>
                <td><?= htmlspecialchars($brand['label']) ?></td>
                <td><a href="/admin/brands?delete=<?= $brand['id'] ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
