<?php
namespace App\Models;

use CodeIgniter\Model;

class EntretienModel extends Model
{
    protected $table = 'entretiens';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'horodatage', 'description', 'velo_id', 'piece2_id'
    ];
    protected $useTimestamps = false;
}
