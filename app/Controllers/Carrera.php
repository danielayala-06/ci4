<?php
namespace App\Controllers;

class Carrera extends BaseController
{
  public function showIngenieria()
  {
    return view('ingenieria');
  }
  
  public function showDesign()
  {
    return view('desing');
  }

}