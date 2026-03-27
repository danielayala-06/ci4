<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionMarcas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true,
                'unsigned'          => true,
            ],
            'marca' =>[
                'type'=> 'VARCHAR',
                'constraint'=> 50,
                'null'=> false,
            ],
            'created_at' =>[
                'type'=> 'DATETIME',
                'null' => true,
            ],
            'updated_at'=>[
                'type'=> 'DATETIME',
                'null' => true,
            ],
        ]);

        // Se definen las restricciones (claves)

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('marca');

        // Se construye la tabla
        $this->forge->createTable('marcas');
    }

    public function down()
    {
        // RollBack
        $this->forge->dropTable('marcas');
    }
}
