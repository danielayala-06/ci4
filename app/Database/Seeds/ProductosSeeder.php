<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'tipo'=>'Muebles',
                'descripcion'=>'Muebles bonitos para salas y comedores.',
                'precio'=>'599.99',
                'stock'=>'12',
            ],
            [
                'tipo'=>'Electrodomesticos',
                'descripcion'=>'Todo tipos de Licuadoras.',
                'precio'=>'122.78',
                'stock'=>'56',
            ],
            [
                'tipo'=>'Electrodomesticos',
                'descripcion'=>'Cafeteras Premiun.',
                'precio'=>'1700.25',
                'stock'=>'5',
            ],
            [
                'tipo'=>'Vehiculos',
                'descripcion'=>'Se ofertan Vehiculos electricos con mas de 1000 años de garantia.',
                'precio'=>'575.00',
                'stock'=>'3',
            ],
        ];
        $this->db->table('productos')->insertBatch($data);
    }
}
