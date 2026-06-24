<section class="dashboard">

    <h1>Dashboard</h1>

    <div class="dashboard-cards">

        <div class="card card--info">
            <span class="card-number"><?= $totalAllItems ?></span>
            <span class="card-label">Annonces depuis l'ouverture</span>
        </div>

        <a href="/admin/items" class="card card--link">
            <span class="card-number"><?= $totalPublishedItems ?></span>
            <span class="card-label">Annonces en ligne</span>
        </a>

        <a href="/admin/items/draft" class="card card--link">
            <span class="card-number"><?= $totalDraftItems ?></span>
            <span class="card-label">En attente de vérification</span>
        </a>

        <a href="/admin/operators" class="card card--link">
            <span class="card-number"><?= $totalOperators ?></span>
            <span class="card-label">Utilisateurs</span>
        </a>

        <a href="/admin/brands" class="card card--link">
            <span class="card-number"><?= $totalBrands ?></span>
            <span class="card-label">Marques</span>
        </a>

        <a href="/admin/cat_them_tag" class="card card--link">
            <span class="card-number"><?= $totalCategories ?></span>
            <span class="card-label">Catégories</span>
        </a>

        <a href="/admin/cat_them_tag" class="card card--link">
            <span class="card-number"><?= $totalThemes ?></span>
            <span class="card-label">Thèmes</span>
        </a>

        <a href="/admin/cat_them_tag" class="card card--link">
            <span class="card-number"><?= $totalTags ?></span>
            <span class="card-label">Tags</span>
        </a>

    </div>

</section>