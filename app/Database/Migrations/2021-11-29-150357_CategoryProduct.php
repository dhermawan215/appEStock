<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryProduct extends Migration
{
    public function up()
    {

        $this->forge->addField([

            'id_category'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]


        ]);
        $this->forge->addKey('id_category', true);
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
