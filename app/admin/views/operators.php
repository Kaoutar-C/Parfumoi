<section>
    <h2>Gestion des utilisateurs</h2>

    <p><a href="/admin/operators?action=add">Ajouter un utilisateur</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actif</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($operators as $operator): ?>
            <tr>
                <td><?= $operator['id'] ?></td>
                <td><?= htmlspecialchars($operator['firstname']) ?></td>
                <td><?= htmlspecialchars($operator['lastname']) ?></td>
                <td><?= htmlspecialchars($operator['email']) ?></td>
                <td><?= htmlspecialchars($operator['phone']) ?></td>
                <td><?= $operator['is_active'] ? 'Oui' : 'Non' ?></td>
                <td>
                    <a href="/admin/operators?action=edit&id=<?= $operator['id'] ?>">Modifier</a> |
                    <a href="/admin/operators?action=activate&id=<?= $operator['id'] ?>">Activer</a> |
                    <a href="/admin/operators?action=block&id=<?= $operator['id'] ?>">Bloquer</a> |
                    <a href="/admin/operators?action=delete&id=<?= $operator['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
