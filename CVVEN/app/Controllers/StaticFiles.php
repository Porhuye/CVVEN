<?php namespace App\Controllers;

use CodeIgniter\Controller;

class StaticFiles extends Controller
{
    public function serveImages($filename)
    {
        // Chemin vers le répertoire des images
        $path = base_url('/static/images/') . $filename;

        // Vérifie si le fichier demandé existe
        if (file_exists($path . $filename)) {
            // Renvoie le fichier avec le bon type MIME
            return readfile($path . $filename);
        } else {
            // Renvoie une réponse 404 si le fichier n'existe pas
            return $this->response->setStatusCode(404);
        }
    }
}
