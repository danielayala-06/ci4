<?= $header; ?>
<div class="row">
  <div class="col-md-12">
    <h1>Lista de clientes</h1>
    <div class="p-2 px-2">
      <a href="<?= base_url('clientes/registrar') ?> " class="btn btn-success">
        Agregar
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Apellidos</th>
          <th>Nombres</th>
          <th>DNI</th>
          <th>Telefono</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($clientes as $cliente): ?>
        <tr>
          <td><?= $cliente['id'] ?></td>
          <td><?= $cliente['apellidos'] ?></td>
          <td><?= $cliente['nombres'] ?></td>
          <td><?= $cliente['dni'] ?></td>
          <td><?= $cliente['telefono'] ?></td>
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
<?= $footer; ?>