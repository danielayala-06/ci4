<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('senati');
    }

    public function view_disenio(): string
    {
        return view('desing');
    }

    public function view_ineneria(): string
    {
        return view('ingenieria');
    }
}
