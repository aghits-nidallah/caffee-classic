<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id BIGINT(20) PRIMARY KEY AUTO_INCREMENT',
            'product_photo_path VARCHAR(255) NOT NULL',
            'name VARCHAR(255) NOT NULL',
            'price INT(11) NOT NULL',
            'stock INT(11) NOT NULL',
            'description TEXT NULL',
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP()',
            'updated_at TIMESTAMP NULL DEFAULT(NULL) ON UPDATE CURRENT_TIMESTAMP()',
            'deleted_at TIMESTAMP NULL DEFAULT(NULL)',
        ]);

        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
