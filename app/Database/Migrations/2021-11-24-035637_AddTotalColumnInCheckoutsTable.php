<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTotalColumnInCheckoutsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('checkouts', 'total INT(11) NOT NULL DEFAULT(0) AFTER payment_proof_file');
    }

    public function down()
    {
        $this->forge->dropColumn('checkouts', 'total');
    }
}
