<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "razon_social" =>"Empresa 1 S.A.C",
                "direccion"   =>"Av. Artemio Molina 521",
                "ruc"       =>"25352748526",
                "telefono"  =>"965852635",
                "representante"  =>"Saravia Saravia, Jose Jose",
            ],
            [
               "razon_social" =>"Textiles S.A.C",
                "direccion"   =>"Ca. Camino Real 43",
                "ruc"       =>"2542581365",
                "telefono"  =>"968532568",
                "representante"  =>"Martinez Pereira, Altamirano Lucho",
            ],
            [
                "razon_social" =>"Compani A.C.",
                "direccion"   =>"Av. Toreto #la familia primero",
                "ruc"       =>"6582356987",
                "telefono"  =>"965326538",
                "representante"  =>"Fujimori Fujimori, Toledo",
            ]
        ];
        
        //Insertamos los datos
        $this->db->table("proveedores")->insertBatch($data);
    }
}
