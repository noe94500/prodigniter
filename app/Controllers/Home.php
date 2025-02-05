<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->get('admin') == true) {
            // Si un admin est connecté, redirige vers la page d'accueil admin
            return redirect()->to('/admin/home');
        } else {
            // Si aucune session admin n'est active
            $data['titre'] = "";
            $data['soustitre'] = "";

            // Charger uniquement les vues header, login_form et footer
            echo view('template\header', $data);
            echo view('login_form', $data);
            echo view('template\footer', $data);
        }
    }
}
