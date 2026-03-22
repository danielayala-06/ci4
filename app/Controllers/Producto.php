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

  public function buscar(int $id = null){
    $producto = new ProudctosModel();
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
      "producto"=> $producto->find($id),
    ] ;
    return view("Modulos/productos/actualizar", $data);
  }

  public function actualizarProducto(int $id = null){
    $producto = new ProudctosModel();
    $data = [
      "tipo" => $this->request->getPost("tipo"),
      "descripcion" => $this->request->getPost("descripcion"),
      "precio" => $this->request->getPost("precio"),
      "stock" => $this->request->getPost("stock"),
    ];

    $producto->update($id, $data);
    return redirect()->to(base_url("/productos"));
  }

  public function eliminar(int $id = null){
    $producto = new ProudctosModel();
    $producto->delete($id);
    return redirect()->to(base_url("/productos"));
  }
}
