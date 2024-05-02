<?php
namespace App\Controllers;

use App\Models\TestBd;

class TestDbController extends BaseController
{
    public function index()
    {
        $model = new TestBd();
        
        if ($model->testConnection()) {
            echo "Connexion réussie !";
        } else {
            echo "La connexion a échoué.";
        }
    }
}
?>