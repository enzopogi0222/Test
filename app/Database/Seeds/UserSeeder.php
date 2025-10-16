<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'Thorfinn',
            'password' => password_hash('gagni123', PASSWORD_DEFAULT),
            'email' => 'enzogagni@gmail.com',
            'role' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($data);
    }
}
