<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfumoi - Admin</title>
    <link rel="stylesheet" href="/public/css/admin.css">
</head>

<body class="admin">

    <div class="admin-wrapper">

        <button class="admin-burger" id="admin-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <aside class="sidebar" id="sidebar">
            <a href="/admin/home" class="sidebar-logo">
                <img src="/public/images/parfumoi.jpeg" alt="logo">
            </a>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="/admin/home">Tableau de bord</a></li>
                    <li><a href="/admin/items">Annonces</a></li>
                    <li><a href="/admin/brands">Marques</a></li>
                    <li><a href="/admin/cat_them_tag">Catégories / Thèmes / Tags</a></li>
                    <li><a href="/admin/operators">Opérateurs</a></li>
                    <li><a href="/home" class="sidebar-logout">Voir le site</a></li>
                    <li class="sidebar-logout-mobile"><a href="/checkin/logout">Se déconnecter</a></li>
                </ul>
            </nav>
            <a href="/checkin/logout" class="sidebar-logout">Se déconnecter</a>
        </aside>

        <main class="admin-main">
            <?= $page_content ?>
        </main>

    </div>

    <script>
        const burger = document.getElementById('admin-burger');
        const sidebar = document.getElementById('sidebar');
        burger.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
    </script>

</body>

</html>