<?php
namespace App\Controller;

class HomeController
{
    public function index()
    {

        // any am dossier views izy lasa hoe index.views.php, fa eto izy juste le index no retournena
       return view('index');
    }
}