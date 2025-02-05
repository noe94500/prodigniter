<?php

namespace App\Controllers;

use App\Models\Categorie;

class Categ extends BaseController 
{
    public function getAfficher()
    {
        $data['titre'] = "Liste des catégories";
        $data['produits'] = Categorie::all();
        return view('template/header')
             . view('template/menu')
             . view('liste_categ',$data)
             . view('template/footer');
    }
    
    public function postAjouter()
    {
        $categorie = new Categorie;
        $categorie->libelle = $this->request->getPost('libelle');
        $categorie->save();
        return redirect()->to(base_url());
        
    }
    
    public function getModifier($id)
    {
        $categorie = Categorie::find($id);
        $categorie->libelle = $this->request->getPost('nom');
        $categorie->save();
        return redirect()->to(base_url());

        
        
    }
    
    public function getSupp($id)
    {
        Categorie::where('id', $id)->first();
        $categ = Categorie::find($id);
        $categ->delete();
        return redirect()->to(base_url());
        
        
    }
    
    
    
}