<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
  /**
   * Este metodo retorna la vista PRINCIPAL con los datos de clientes.
   */
  public function index()
  {
    //El modelo tiene acceso a la BD completa
    $clientes = new ClienteModel();
    
    //$data es toda informacion que enviaremos a la vista
    $data = [
      'header'  => view("Partials/header"),
      'clientes'=> $clientes->findAll(),
      'footer'  => view("Partials/footer"),
    ] ;
    return view("Modulos/clientes/index", $data) ;
  }

  /**
   * Retorna la vista para el registro de CLIENTES
   */
  public function create(): string
  {
    //$data es toda informacion que enviaremos a la vista
    $data = [
      'header'  => view("Partials/header"),
      'footer'  => view("Partials/footer"),
    ];

    return view('Modulos/clientes/registrar', $data);
  }

  /**
   * Retorna la vista para editar clientes
   */
  public function buscar(int $id = null)
  {
    $cliente = new ClienteModel();
    $registro = $cliente->find($id);
    
    $data = [
      'header'  => view("Partials/header"),
      'footer'  => view("Partials/footer"),
      'registro'=> $registro
    ];

    return view('Modulos/clientes/actualizar', $data);
  }

  public function registrarCliente()
  {
    $cliente = new ClienteModel();

    // Se debe validar <antes de insertar los datos
    $apellidos = $this->request->getPost('apellidos');
    $nombres = $this->request->getPost('nombres');
    $dni = $this->request->getPost('dni');
    $telefono = $this->request->getPost('telefono');
    
    $cliente->insert([
        'apellidos'=>$apellidos,
        'nombres'=> $nombres,
        'dni'=> $dni,
        'telefono'=> $telefono
      ]);

      return redirect()->to('/clientes');

  }
  /**
   * Eliminar el registro de maner fisica de la trabla
   */
  public function eliminar(int $id = null)
  {
    $cliente = new ClienteModel();
    $cliente->delete($id);
    
    return redirect()->to('/clientes');
  }
}
