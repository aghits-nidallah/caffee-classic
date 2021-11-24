<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCheckoutDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'checkout_id INT(11)',
            'product_id BIGINT(20)',
            'quantity INT(11)',
            'sold_price INT(11)',
            'subtotal INT(11)',
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP()',
            'updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP()',
            'deleted_at TIMESTAMP NULL DEFAULT NULL',
            'FOREIGN KEY (checkout_id) REFERENCES checkouts(id) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE',
        ]);

        $this->forge->createTable('checkout_details');
    }

    public function down()
    {
        $this->forge->dropForeignKey('checkout_details', 'checkout_details_ibfk_1');
        $this->forge->dropForeignKey('checkout_details', 'checkout_details_ibfk_2');
        $this->forge->dropTable('checkout_details');
    }
}
