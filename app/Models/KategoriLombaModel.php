<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriLombaModel extends Model
{
    protected $table                = 'kategori_lomba';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id', 'nama_lomba', 'status'];

    public function getStatus()
    {
        $status = $this->db->table('status_lomba');
        return $status->get();
    }
}
