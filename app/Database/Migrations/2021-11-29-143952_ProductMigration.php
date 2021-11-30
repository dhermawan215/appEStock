<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'batch_no'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'part_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'part_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'category_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true
            ],


        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
