<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriPeserta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'          => 'INT',
                'constraint'    => 3,
                'auto_increment' => true
            ],
            'kategori'          => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kategori_peserta');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_peserta');
    }
}
