<?php
namespace App\Models;

use CodeIgniter\Model;

class TestBd extends Model
{
    protected $DBGroup = 'default'; // Le nom du groupe de base de données à utiliser (par défaut)

    public function testConnection()
    {
        try {
            $db = db_connect();
            return true; // Connexion réussie
        } catch (\Exception $e) {
            return false; // Connexion échouée
        }
    }
}
?>