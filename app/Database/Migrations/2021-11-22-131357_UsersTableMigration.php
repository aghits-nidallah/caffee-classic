<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTableMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'name VARCHAR(255) NOT NULL',
            'username VARCHAR(255) NOT NULL',
            'email VARCHAR(255) NULL DEFAULT NULL',
            'password VARCHAR(255) NOT NULL',
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP()',
            'updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP()',
        ]);

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
