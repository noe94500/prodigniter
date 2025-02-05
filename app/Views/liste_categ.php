<section>
    <h1><?php echo $titre ?></h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Libellé</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($produits as $produit) {
                                echo "<tr>";
                                echo "<td>" . $produit->libelle . "</td>";
                                
                                echo "<td>" . anchor('categ/supp/'.$produit->id, '<i class="fa-solid fa-power-on"></i> supprimer', ['class' => 'btn btn-warning']) . "</td>";
                                echo "<td>" . anchor('categ/modifier/'.$produit->id, '<i class="fa-solid fa-power-on"></i> modifier', ['class' => 'btn btn-warning']) . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>

               
                <h1>Ajouter une nouvelle catégorie</h1>
                <?= form_open('categ/ajouter'); ?>
                    <div class="form-group">
                        <?= form_label('Libellé de la catégorie', 'libelle'); ?>
                        <?= form_input([
                            'name' => 'libelle',
                            'id' => 'libelle',
                            'class' => 'form-control',
                            'placeholder' => 'Entrez le libellé de la catégorie'
                        ]); ?>
                    </div>
                    <div>
                        <?= form_submit('submit', 'Ajouter', ['class' => 'btn btn-primary']); ?>
                        
                    </div>
                <?= form_close(); ?>

            </div>
        </div>
    </div>
</section>

