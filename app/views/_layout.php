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
    <a href="/home/index" class="nav-logo">
        <img src="/public/images/parfumoi.jpeg" alt="logo">
    </a>

    <form action="/catalogue/index" method="get" class="nav-search">
        <select name="categorie">
            <option value="">Catégorie</option>
            <option value="1">Femme</option>
            <option value="6">Homme</option>
            <option value="7">Unisex</option>
            <option value="8">Enfant</option>
        </select>
        <input type="text" name="search" placeholder="Rechercher un parfum...">
        <button type="button" onclick="this.closest('form').submit()" class="nav-btn">Rechercher</button>
    </form>

    <ul class="nav-main">
        <li><a href="/annonce/index">Vendre un parfum</a></li>
        <li><a href="/catalogue/index">Acheter un parfum</a></li>
        <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
            <li><a href="/admin/home">Admin</a></li>
        <?php endif; ?>
    </ul>

    <ul class="nav-auth">
        <?php if (is_logged()): ?>
            <li><a href="/mon_compte/index">Mon compte</a></li>
            <li><a href="/checkin/logout">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="/checkin/sign">S'inscrire</a></li>
            <li><a class="btn-connexion" href="/checkin/login">Se connecter</a></li>
        <?php endif; ?>
    </ul>
</nav>

<main>
    <?= $page_content ?>
</main>

<footer>
    <div class="footer-top">
        <div class="footer-brand">
            <img src="/public/images/parfumoi.jpeg" alt="logo">
            <p>Plateforme où les passionnés achètent et vendent leurs parfums entre eux.</p>
        </div>
        <div class="footer-links">
            <a href="/home/index">Accueil</a>
            <a href="/catalogue/index">Parcourir les parfums</a>
            <a href="/annonce/index">Vendre un parfum</a>
            <a href="/comment_ca_marche/index">Comment ça marche</a>
        </div>
    </div>
    <div class="footer-social">
        <a href="https://tiktok.com" target="_blank"><img src="/public/images/tiktok.png" alt="tiktok"></a>
        <a href="https://instagram.com" target="_blank"><img src="/public/images/instagram.png" alt="instagram"></a>
        <a href="https://facebook.com" target="_blank"><img src="/public/images/facebook.png" alt="facebook"></a>
    </div>
    <div class="footer-copy">
        <p>© 2026 Parfumoi - Tous droits réservés.</p>
    </div>
</footer>

</body>
</html>