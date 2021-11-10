<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusLombaModel extends Model
{
    protected $table                = 'statuslomba';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id', 'jenis_status'];

    // public function getStatus()
    // {
    //     $status = $this->db->table('status_lomba');
    //     return $status->get();
    // }
}
