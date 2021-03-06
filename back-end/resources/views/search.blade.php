
<h1>Rechercher un produit</h1>
<section id="formulaire">
<form action="">
    <div id="labels">
        <div>
            <label for="reference" id="reference-label">Référence du produit</label>
            <p class="error-message message-display" id="reference-input-message">Veuillez entrer une référence valide</p>
        </div>
        <div>
            <label for="produit" id="produit-label">Nom du produit</label>
            <p class="error-message message-display" id="produit-input-message">Veuillez entrer un produit valide</p>
        </div>
        <label for="prix" id="prix-label">Prix entre</label>
    </div>
    <div id="inputs">
        <input type="text" id="reference-input" autofocus required>
        <input type="text" id="produit-input" required>
        <div id="price-input-wrapper">
            <input type="number" id="prix-input-start" required>
            <p>et</p>
            <input type="number" id="prix-input-end" required>
        </div>

    </div>
    <div id="button">
        <button>Rechercher</button>
    </div>

    </form>
</section>
<section id="tableau">
    <table>
        <thead>
            <th>Référence</th>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Modifier <br>
                Supprimer</th>
        </thead>
        <tbody>
            <?php foreach ($productsFound as $product):?>
                <tr class="table-row">
                    <td class="table-product-id"><?= $product['id']?></td>
                    <td class="table-product-name"><?= $product['name']?></td>
                    <td class="table-product-price"><?= $product['price']?> €</td>
                    <td>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-times-circle"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
