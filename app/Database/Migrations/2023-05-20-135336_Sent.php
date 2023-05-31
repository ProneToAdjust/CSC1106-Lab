<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use CodeIgniter\I18n\Time;

class Sent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'eid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'receiver' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'subject' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'message' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
            ],
            'time TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('eid', true);
        $this->forge->createTable('sent');
    }

    public function down()
    {
        $this->forge->dropTable('sent');
    }
}
