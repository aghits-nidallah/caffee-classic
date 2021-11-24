<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDeliveryColumnsInCheckoutsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('checkouts', 'courier VARCHAR(64) NULL DEFAULT NULL AFTER total');
        $this->forge->addColumn('checkouts', 'tracking_id VARCHAR(64) NULL DEFAULT NULL AFTER courier');
        $this->forge->addColumn('checkouts', 'notes VARCHAR(256) NULL DEFAULT NULL AFTER tracking_id');
        $this->forge->addColumn('checkouts', 'is_sent TINYINT(1) NULL DEFAULT NULL AFTER notes');
    }

    public function down()
    {
        $this->forge->dropColumn('checkouts', 'courier');
        $this->forge->dropColumn('checkouts', 'tracking_id');
        $this->forge->dropColumn('checkouts', 'notes');
        $this->forge->dropColumn('checkouts', 'is_sent');
    }
}
