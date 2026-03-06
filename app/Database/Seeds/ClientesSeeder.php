<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "apellidos" =>"Martinez Magallanes",
                "nombres"   =>"Daniel",
                "dni"       =>"74856523",
                "telefono"  =>"986532415",
            ],
            [
                "apellidos" =>"Penia Penia",
                "nombres"   =>"Rodrigez Ricales",
                "dni"       =>"85653241",
                "telefono"  =>"968532458",
            ],
            [
                "apellidos" =>"Salvatierra Ricales",
                "nombres"   =>"Maria",
                "dni"       =>"75844215",
                "telefono"  =>"968586235",
            ],
            [
                "apellidos" =>"Bondioli Molina",
                "nombres"   =>"Morgan",
                "dni"       =>"79856532",
                "telefono"  =>"965328653",
            ]
        ];
        //Insertamos los datos
        $this->db->table("clientes")->insertBatch($data);
    }
}
