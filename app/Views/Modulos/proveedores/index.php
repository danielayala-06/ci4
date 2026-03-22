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
      <tbody id="content-table">
      <?php foreach($proveedores as $proveedor): ?>
        <tr>
          <td><?= $proveedor['id'] ?></td>
          <td><?= $proveedor['razon_social'] ?></td>
          <td><?= $proveedor['direccion'] ?></td>
          <td><?= $proveedor['ruc'] ?></td>
          <td><?= $proveedor['telefono'] ?></td>
          <td><?= $proveedor['representante'] ?></td>
          <td>
            <a class="btn btn-outline-danger btn-eliminar" id="btn-eliminar" data-proveedor-id="<?= $proveedor['id'] ?>" data-razon-social="<?= $proveedor['razon_social'] ?>" >Eliminar</a>
            <a href="<?= base_url('/proveedores/actualizar/') ?><?= $proveedor['id'] ?>" class="btn btn-outline-warning btn-editar">Editar</a>
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
        const idProveedor = event.target.getAttribute('data-proveedor-id')
        const razonSocial = event.target.getAttribute('data-razon-social')
        console.log("has clikeado btn eliminar del proveedor con id: "+ idProveedor)

        if(!confirm("¿Desea eliminar el registro de "+ razonSocial + "?")) return ;
        
        window.location.href = "<?= base_url('proveedores/eliminar/') ?>" + idProveedor
      }

      
    })
  });
</script>
<?= $footer ?>