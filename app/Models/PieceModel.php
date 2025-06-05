<?php
namespace App\Models;

use CodeIgniter\Model;

class PieceModel extends Model
{
    protected $table = 'pieces';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tag', 'modele', 'prix_achat', 'marque_piece_id', 'type_piece_id', 'prix_revente', 'URL'
    ];
    protected $useTimestamps = false;
}
