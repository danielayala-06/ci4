<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaVehiculos extends Migration
{
    public function up()
    {

        // Agregamos las filas
        $this->forge->addField([
            "id"=> [
                "type"              => "INT",
                "constraint"        => 11,
                "auto_increment"    => true,
                "unsigned"          => true
            ],
            "id_marca"=> [
                "type"              => "INT",
                "constraint"        => 11,
                "unsigned"          => true,
                "null"              => false
            ],
            "modelo"=> [
                "type"              => "VARCHAR",
                "constraint"        => 50,
                "null"              => false,
            ],
            "anio"=> [
                "type"              => "CHAR",
                "constraint"        => 4,
                "null"              => false
            ],
            "color"=> [
                "type"=> "VARCHAR",
                "constraint"=> 50,
                "null"=> false,
            ],
            "precio"=> [
                "type"              => "DECIMAL",
                "constraint"        => "10,2",
                "null"              => false
            ],
            "create_at"=> [
                "type"=> 'DATETIME',
                "null" => true
            ],
            "update_at"=> [
                "type"=> 'DATETIME',
                "null" => true
            ],
        ]);

        // Restricciones
        $this->forge->addPrimaryKey("id");
        // campo foraneo, tabla, clavePrimaria, PermisoActualizar, PermisoEliminar
        $this->forge->addForeignKey("id_marca","marcas","id","RESTRICT","RESTRICT", "id_marca_fk");

        // Creacion de la tabla
        $this->forge->createTable("vehiculos");
    }

    public function down()
    {
        $this->forge->dropTable("Vehiculos");
    }
}
