<section class="dashboard">

    <h1>Dashboard</h1>

    <div class="dashboard-cards">

        <!-- Carte 1 : total depuis ouverture — pas cliquable -->
        <div class="card card--info">
            <span class="card-number"><?= $totalAllItems ?></span>
            <span class="card-label">Annonces depuis l'ouverture</span>
        </div>

        <!-- Carte 2 : annonces en ligne — cliquable -->
        <a href="/admin/items" class="card card--link">
            <span class="card-number"><?= $totalPublishedItems ?></span>
            <span class="card-label">Annonces en ligne</span>
        </a>

        <!-- Carte 3 : en attente de vérification — cliquable -->
        <a href="/admin/items" class="card card--link card--warning">
            <span class="card-number"><?= $totalDraftItems ?></span>
            <span class="card-label">En attente de vérification</span>
        </a>

        <!-- Carte 4 : total utilisateurs — cliquable -->
        <a href="/admin/operators" class="card card--link">
            <span class="card-number"><?= $totalOperators ?></span>
            <span class="card-label">Utilisateurs</span>
        </a>

        <!-- Carte 5 : utilisateurs avec une annonce — cliquable -->
        <a href="/admin/operators" class="card card--link">
            <span class="card-number"><?= $totalOperatorsWithItem ?></span>
            <span class="card-label">Utilisateurs avec une annonce</span>
        </a>

    </div>

</section>
