<h1>Se connecter</h1>

<?php if (!empty($error)): ?>
    <p class="error"><?= escape($error) ?></p>
<?php endif; ?>

<form method="POST">
    <label for="email">Adresse e-mail</label>
    <input type="email" id="email" name="email" placeholder="exemple@email.com" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

    <button type="submit">Se connecter</button>
</form>

<p>Pas encore de compte ? <a href="/inscription">Créer un compte</a></p>
