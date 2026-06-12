<section>
    <h2><?= $action === 'add' ? 'Ajouter un utilisateur' : 'Modifier un utilisateur' ?></h2>

    <form method="post">
        <p>
            <label>Prénom</label><br>
            <input type="text" name="firstname" value="<?= htmlspecialchars($operator['firstname'] ?? '') ?>" required>
        </p>

        <p>
            <label>Nom</label><br>
            <input type="text" name="lastname" value="<?= htmlspecialchars($operator['lastname'] ?? '') ?>" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="<?= htmlspecialchars($operator['email'] ?? '') ?>" required>
        </p>

        <p>
            <label>Téléphone</label><br>
            <input type="text" name="phone" value="<?= htmlspecialchars($operator['phone'] ?? '') ?>">
        </p>

        <p>
            <label>Mot de passe</label><br>
            <input type="password" name="password">
        </p>

        <button type="submit">Enregistrer</button>
        <a href="/admin/operators">Retour</a>
    </form>
</section>
