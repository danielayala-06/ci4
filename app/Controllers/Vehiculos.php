<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\VehiculoModel;


class Vehiculos extends BaseController
{
    /**
     * Retorna la vista principal del Model Vehiculos
     * @return \CodeIgniter\HTTP\RedirectResponse
     */
    public function index()
    {
        $data = [
            'header'=> view('Partials/header'),
            'footer'=> view('Partials/footer')
        ];
        return view("Modulos/vehiculos/index", $data);
    }

    // El controlador "SERVIRA" resultados asincronos, por lo tanto se requiere:
    //> 1. Codigo de servidores web developers.mozilla.org
    //> 2. Resultado en formato JSON

    public function getVehiculos(){
        // Se requiere del modelo:
        $vehiculo = new VehiculoModel();

        return $this->response->setJSON($vehiculo->obtenerVehiculos());
    }
}
