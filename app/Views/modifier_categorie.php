<div class="container">
    <h1>Détails du produit</h1>
    
    <form action="<?= site_url('prod/modifier/' . $leproduit->reference) ?>" method="post">
        <table border="1" style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="text-align: left; padding: 8px; background-color: #f2f2f2;">Nom</th>
                <td style="padding: 8px;">
                    <span id="nom_display"><?= $leproduit->nom; ?></span>
                    <input type="text" id="nom_input" name="nom" value="<?= $leproduit->nom; ?>" style="display: none; width: 100%;">
                </td>
                <td style="padding: 8px; text-align: center;">
                    <button type="button" onclick="toggleEdit('nom')">Modifier</button>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; background-color: #f2f2f2;">Description</th>
                <td style="padding: 8px;">
                    <span id="description_display"><?= $leproduit->description; ?></span>
                    <input type="text" id="description_input" name="description" value="<?= $leproduit->description; ?>" style="display: none; width: 100%;">
                </td>
                <td style="padding: 8px; text-align: center;">
                    <button type="button" onclick="toggleEdit('description')">Modifier</button>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; background-color: #f2f2f2;">Prix (PUHT)</th>
                <td style="padding: 8px;">
                    <span id="PUHT_display"><?= $leproduit->PUHT; ?> €</span>
                    <input type="number" id="PUHT_input" name="PUHT" value="<?= $leproduit->PUHT; ?>" style="display: none; width: 100%;">
                </td>
                <td style="padding: 8px; text-align: center;">
                    <button type="button" onclick="toggleEdit('PUHT')">Modifier</button>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; background-color: #f2f2f2;">Date d'ajout</th>
                <td style="padding: 8px;">
                    <span id="dateAjout_display"><?= $leproduit->dateAjout; ?></span>
                    <input type="date" id="dateAjout_input" name="dateAjout" value="<?= $leproduit->dateAjout; ?>" style="display: none; width: 100%;">
                </td>
                <td style="padding: 8px; text-align: center;">
                    <button type="button" onclick="toggleEdit('dateAjout')">Modifier</button>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; background-color: #f2f2f2;">Quantité en stock</th>
                <td style="padding: 8px;">
                    <span id="qteStock_display"><?= $leproduit->qteStock; ?></span>
                    <input type="number" id="qteStock_input" name="qteStock" value="<?= $leproduit->qteStock; ?>" style="display: none; width: 100%;">
                </td>
                <td style="padding: 8px; text-align: center;">
                    <button type="button" onclick="toggleEdit('qteStock')">Modifier</button>
                </td>
            </tr>
        </table>
        <div style="margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: #fff; border: none; border-radius: 5px;">Valider les modifications</button>
        </div>
    </form>
</div>