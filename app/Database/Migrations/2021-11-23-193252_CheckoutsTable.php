<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CheckoutsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'buyer_name VARCHAR(64) NOT NULL',
            'buyer_phone_number VARCHAR(16) NOT NULL',
            'buyer_address VARCHAR(256) NOT NULL',
            'payment_proof_file VARCHAR(256) NOT NULL',
            'created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()',
            'updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP()',
            'deleted_at TIMESTAMP NULL DEFAULT NULL',
        ]);

        $this->forge->createTable('checkouts');
    }

    public function down()
    {
        $this->forge->dropTable('checkouts');
    }
}
