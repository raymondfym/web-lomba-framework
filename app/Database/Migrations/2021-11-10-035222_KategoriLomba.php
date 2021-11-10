<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriLomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'          => 'INT',
                'constraint'    => 5,
                'auto_increment' => true
            ],
            'nama_lomba'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ],
            'status'            => [
                'type'          => 'INT',
                'constraint'    => 2
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kategori_lomba', true);
    }

    public function down()
    {
        $this->forge->dropTable('kategori_lomba', true);
    }
}
