<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'date' => [
                'type' => 'DATE'
            ],
            'headline' => [
                'type' => 'TEXT'
            ],
            'content' => [
                'type' => 'TEXT'
            ]
        ]);
        $this->forge->addKey('nid', true);
        $this->forge->createTable('finance_news');
    }

    public function down()
    {
        $this->forge->dropTable('finance_news');
    }
}
