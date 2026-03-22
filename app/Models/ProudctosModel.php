<?php

namespace App\Models;

use CodeIgniter\Model;

class ProudctosModel extends Model
{
    protected $table            = 'productos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['tipo', 'descripcion', 'precio', 'stock'];
}
