<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfumoi</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <nav class="navbar">
        <img src="/public/images/parfumoi.jpeg" alt="logo">

        <form action="/catalogue" method="get">
            <input type="text" name="search" placeholder="Rechercher un parfum">
            <button type="submit">Rechercher</button>
        </form>

        <?php if (isset($_SESSION['operator_id'])): ?>
            <a href="/mon-compte">Mon compte</a>
            <a href="/deconnexion">Déconnexion</a>
        <?php else: ?>
            <a href="/connection">Connexion</a>
            <a href="/inscription">Inscription</a>
        <?php endif; ?>

        <ul>
            <li><a href="/catalogue">Catalogue</a></li>
            <li><a href="/annonce">Annonce</a></li>
            <li><a href="/comment-ca-marche">Comment ça marche</a></li>
            <li><a href="/a-propos">À propos</a></li>
        </ul>
    </nav>

    <main>
        <?= $page_content ?>
    </main>

    <footer>
        <img src="/public/images/parfumoi.jpeg" alt="logo">

        <p>Plateforme où les passionnés achètent et vendent leurs parfums entre eux.</p>

        <ul>
            <li><a href="/home">Accueil</a></li>
            <li><a href="/catalogue">Catalogue</a></li>
            <li><a href="/annonce">Annonce</a></li>
            <li><a href="/comment-ca-marche">Comment ça marche</a></li>
            <li><a href="/a-propos">À propos</a></li>
        </ul>

        <p>© 2026 Parfumoi - Tous droits réservés.</p>

        <nav class="réseaux">
            <ul>
                <li>
                    <a href="https://facebook.com" target="_blank">
                        <img src="/public/images/facebook.png" alt="facebook">
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com" target="_blank">
                        <img src="/public/images/instagram.png" alt="instagram">
                    </a>
                </li>
                <li>
                    <a href="https://tiktok.com" target="_blank">
                        <img src="/public/images/tiktok.png" alt="tiktok">
                    </a>
                </li>
            </ul>
        </nav>
    </footer>

</body>

</html>