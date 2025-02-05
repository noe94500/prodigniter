<section>

    <h1><?php echo $titre ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <table class="">
                <?php
                    $total=0;
                    
                    foreach ($produits as $produit) {
                        $montant = $produit->qteStock * $produit->PUHT;
                        echo "<br>".$produit->reference." : ".$montant."€";
                        $total = $total + $montant;
                    }
                    echo "<br>".'VALEUR TOTAL : '.$total.'€';
                ?>
                </table>
                
            </div>
        </div>
    </div>
    
</section>