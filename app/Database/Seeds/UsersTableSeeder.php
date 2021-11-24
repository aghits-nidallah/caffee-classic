<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user_model = new \App\Models\UserModel();
        $user_model->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
        ]);
    }
}
