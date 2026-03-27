<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarcaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Marca extends BaseController
{
    public function fetchMarca()
    {
        $marcas = new MarcaModel();
        return $this->response->setJSON($marcas->findAll());   
    }
}
