<section>
    <h2>Connexion administration</h2>

    <?php if (!empty($error)): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <p>
            <label>Email</label><br>
            <input type="email" name="email" required>
        </p>

        <p>
            <label>Mot de passe</label><br>
            <input type="password" name="password" required>
        </p>

        <button type="submit">Se connecter</button>
    </form>
</section>
