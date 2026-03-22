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
          <td><?= $producto['tipo'] ?></td>
          <td><?= $producto['descripcion'] ?></td>
          <td><?= $producto['precio'] ?></td>
          <td><?= $producto['stock'] ?></td>
          <td>
            <a href="<?= base_url('/productos/eliminar/') ?><?= $producto['id'] ?>" class="btn btn-outline-danger btn-eliminar" id="btn-eliminar" data-producto-id="<?= $producto['id'] ?>" data-descripcion="<?= $producto['descripcion'] ?>" >Eliminar</a>
            <a href="<?= base_url('/productos/buscar/') ?><?= $producto['id'] ?>" class="btn btn-outline-warning btn-editar">Editar</a>
          </td>
        </tr>
      <?php endforeach; ?>  
      </tbody>
    </table>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", ()=>{
    //Referencia
    const dataTable = document.querySelector("#content-table")
    
    //Evento en todo el cuerpo de la tabla
    dataTable.addEventListener("click", function(event){
      //Detectar los botones Eliminacion
      if(event.target.classList.contains('btn-eliminar')){
        const productoId = event.target.getAttribute('data-producto-id')
        const descripcion = event.target.getAttribute('data-descripcion')
        console.log("has clikeado btn eliminar del producto con id: "+ productoId)

        if(!confirm("¿Desea eliminar el registro de "+ descripcion)) return ;
        
        window.location.href = "<?= base_url('productos/eliminar/') ?>" + productoId
      }

      //Detectar los botones Edicion
      if(event.target.classList.contains('btn-editar')){
        const productoId = event.target.getAttribute('data-producto-id')
        console.log("has clikeado btn editar del producto con id: "+ productoId)

        window.location.href = "<?= base_url('productos/buscar/') ?>" + productoId        

      }
    })
  });
</script>
<?= $footer ?>