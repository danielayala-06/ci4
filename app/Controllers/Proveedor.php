<?php 

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProveedorModel;

class Proveedor extends BaseController{
  
  public function index()
  {
    //Cargamos el model de proveedores
    $proveedores = new ProveedorModel();

    $data = [
      'header'=> view("Partials/header"),
      'proveedores'=> $proveedores->findAll(),
      'footer'=> view("Partials/footer"),
    ] ;

    return view("Modulos/proveedores/index", $data);
  }  

  // Devuelve el inicio de la pagina Proveedores Async
  public function indexAsync()
  {
    $data = [
      'header'=> view("Partials/header"),
      'footer'=> view("Partials/footer"),
    ] ;

    return view("Modulos/proveedoresAsync/index", $data);
  }

  public function create(): string
  {
    $data = [
      'header'  => view("Partials/header"),
      'footer'  => view("Partials/footer"),
    ];

    return view('Modulos/proveedores/registrar', $data);
  }

  public function registrarProveedor()
  {
    $proveedor = new ProveedorModel();

    // Se debe validar antes de insertar los datos
    $razon_social = $this->request->getPost('razon_social');
    $direccion = $this->request->getPost('direccion');
    $ruc = $this->request->getPost('ruc');
    $telefono = $this->request->getPost('telefono');
    $representante = $this->request->getPost('representante');
    
    $proveedor->insert([
      'razon_social'=>$razon_social,
      'direccion'=> $direccion,
      'ruc'=> $ruc,
      'telefono'=> $telefono,
      'representante'=> $representante,
    ]);

      return redirect()->to('/proveedores');
  }

  public function buscar(int $id = null)
  {
    $proveedor = new ProveedorModel();
    $registro = $proveedor->find($id);
    
    $data = [
      'header'  => view("Partials/header"),
      'footer'  => view("Partials/footer"),
      'registro'=> $registro
    ];

    return view('Modulos/proveedores/actualizar', $data);
  }
  public function actualizarProveedor(int $id)
  {
    $proveedor = new ProveedorModel();

    // Se debe validar antes de insertar los datos
    $razon_social = $this->request->getPost('razon_social');
    $direccion = $this->request->getPost('direccion');
    $ruc = $this->request->getPost('ruc');
    $telefono = $this->request->getPost('telefono');
    $representante = $this->request->getPost('representante');
    
    $proveedor->update($id, [
      'razon_social'=>$razon_social,
      'direccion'=> $direccion,
      'ruc'=> $ruc,
      'telefono'=> $telefono,
      'representante'=> $representante,
    ]);

      return redirect()->to('/proveedores');
  }
  public function eliminar($id)
  {
    $proveedor = new ProveedorModel();
    $proveedor->delete($id);
    return redirect()->to('/proveedores');    
  }

}