<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'adherent'; // Assure-toi que cela correspond au nom de ta table dans la base de données
    protected $primaryKey = 'adt_id'; // Assure-toi que cela correspond au nom de ta clé primaire

    protected $allowedFields = ['adt_email', 'adt_nom', 'adt_prenom', 'adt_mdp']; // Champs autorisés à être insérés ou mis à jour

    //protected $useTimestamps = true; // Active les timestamps pour la création et la mise à jour automatique des enregistrements

    // Définis les règles de validation pour les champs
    protected $validationRules = [
        'adt_email' => 'required|valid_email|is_unique[adherent.adt_email]',
        'adt_nom' => 'required',
        'adt_prenom' => 'required',
        'adt_mdp' => 'required'
    ];

    // Messages d'erreur personnalisés pour les règles de validation
    protected $validationMessages = [
        'adt_email' => [
            'is_unique' => 'Cet email est déjà utilisé.'
        ]
    ];

    /**
     * Récupère un utilisateur en fonction de son adresse e-mail.
     *
     * @param string $email Adresse e-mail de l'utilisateur
     * @return array|null Tableau contenant les données de l'utilisateur ou NULL si l'utilisateur n'est pas trouvé
     */
    public function getUserByEmail($email)
    {
        return $this->where('adt_email', $email)->first();
    }
}
