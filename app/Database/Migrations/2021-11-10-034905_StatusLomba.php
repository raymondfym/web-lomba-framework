<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusLomba extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'          => 'INT',
                'constraint'    => 2,
                'auto_increment' => true
            ],
            'status'            => [
                'type'          => 'VARCHAR',
                'constraint'    => '15',
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('status_lomba', true);

        $data = [
            [
                'status'        => 'Aktif'
            ],
            [
                'status'        => 'Tidak Aktif'
            ]
        ];
        $this->db->table('status_lomba')->insert($data[0]);
        $this->db->table('status_lomba')->insert($data[1]);
    }

    public function down()
    {
        $this->forge->dropTable('status_lomba', true);
    }
}
