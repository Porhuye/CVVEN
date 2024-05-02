<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Controllers_Inscription extends Controller
{

    public function index()
    {
        return view('login.php');
    }

    public function page_inscription()
    {
        return view('inscription.php');
    }

    public function inscription()
    {
        $data = [];
        helper(['form']);
        
        // Ajoutez des instructions de journalisation pour vérifier si la méthode est appelée
        log_message('debug', 'La méthode inscription() est appelée.');
        log_message('debug', 'Méthode de la requête : ' . $this->request->getMethod());
        log_message('debug', 'Données POST : ' . print_r($this->request->getPost(), true));

        if (strtoupper($this->request->getMethod()) === 'POST' && $this->request->getPost('register') !== null) {

            // Ajoutez des instructions de journalisation pour vérifier si la méthode est appelée
            log_message('debug', 'post ok.');

            $validation = \Config\Services::validation();
            

            // Récupère les données du formulaire et les valide
            if ($validation->run($this->request->getPost(), 'inscription')) {
                $userModel = new \App\Models\UserModel();

                // Vérifie si l'utilisateur existe
                $email = $this->request->getPost('email');
                if ($userModel->where('adt_email', $email)->countAllResults() > 0) {
                    $data['error'] = "Un utilisateur avec cet email existe déjà.";
                } else {
                    // Insère l'utilisateur
                    $userData = [
                        'adt_email' => $email,
                        'adt_nom' => $this->request->getPost('nom'),
                        'adt_prenom' => $this->request->getPost('prenom'),
                        'adt_mdp' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
                    ];
                    $userModel->insert($userData);

                    // Redirige vers la page de connexion après l'inscription réussie
                    return redirect()->to('login');
                }
            } else {
                $data['validation'] = $validation->getErrors();
            }
            
        }

        return view('inscription', $data);
    }

    public function login()
    {
        $data = [];

        if (strtoupper($this->request->getMethod()) === 'POST' && $this->request->getPost('login') !== null) {
            // Valider les champs de connexion
            $validation = \Config\Services::validation();
            if ($validation->run($this->request->getPost(), 'login')) {
                // Récupérer les données du formulaire
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                // Vérifier les informations de connexion
                $userModel = new \App\Models\UserModel();
                $user = $userModel->where('adt_email', $email)->first();

                if ($user) {
                    if (password_verify($password, $user['adt_mdp'])) {
                        // Connexion réussie, rediriger vers la page principale
                        // Tu peux ajuster la redirection selon tes besoins
                        return redirect()->to('principale');
                    } else {
                        $data['error'] = 'Mot de passe incorrect';
                    }
                } else {
                    $data['error'] = "Aucun utilisateur trouvé avec cet email";
                }
            } else {
                $data['validation'] = $validation->getErrors();
            }
        }

        // Charger la vue de connexion
        return view('login', $data);
    }
}
