<div class="form-page-wrapper">
    <div class="form-page">
        <h1>Déposer une annonce</h1>

        <form method="post" enctype="multipart/form-data">

            <label class="upload-zone" for="main_image">
                <img id="preview" src="" alt="" style="display:none; width:100%; height:100%; object-fit:cover; border-radius:12px;">
                <span id="upload-text">+ ajouter photo</span>
                <input type="file" name="main_image" id="main_image" accept="image/*">
            </label>

            <label>Marque du parfum</label>
            <input type="text" name="brand_label" list="brands-list" required>
            <datalist id="brands-list">
                <?php foreach ($brands as $brand): ?>
                    <option value="<?= htmlspecialchars($brand['label']) ?>">
                <?php endforeach; ?>
            </datalist>

            <label>Nom du parfum</label>
            <input type="text" name="label" required>

            <label>Description</label>
            <textarea name="short_description"></textarea>

            <label>Prix (€)</label>
            <input type="number" name="price" step="0.01" required>

            <label>Numéro de série (batch code)</label>
            <input type="text" name="batch_code" required>

            <label>État</label>
            <select name="item_condition">
                <option value="neuf">Neuf</option>
                <option value="comme_neuf">Comme neuf</option>
                <option value="utilise">Utilisé</option>
            </select>

            <label>Taille du flacon (ml)</label>
            <select name="quantity">
                <option value="15">15 ml</option>
                <option value="30">30 ml</option>
                <option value="50">50 ml</option>
                <option value="75">75 ml</option>
                <option value="100">100 ml</option>
                <option value="125">125 ml</option>
                <option value="150">150 ml</option>
                <option value="175">175 ml</option>
                <option value="200">200 ml</option>
            </select>

            <label>Quantité restante</label>
            <select name="quantity_left">
                <option value="1">0% - 25%</option>
                <option value="2">25% - 50%</option>
                <option value="3">50% - 70%</option>
                <option value="4">70% - 80%</option>
                <option value="5">80% - 90%</option>
                <option value="6">90% - 100%</option>
            </select>

            <label>Catégorie</label>
            <select name="category_id">
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['label']) ?></option>
                <?php endforeach; ?>
            </select>

            <label>Quand le porter ?</label>
            <select name="theme_id">
                <?php foreach ($themes as $theme): ?>
                    <option value="<?= $theme['id'] ?>"><?= htmlspecialchars($theme['label']) ?></option>
                <?php endforeach; ?>
            </select>

            <label>Famille olfactive</label>
            <select name="tag_id">
                <?php foreach ($tags as $tag): ?>
                    <option value="<?= $tag['id'] ?>"><?= htmlspecialchars($tag['label']) ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Déposer l'annonce</button>
        </form>

        <p>Votre annonce sera vérifiée avant d'être publiée.</p>
    </div>
</div>