<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfumoi - Admin</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body class="admin">

    <div class="admin-wrapper">

        <aside class="sidebar">
            <a href="/home" class="sidebar-logo">
                <img src="/public/images/parfumoi.jpeg" alt="logo">
            </a>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="/admin/home">Tableau de bord</a></li>
                    <li><a href="/admin/items">Annonces</a></li>
                    <li><a href="/admin/brands">Marques</a></li>
                    <li><a href="/admin/operators">Opérateurs</a></li>
                    <li><a href="/admin/messages">Messages</a></li>

                </ul>
            </nav>
            <a href="/checkin/logout" class="sidebar-logout">Se déconnecter</a>
        </aside>

        <main class="admin-main">
            <?= $page_content ?>
        </main>

    </div>

</body>

</html>