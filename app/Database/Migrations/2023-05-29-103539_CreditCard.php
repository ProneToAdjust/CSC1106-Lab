<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreditCard extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'data' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('credit_card');
    }

    public function down()
    {
        $this->forge->dropTable('credit_card');
    }
}
