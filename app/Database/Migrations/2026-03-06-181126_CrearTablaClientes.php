<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaClientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                "type"          => "int",
                "constraint"    => 11,
                "unsigned"      => true,
                "auto_increment"=> true,
            ],
            "apellidos"=> [
                "type"          => "varchar",
                "constraint"    => 40,
                "null"          => false,
            ],
            "nombres"=> [
                "type"          => "varchar",
                "constraint"    => 40,
                "null"          => false,
            ],
            "dni"=> [
                "type"          => "char",
                "constraint"    => 8,
                "null"          => false,
            ],
            "telefono"=> [
                "type"          => "char",
                "constraint"    => 9,
                "null"          => false,
            ]
            
        ]);
        //Clave
        $this->forge->addKey("id");
        
        //DNI debe ser unico
        $this->forge->addUniqueKey("dni");
        //crear la tabla
        $this->forge->createTable("clientes");
    }

    public function down()
    {
        $this->forge->dropTable("clientes");
    }
}
