<?php 

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProudctosModel;
use CodeIgniter\Model;

class Producto extends BaseController{
  public function index(){
    $productos = new ProudctosModel();
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
      "productos"=> $productos->findAll(),
    ] ;
    return view("Modulos/productos/index", $data);
  }
}