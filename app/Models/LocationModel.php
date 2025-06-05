<?php
namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'velo_id', 'nom', 'prenom', 'prix_annuel', 'prix_mensuel', 'date_debut', 'date_fin'
    ];
    protected $useTimestamps = false;
}
