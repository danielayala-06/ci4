<?php
namespace App\Controllers;

class Carrera extends BaseController
{
  public function showIngenieria()
  {

    //$desarrollador = "Daniel Ayala Romo";
    $lista = array("Javascript", "Python", "Java", "PHP");
    
    return view('ingenieria', ["desarrollador" => "Daniel Ayala", "lenguajes"=> $lista]);

  }
  
  public function showDesign()
  {
    $aplicaciones = ["Photoshop", "Premier"];
    return view('desing', ["aplicaciones" => $aplicaciones]);
  }

}