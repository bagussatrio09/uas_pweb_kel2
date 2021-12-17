<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kota_tempat_tinggal'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => 'Palembang',
            ],
            'kode_pos'       => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'default'   => '00000',
            ],
            'about_me'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium distinctio'
                    . ' doloribus quam? Ut, laudantium a dolore, minima repudiandae iure iste molestiae'
                    . ' exercitationem earum neque tempora?'
            ],
            'alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default' => 'Jl. Dummy Address No. 001'
            ],
            'profile_pict_path' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('username', false, true);
        $this->forge->addKey('email', false, true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
