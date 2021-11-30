<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserAccounts extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_lengkap'  => static::faker()->name(),
                'no_hp'         => static::faker()->phoneNumber(),
                'email'         => static::faker()->email(),
                'asal_instansi' => static::faker()->company()
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
