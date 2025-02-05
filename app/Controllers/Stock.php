<?php

namespace App\Controllers;

use App\Models\Produit;

class Stock extends BaseController
{
    public function getAfficher()
    {
        $data['titre'] = "Liste des produits";
        $data['soustitre'] = "Tous les produits actuellement disponibles en magasin";        
        $data['produits'] = Produit::orderBy('nom', 'ASC')->get();
        
        return view('template/header')
             . view('template/menu')
             . view('stock_liste',$data)
             . view('template/footer');
    }
    
    public function getAjouterStock($ref)
    {
        $prod = Produit::find($ref);
        $prod->qteStock++;
        $prod->save();
        return redirect()->to('Stock/Afficher');
    }
    
     public function getRetirerStock($ref)
    {
        $prod = Produit::find($ref);
        $prod->qteStock--;
        if  ($prod->qteStock < 0) {
            $prod->qteStock = 0;
        }
        $prod->save();
        return redirect()->to('Stock/Afficher');
    }

    
    public function getVal()
    {
        
        $data['titre'] = "Valeur du stock";
        $data['produits'] = Produit::all();
        return view('template/header')
             . view('template/menu')
             . view('valeur_stock',$data)
             . view('template/footer');
    }
    
}
