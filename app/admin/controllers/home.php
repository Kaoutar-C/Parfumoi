<?php



require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../admin/models/home.php';

function home_index($PDO){
    
$data = [];

$totalItems = adminCountItems($pdo);
$totalOperators = adminCountOperators($pdo);

$totalBlockedOperators = adminCountBlockedOperators($pdo);
$lastItems = adminLastItems($pdo);
return render('app/admin/views/home.php', $data);}
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Parfumoi</title>
</head>

<body>

<?php
session_start();
require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../admin/models/operator.php';
require_once __DIR__ . '/../admin/models/item.php';
require_once __DIR__ . '/../admin/models/brand.php';
require_once __DIR__ . '/../admin/models/home.php';

// --- Protection ---
if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login.php');
    exit;
}

// --- Actions utilisateurs ---
if (isset($_GET['block_operator'])) {
    blockOperator($pdo, $_GET['block_operator']);
    header('Location: /admin/home.php');
    exit;
}
if (isset($_GET['activate_operator'])) {
    activateOperator($pdo, $_GET['activate_operator']);
    header('Location: /admin/home.php');
    exit;
}
if (isset($_GET['delete_operator'])) {
    deleteOperator($pdo, $_GET['delete_operator']);
    header('Location: /admin/home.php');
    exit;
}

// --- Actions annonces ---
if (isset($_GET['publish_item'])) {
    publishAdminItem($pdo, $_GET['publish_item']);
    header('Location: /admin/home.php');
    exit;
}
if (isset($_GET['disable_item'])) {
    disableAdminItem($pdo, $_GET['disable_item']);
    header('Location: /admin/home.php');
    exit;
}
if (isset($_GET['delete_item'])) {
    deleteAdminItem($pdo, $_GET['delete_item']);
    header('Location: /admin/home.php');
    exit;
}

// --- Actions marques ---
if (isset($_GET['delete_brand'])) {
    deleteBrand($pdo, $_GET['delete_brand']);
    header('Location: /admin/home.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_brand'])) {
    createBrand($pdo, $_POST);
    header('Location: /admin/home.php');
    exit;
}

// --- Données ---
$totalItems            = adminCountItems($pdo);
$totalOperators        = adminCountOperators($pdo);
$totalBlockedOperators = adminCountBlockedOperators($pdo);
$items                 = getAllAdminItems($pdo);
$operators             = getAllOperators($pdo);
$brands                = getAllBrands($pdo);
?>

    <header>
        <h1>Dashboard — Parfumoi</h1>
        <a href="/admin/logout.php">Déconnexion</a>
    </header>

    <!-- STATS -->
    <section>
        <h2>Résumé</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Annonces</th>
                <th>Utilisateurs</th>
                <th>Comptes bloqués</th>
            </tr>
            <tr>
                <td><?= $totalItems ?></td>
                <td><?= $totalOperators ?></td>
                <td><?= $totalBlockedOperators ?></td>
            </tr>
        </table>
    </section>

    <hr>

    <!-- ANNONCES -->
    <section>
        <h2>Annonces</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>État</th>
                <th>Statut</th>
                <th>Vendeur</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= htmlspecialchars($item['label']) ?></td>
                    <td><?= htmlspecialchars($item['brand_name'] ?? '') ?></td>
                    <td><?= htmlspecialchars($item['prix']) ?> €</td>
                    <td><?= htmlspecialchars($item['item_condition']) ?></td>
                    <td><?= htmlspecialchars($item['status']) ?></td>
                    <td><?= htmlspecialchars($item['firstname'] ?? '') ?> <?= htmlspecialchars($item['lastname'] ?? '') ?></td>
                    <td>
                        <a href="?publish_item=<?= $item['id'] ?>">Activer</a> |
                        <a href="?disable_item=<?= $item['id'] ?>">Désactiver</a> |
                        <a href="?delete_item=<?= $item['id'] ?>" onclick="return confirm('Supprimer cette annonce ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <hr>

    <!-- UTILISATEURS -->
    <section>
        <h2>Utilisateurs</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Actif</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($operators as $operator): ?>
                <tr>
                    <td><?= $operator['id'] ?></td>
                    <td><?= htmlspecialchars($operator['firstname']) ?></td>
                    <td><?= htmlspecialchars($operator['lastname']) ?></td>
                    <td><?= htmlspecialchars($operator['email']) ?></td>
                    <td><?= $operator['is_active'] ? 'Oui' : 'Non' ?></td>
                    <td>
                        <a href="?activate_operator=<?= $operator['id'] ?>">Activer</a> |
                        <a href="?block_operator=<?= $operator['id'] ?>">Bloquer</a> |
                        <a href="?delete_operator=<?= $operator['id'] ?>" onclick="return confirm('Supprimer cet utilisateur ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <hr>

    <!-- MARQUES -->
    <section>
        <h2>Marques</h2>

        <form method="post">
            <input type="hidden" name="add_brand" value="1">
            <input type="text" name="slug" placeholder="slug" required>
            <input type="text" name="label" placeholder="Nom de la marque" required>
            <button type="submit">Ajouter</button>
        </form>

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            <?php foreach ($brands as $brand): ?>
                <tr>
                    <td><?= $brand['id'] ?></td>
                    <td><?= htmlspecialchars($brand['slug']) ?></td>
                    <td><?= htmlspecialchars($brand['label']) ?></td>
                    <td>
                        <a href="?delete_brand=<?= $brand['id'] ?>" onclick="return confirm('Supprimer cette marque ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>
</html>



