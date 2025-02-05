<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Produit;

class Admin extends BaseController
{    
    public function postLogin()
    {
        $rules = [
            "login" => [
                "label" => "'Identifianttt'", 
                "rules" => "required"
            ],
            "pwd" => [
                "label" => "'Mot de passe'", 
                "rules" => "required"
            ]
        ];
        
        if ($this->validate($rules)) {
            $login = $this->request->getPost('login');
            $pwd = $this->request->getPost('pwd');
            $userModele = new User();
            if ($userModele->isAdmin($login,$pwd)) {
            
                $session = session();
                $sessiondata = array(
                       'nom'  => $this->request->getPost('login'),
                       'admin'=> true
                    );
                $session->set($sessiondata);
                return redirect()->to('/admin/home');
            }
            else {
           
                $data['titre'] = "Bienvenue sur ProdIgniter";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant qu'administrateur";
                return view('template/header')
                     . view('template/menu')
                     . view('login_form',$data)
                     . view('template/footer');
            }
        }
        else {
            
            $data['erreurs'] = $this->validator->getErrors();
            $data['titre'] = "Bienvenue sur ProdIgniter";
            $data['soustitre'] = "Saisie invalide";
            return view('template/header')
                 . view('template/menu')
                 . view('login_form',$data)
                 . view('template/footer');
        }
    }
    
    public function getHome()
    {
        $data['titre'] = "Liste des produits";
        $data['soustitre'] = "Tous les produits actuellement disponibles en magasin";        
        $data['produits'] = Produit::orderBy('qteStock', 'DESC')->get();
        
        return view('template/header')
             . view('template/menu')
             . view('admin_home',$data)
             . view('template/footer');        
    }
    
    public function getLogout()
    {
        $session = session();
        $session->destroy();
        $data['titre'] = "Bienvenue sur ProdIgniter";
                $data['soustitre'] = "Les identifiants saisis ne permettent pas de se connecter en tant qu'administrateur";
                return view('template/header')
                     . view('template/menu')
                     . view('login_form',$data)
                     . view('template/footer');
    }

//    public function getAjouter()
//    {
//        $produit = Produit::find($id);
//        //$produit->qteStock = ;
//        $produit->save();
//        return view('template/header')
//             . view('template/menu')
//             . view('ajouter_stock')
//             . view('template/footer');  
//        
//    }
}
