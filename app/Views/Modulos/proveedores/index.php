<?= $header ?>
<div class="row">
  <div class="col-md-12">
    <h1>Lista de Proveedores</h1>
    <div class="p-2 px-2">
      <a href="<?= base_url('proveedores/registrar') ?> " class="btn btn-success">
        Agregar
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Razon Social</th>
          <th>Direccion</th>
          <th>RUC</th>
          <th>Telefono</th>
          <th>Representante</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($proveedores as $proveedor): ?>
        <tr>
          <td><?= $proveedor['id'] ?></td>
          <td><?= $proveedor['razon_social'] ?></td>
          <td><?= $proveedor['direccion'] ?></td>
          <td><?= $proveedor['ruc'] ?></td>
          <td><?= $proveedor['telefono'] ?></td>
          <td><?= $proveedor['representante'] ?></td>
          <td>
            <button class="btn btn-danger btn-outline">Eliminar</button>
            <button class="btn btn-warning">Editar</button>
          </td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
  </div>
</div>
<?= $footer ?>