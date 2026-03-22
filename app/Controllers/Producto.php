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

  public function registrar(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Modulos/productos/registrar", $data);
  }

  public function registrarProducto(){
    $producto = new ProudctosModel();
    $data = [
      "tipo" => $this->request->getPost("tipo"),
      "descripcion" => $this->request->getPost("descripcion"),
      "precio" => $this->request->getPost("precio"),
      "stock" => $this->request->getPost("stock"),
    ];

    $producto->insert($data);
    return redirect()->to(base_url("/productos"));
  }
}