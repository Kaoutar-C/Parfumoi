<div class="form-page-wrapper">
    <div class="form-page">
        <h1>Créer un compte</h1>

        <form action="/checkin/sign" method="POST">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" required>

            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" placeholder="Votre nom" required>

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" placeholder="exemple@email.com" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Choisissez un mot de passe" required>

            <label for="password_confirm">Confirmer le mot de passe</label>
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Répétez le mot de passe" required>

            <input type="checkbox" id="cgu" name="cgu" required>
            <label for="cgu">J'accepte les <a href="#">conditions d'utilisation</a></label>

            <button type="submit">Créer mon compte</button>
        </form>

        <p>Vous avez déjà un compte ? <a href="/checkin/login">Se connecter</a></p>
    </div>
</div>