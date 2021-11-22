<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartTableMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id BIGINT(20) PRIMARY KEY AUTO_INCREMENT',
            'product_id BIGINT(20) NOT NULL',
            'client_ip VARCHAR(16) NOT NULL',
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP()',
            'updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP()',
            'deleted_at TIMESTAMP NULL DEFAULT NULL',
            'FOREIGN KEY (product_id) REFERENCES products(id) ON UPDATE CASCADE ON DELETE CASCADE',
        ]);

        $this->forge->createTable('carts');
    }

    public function down()
    {
        $this->forge->dropForeignKey('carts', 'carts_ibfk_1');
        $this->forge->dropTable('carts');
    }
}
