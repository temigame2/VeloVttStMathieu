<?php
namespace App\Models;

use CodeIgniter\Model;

class VeloModel extends Model
{
    protected $table = 'velos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tag', 'modele', 'gravage', 'date_achat', 'prix_achat', 'photo', 'prix_location',
        'nom_locataire', 'prenom_locataire', 'taille_id', 'couleur_id', 'marque_velo_id',
        'numero_serie', 'debut_location', 'fin_location'
    ];
    protected $useTimestamps = false;
}
