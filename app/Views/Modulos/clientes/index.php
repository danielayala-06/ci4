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
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody id="content-table">
      <?php foreach ($clientes as $cliente): ?>
        <tr>
          <td><?= $cliente['id'] ?></td>
          <td><?= $cliente['apellidos'] ?></td>
          <td><?= $cliente['nombres'] ?></td>
          <td><?= $cliente['dni'] ?></td>
          <td><?= $cliente['telefono'] ?></td>
          <td>
            <a href="<?= base_url('/clientes/eliminar/') ?><?= $cliente['id'] ?>" class="btn btn-outline-danger">Eliminar</a>
            <a href="#" class="btn btn-danger btn eliminar" data-idcliente="<?= $cliente['id'] ?>" data-nombres="<?= $cliente['nombres']?> ">Eliminar</a>
            <a href="<?= 
            base_url('clientes/buscar/') ?><?= $cliente['id'] ?>" 
            class="btn btn-outline-warning btn-editar" 
            data-idcliente="<?= $cliente['id']?>">Editar</a>
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
      if(event.target.classList.contains("btn-eliminar")){
        const idcliente = event.target.getAttribute('data-idcliente')
        const nombres = event.target.getAttribute('data-nombres')

        if(!confirm("¿Desea eliminar el registro de "+ $nombres)) return ;
        
        window.location.href = "<?= base_url('clientes/eliminar/') ?>" + idcliente
      }



    })
  });
</script>


<?= $footer; ?>