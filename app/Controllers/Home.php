<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('senati');
    }
    /**
     * El Dashboard requiere 2 partes escenciales, primero requeriere su cabezera y luego el pie
     * @return string
     */
    public function dashboard(): string
    {
        $data = [
            'header'=> view('Partials/header'),
            'footer'=> view('Partials/footer'),
        ];
        return view('dashboard', $data);
    }


}
