<?php 

namespace App\Controllers;
use App\Controllers\BaseController;

class Producto extends BaseController{
  public function index(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Modulos/Productos", $data);
  }
}