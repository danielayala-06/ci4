<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        $data = [
            [
                "id_marca"          => 1, 
                "modelo"            => "Coupe",
                "anio"              => "2027",
                "color"             => "negro",
                "precio"            => 1000.75,
                "create_at"        => $now,
            ],
            [
                "id_marca"          => 3, 
                "modelo"            => "Corolla",
                "anio"              => "2020",
                "color"             => "rojo",
                "precio"            => 9999.99,
                "create_at"        => $now,
            ],
            [
                "id_marca"          => 6, 
                "modelo"            => "del anio",
                "anio"              => "1999",
                "color"             => "azul",
                "precio"            => 20000,
                "create_at"        => $now,
            ]
        ] ;

        $this->db->table("vehiculos")->insertBatch($data);
    }
}
