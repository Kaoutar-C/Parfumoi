<div class="form-page-wrapper">
    <div class="form-page">
        <h1>Créer un compte</h1>

        <form action="/checkin/sign" method="POST">

            <label>Choisissez votre avatar</label>
            <div class="avatar-choix">

                <label class="avatar-option" for="avatar-chat">
                    <input type="radio" name="avatar" id="avatar-chat" value="chat.png" checked>
                    <img src="/public/images/chat.png" alt="Chat">
                    <span>Chat</span>
                </label>

                <label class="avatar-option" for="avatar-homme">
                    <input type="radio" name="avatar" id="avatar-homme" value="homme.png">
                    <img src="/public/images/homme.png" alt="Homme">
                    <span>Homme</span>
                </label>

                <label class="avatar-option" for="avatar-femme">
                    <input type="radio" name="avatar" id="avatar-femme" value="femme.jpeg">
                    <img src="/public/images/femme.jpeg" alt="Femme">
                    <span>Femme</span>
                </label>

            </div>

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

            <div class="cgu-wrapper">
                <input type="checkbox" id="cgu" name="cgu" required>
                <label for="cgu">J'accepte les <a href="#">conditions d'utilisation</a></label>
            </div>

            <button type="submit">Créer mon compte</button>
        </form>

        <p>Vous avez déjà un compte ? <a href="/checkin/login">Se connecter</a></p>
    </div>
</div>