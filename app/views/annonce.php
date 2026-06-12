<h1>Déposer une annonce</h1>

<form method="POST" enctype="multipart/form-data">

    <label for="photo">Photo</label>
    <input type="file" id="photo" name="photo" accept="image/*">

    <label for="label">Nom du parfum</label>
    <input type="text" id="label" name="label" placeholder="Le nom de ton parfum" required>

    <label for="short_description">Description</label>
    <textarea id="short_description" name="short_description" placeholder="Ajoute des informations utiles"></textarea>

    <label for="brands_id">Marque</label>
    <select id="brands_id" name="brands_id" required>
        <option value="">Sélectionne une marque</option>
        <?php foreach ($brands as $brand): ?>
            <option value="<?= $brand['id'] ?>"><?= escape($brand['label']) ?></option>
        <?php endforeach; ?>
    </select>

    <label for="category_id">Catégorie</label>
    <select id="category_id" name="category_id" required>
        <option value="">Sélectionne une catégorie</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id'] ?>"><?= escape($category['label']) ?></option>
        <?php endforeach; ?>
    </select>

    <label for="theme_id">Occasion</label>
    <select id="theme_id" name="theme_id" required>
        <option value="">Sélectionne une occasion</option>
        <?php foreach ($themes as $theme): ?>
            <option value="<?= $theme['id'] ?>"><?= escape($theme['label']) ?></option>
        <?php endforeach; ?>
    </select>

    <label for="price">Prix</label>
    <input type="number" id="price" name="price" placeholder="0.00" step="0.01" min="0" required>

    <label for="batch_code">Numéro de série</label>
    <input type="text" id="batch_code" name="batch_code" placeholder="Numéro de série">

    <label for="contenance">Contenance (ml)</label>
    <select id="contenance" name="contenance" required>
        <option value="">Sélectionne une contenance</option>
        <option value="25">25 ml</option>
        <option value="50">50 ml</option>
        <option value="75">75 ml</option>
        <option value="100">100 ml</option>
        <option value="125">125 ml</option>
        <option value="150">150 ml</option>
        <option value="200">200 ml</option>
    </select>

    <label for="item_condition">État</label>
    <select id="item_condition" name="item_condition" required>
        <option value="neuf">Neuf</option>
        <option value="comme_neuf">Comme neuf</option>
        <option value="utilise">Utilisé</option>
    </select>

    <button type="submit" name="status" value="published">Publier</button>
    <button type="submit" name="status" value="draft">Sauvegarder en brouillon</button>

</form>
