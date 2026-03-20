<?php

namespace App\Models;

use CodeIgniter\Model;

class ProveedorModel extends Model
{
    protected $table            = 'proveedores';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['razon_social', 'direccion', 'ruc', 'telefono', 'representante'];

}
