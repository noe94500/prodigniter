<?php

namespace App\Controllers;
use App\Models\Produit;

class Prod extends BaseController
{
    public function getAll()
    {
        $data['titre'] = "Liste des produits";
        $data['soustitre'] = "Tous les produits actuellement disponibles en magasin";        
        $data['produits'] = Produit::all();
        
        return view('template/header')
             . view('template/menu')
             . view('home',$data)
             . view('template/footer');        
    }
    
    public function postAjouter()
    {
        $produit = new Produit;
        $produit->reference = $this->request->getPost('reference');
        $produit->nom = $this->request->getPost('nom');
        $produit->description = $this->request->getPost('description');
        $produit->PUHT = $this->request->getPost('puth');
        $produit->dateAjout = $this->request->getPost('dateAjout');
        $produit->qteStock = $this->request->getPost('qteStock');
        $produit->categories_id = $this->request->getPost('idcateg');
        $produit->save();
        return redirect()->to(base_url());
    }
    
    public function getAfficher($reference)
    {        
        $data['leproduit'] = Produit::find($reference);
        return view('template/header')
             . view('modif_produit', $data);  
    }
    
    public function postModifier($reference)
    {
       
        $produit = Produit::find($reference);

        $produit->nom = $this->request->getPost('nom');
        $produit->description = $this->request->getPost('description');
        $produit->PUHT = $this->request->getPost('PUHT');
        $produit->dateAjout = $this->request->getPost('dateAjout');
        $produit->qteStock = $this->request->getPost('qteStock');
        $produit->categories_id = 1;
        $produit->save();
        return redirect()->to(base_url());
        
    }
    
    
    public function getSupprimer($reference)
    {
        Produit::where('reference', $reference)->first();
        $prod = Produit::find($reference);
        $prod->delete();
        return redirect()->to(base_url());
    }
}