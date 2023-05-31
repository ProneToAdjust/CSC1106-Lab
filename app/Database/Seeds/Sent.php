<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sent extends Seeder
{
    public function run()
    {
        $data = [
            [
                'receiver' => 'tom@email.com',
                'subject' => 'Enquiry about project',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'receiver' => 'dick@email.com',
                'subject' => 'Request for leniency',
                'message' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
            [
                'receiver' => 'harry@email.com',
                'subject' => 'Plead for mercy',
                'message' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            ]
        ];

        $this->db->table('sent')->insertBatch($data);
    }
}
