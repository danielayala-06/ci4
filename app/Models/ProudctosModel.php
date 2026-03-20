<?php

namespace App\Models;

use CodeIgniter\Model;

class ProudctosModel extends Model
{
    protected $table            = 'proudctos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];
}
