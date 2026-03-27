<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{
    protected $table            = 'vehiculos';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_marca', 'modelo', 'anio', 'color', 'precio'];

    // Campos de auditoria => ¿Cuando se creo?¿Cuando se modifico?
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at'; // Campo de mi tabla
    protected $updatedField  = 'updated_at'; // Campo de mi tabla 
    protected $deletedField  = 'deleted_at';

    //Metodos integrados =>
    // findAll() => Obtener todos los  registros
    // find() => obtener un registro
    // insert() => agregar un nuevo registro
    // delete() => eliminacion fisica registro
    // update() => actualizacion

    // Y que sucede si necesito un metodo personalizado? ejemplo: consulta multitabla
    public function obtenerVehiculos()
    {
        return $this->select('vehiculos.*','marcas.marca')
        ->join('marcas', 'marcas.id = vehiculos.id_marca')
        ->findAll(10);
    }
    //En caso la consulta sea muy compleja, podemos escribir nuestro propio SQL
    public function obtenerVehiculoSQL()
    {
        //Preparamos la consulta
        $sql ='
        SELECT
            vehiculos.id, vehiculos.modelo, vehiculos.anio, vehiculos.color, marcas.marca
        FROM vehiculos
        INNER JOIN marcas 
        ON marcas.id = vehiculos.id_marca';
        
        // Ejecutamos la consulta y los enviamos
        return $this->db->query($sql)->getResultArray();
    }
}
