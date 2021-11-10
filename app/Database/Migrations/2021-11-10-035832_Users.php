<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => [
                'type'          => 'INT',
                'constraint'    => 100,
                'auto_increment' => true
            ],
            'nama_lengkap'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
            'no_hp'             => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ],
            'email'             => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
                'unique'        => true
            ],
            'asal_instansi'     => [
                'type'          => 'VARCHAR',
                'constraint'    => '50'
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
