<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigracionProveedores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                'type'          => "INT",
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            "razon_social"=> [
                'type'          => "VARCHAR",
                'constraint'    => 150,
                'null'          => false,
            ],
            "direccion"=> [
                'type'          => "VARCHAR",
                'constraint'    => 150,
            ],
            "ruc"=> [
                'type'          => "CHAR",
                'constraint'    => 11,
                'null'          => false,
            ],
            "telefono"=> [
                'type'          => "CHAR",
                'constraint'    => 9,
                'null'          => false,
            ],
            "representante"=> [
                'type'          => "VARCHAR",
                'constraint'    => 50,
                'null'          => false,
            ],
            
        ]);
        //Clave
        $this->forge->addPrimaryKey("id");
        
        //debe ser unico
        $this->forge->addUniqueKey("ruc");
        
        //crear la tabla
        $this->forge->createTable("proveedores");
    }

    public function down()
    {
        $this->forge->dropTable("proveedores");
    }
}
