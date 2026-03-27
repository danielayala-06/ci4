<?php

namespace App\Controllers;
use App\Controllers\BaseController;


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
}
