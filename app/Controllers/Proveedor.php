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

}