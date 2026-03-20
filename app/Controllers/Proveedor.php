<?php 

namespace App\Controllers;
use App\Controllers\BaseController;

class Proveedor extends BaseController{
  public function index(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Modulos/proveedores/index", $data);
  }
}