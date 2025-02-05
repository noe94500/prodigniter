<section>

    <h1><?php echo $titre ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <table class="table">
                <?php
                    $cpt=0;
                    echo "<tr>";
                    foreach ($produits as $produit) {
                        echo "<td width='30%' class='text-center'><a href='#'>";
                        echo img('/public/img/prod/'.$produit->reference.'.jpg',true,'class="img-fluid rounded"');
                        echo "<br>";
                        echo $produit->nom;
                        echo "<br>";
                        echo "<b>".$produit->qteStock."</b> en stock";
                        echo "<br>";
                        echo anchor('prod/afficher/'.$produit->reference,'Modifier','class="btn btn-outline-dark mt-auto"');
                        echo "<br>";
                        echo anchor('prod/supprimer/'.$produit->reference,'Supprimer','class="btn btn-outline-dark mt-auto"');
                        echo "</a></td>";
                        $cpt++; 
                        if ($cpt%3==0) {
                            echo "</tr><tr>";
                        }
                    }
                    echo "</tr>";
                ?>
                </table>
                 <h1>Ajouter un Produit</h1>
                    <?php 
                    // Ouvrir le formulaire
                    echo form_open('prod/ajouter'); 
                    ?>

                    <!-- Nom du produit -->
                    <p>
                        <?php
                        echo form_label('Nom du produit :', 'nom');
                        echo form_input([
                            'name' => 'nom',
                            'id' => 'nom',
                            'value' => set_value('nom'),
                            'required' => 'required'
                        ]);
                        ?>
                    </p>

                    <!-- Référence -->
                    <p>
                        <?php
                        echo form_label('Référence :', 'reference');
                        echo form_input([
                            'name' => 'reference',
                            'id' => 'reference',
                            'value' => set_value('reference'),
                            'required' => 'required'
                        ]);
                        ?>
                    </p>

                    <!-- Description -->
                    <p>
                        <?php
                        echo form_label('Description :', 'description');
                        echo form_textarea([
                            'name' => 'description',
                            'id' => 'description',
                            'rows' => '4',
                            'cols' => '50',
                            'value' => set_value('description')
                        ]);
                        ?>
                    </p>

                    <!-- Prix Unitaire Hors Taxes (PUTH) -->
                    <p>
                        <?php
                        echo form_label('Prix Unitaire HT :', 'puth');
                        echo form_input([
                            'type' => 'number',
                            'name' => 'puth',
                            'id' => 'puth',
                            'step' => '0.01',
                            'min' => '0',
                            'value' => set_value('puth'),
                            'required' => 'required'
                        ]);
                        ?>
                    </p>

                    <!-- Date d'ajout -->
                    <p>
                        <?php
                        echo form_label('Date d\'ajout :', 'dateAjout');
                        echo form_input([
                            'type' => 'date',
                            'name' => 'dateAjout',
                            'id' => 'dateAjout',
                            'value' => set_value('dateAjout')
                        ]);
                        ?>
                    </p>

                    <!-- Quantité en stock -->
                    <p>
                        <?php
                        echo form_label('Quantité en stock :', 'qteStock');
                        echo form_input([
                            'type' => 'number',
                            'name' => 'qteStock',
                            'id' => 'qteStock',
                            'min' => '0',
                            'value' => set_value('qteStock'),
                            'required' => 'required'
                        ]);
                        ?>
                    </p>
                    
                    <p>
                        <?php
                        echo form_label('ID de la catégorie :', 'idcateg');
                        echo form_input([
                            'type' => 'number',
                            'name' => 'idcateg',
                            'id' => 'idcateg',
                            'min' => '0',
                            'value' => set_value('idcateg'),
                            'required' => 'required'
                        ]);
                        ?>
                    </p>

                    <!-- Bouton de soumission -->
                    <p>
                        <?php
                        echo form_submit('submit', 'Ajouter le produit');
                        ?>
                    </p>
                       
                    <p>
                        <?php
                        echo form_label('Photo du produit :', 'photo');
                        echo form_upload([
                            'name' => 'photo',
                            'id' => 'photo',
                            
                        ]);
                        ?>
                    </p>
                    <?php 
                    // Fermer le formulaire
                    echo form_close(); 
                    ?>
            </div>
        </div>
    </div>
    
</section>