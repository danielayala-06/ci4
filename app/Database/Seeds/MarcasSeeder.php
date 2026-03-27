<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        // Variables - constantes (opcional)
        $now = date("Y-m-d H:i:s");

        // Arreglo con los datos semilla
        $data = [
            [
                'marca' => 'Toyota',
                'created_at' => $now
            ],
            [
                'marca' => 'Honda',
                'created_at' => $now
            ],
            [
                'marca' => 'Ford',
                'created_at' => $now
            ],
            [
                'marca' => 'Nissan',
                'created_at' => $now
            ],
        ];        

        // Enviamos los datos a la tabla
        $this->db->table('marcas')->insertBatch($data);
    }
}
