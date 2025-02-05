<section>

    <h1><?php echo $titre ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <table class="">
                <?php
                    $cpt=0;
                    
                    foreach ($produits as $produit) {
                        echo "<tr>";
                        echo "<td width='10px' class='text-center'>";
                        echo "<a href='#'>";
                        echo img('/public/img/prod/'.$produit->reference.'.jpg', true, 'class="img-fluid rounded"');
                        echo "<br>";
                        echo $produit->nom;
                        echo "<br>";
                        echo "<b>" . $produit->qteStock . "</b> en stock";
                        echo "</a>";
                        echo "<br>";
                        echo "<a href='" . site_url('Stock/AjouterStock/' . $produit->reference) . "' class='btn btn-success btn-sm'>Ajouter</a>";
                        echo "<a href='" . site_url('Stock/RetirerStock/' . $produit->reference) . "' class='btn btn-danger btn-sm'>Retirer</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    
                ?>
                </table>
                
            </div>
        </div>
    </div>
    
</section>