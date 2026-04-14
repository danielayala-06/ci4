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
    public function uiReportes()
    {
        $data = [
            'header'=> view('Partials/header'),
            'footer'=> view('Partials/footer')
        ];
        return view("Modulos/vehiculos/config-report-vehiculos", $data);
    }

    // El controlador "SERVIRA" resultados asincronos, por lo tanto se requiere:
    //> 1. Codigo de servidores web developers.mozilla.org
    //> 2. Resultado en formato JSON

    public function getVehiculos(){
        // Se requiere del modelo:
        $vehiculo = new VehiculoModel();

        return $this->response->setJSON($vehiculo->obtenerVehiculos());
    }

    public function registrarVehiculo(){
        $vehiculo = new VehiculoModel();

        // Todos los campos requeridos, deberan ser enviados en un JSON
        $data = $this->request->getJSON();
        $this->response->setJSON($data);
        // Insertamos los datos en la tabla
        
        //$vehiculo->insert($data);

        if($vehiculo->insert($data)){
            return $this->response->setJSON([
                'success'=> true,
                'message'=> 'Vehiculo registrado corectamente'
            ]);
        }

        return $this->response->setJSON([
            'success'=> false,
            'message'=> 'Error al registrar el vehiculo'
        ]);
    }
}
