<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WebsiteSettings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'setting_name VARCHAR(32) NOT NULL',
            'setting_value TEXT NOT NULL',
        ]);

        $this->forge->createTable('website_settings');
    }

    public function down()
    {
        $this->forge->dropTable('website_settings');
    }
}
