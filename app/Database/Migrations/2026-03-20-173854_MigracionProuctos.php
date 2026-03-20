<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionProuctos extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id'=> [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'tipo'=> [
                'type'          => 'VARCHAR',
                'constraint'    => 30,
                'null'          => false,
            ],
            'descripcion'=> [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'precio'=> [
                'type'          => 'DECIMAL',
                'constraint'    => '7,2',
                'null'          => false,
            ],
            'stock'=> [
                'type'          => 'SMALLINT',
                'constraint'    => 9,
                'null'          => false,
            ],
            
        ]);
        //Clave
        $this->forge->addPrimaryKey('id');
        
        //crear la tabla
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
