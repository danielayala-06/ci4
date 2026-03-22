<?= $header ?>
<div class="row">
  <div class="col-md-12">
    <h1>Lista de Productos</h1>
    <div class="p-2 px-2">
      <a href="<?= base_url('productos/registrar') ?> " class="btn btn-success">
        Agregar
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody id="content-table">
      <?php foreach($productos as $producto): ?>
        <tr>
          <td><?= $producto['id'] ?></td>
          <td><?= $producto['descripcion'] ?></td>
          <td><?= $producto['precio'] ?></td>
          <td><?= $producto['stock'] ?></td>
          <td>
           <button class="btn btn-outline-danger btn-eliminar">Eliminar</button>
           <button class="btn btn-outline-warning btn-editar">Editar</button>
          </td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
  </div>
</div>
<?= $footer ?>