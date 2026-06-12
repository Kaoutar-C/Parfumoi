<section>
    <h2>Messages</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
            <th>Message</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= $message['id'] ?></td>
                <td><?= htmlspecialchars($message['name'] ?? '') ?></td>
                <td><?= htmlspecialchars($message['email'] ?? '') ?></td>
                <td><?= htmlspecialchars($message['subject'] ?? '') ?></td>
                <td><?= htmlspecialchars($message['content'] ?? '') ?></td>
                <td><?= htmlspecialchars($message['status'] ?? '') ?></td>
                <td>
                    <a href="/admin/messages?id=<?= $message['id'] ?>&status=lu">Lu</a> |
                    <a href="/admin/messages?id=<?= $message['id'] ?>&status=traite">Traité</a> |
                    <a href="/admin/messages?delete=<?= $message['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
