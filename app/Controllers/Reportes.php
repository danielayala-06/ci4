<?php 

namespace App\Controllers;
use App\Controllers\BaseController;

class Reportes extends BaseController{
  public function diario(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Reportes/diario", $data);
  }
  public function semanal(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Reportes/semanal", $data);
  }
  public function mensual(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Reportes/mensual", $data);
  }
  public function otro(){
    $data = [
      "header"=> view("Partials/header"),
      "footer"=> view("Partials/footer"),
    ] ;
    return view("Reportes/otro", $data);
  }
}