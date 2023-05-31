<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreditCard extends Seeder
{
    public function run()
    {
        $data = [
            [
                'data' => null,
            ]
        ];

        $this->db->table('credit_card')->insertBatch($data);
    }
}
