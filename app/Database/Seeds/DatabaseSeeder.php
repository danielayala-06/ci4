<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('ClientesSeeder');
        $this->call('ProductosSeeder');
        $this->call('ProveedoresSeeder');
    }
}
