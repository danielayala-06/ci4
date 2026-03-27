<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Administrador de vehiculos</h5>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-vehiculo">
            Nuevo vehiculo
        </button>
        <table class="table table-sm mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Anio</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Cargara de manera Async -->
            <tbody id="content-vehiculos">

            </tbody>
        </table>
    </div>
</div>


<!-- Zona de MODAL -->
<div class="modal fade" id="modal-vehiculo" c tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Complete el Formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" id="formulario-vehiculos" autocomplete="off">
            
            <div class="form-group">
                <label for="marcas">Marca:</label>
                <select name="marcas" id="marcas" class="form-control" required>
                    <option value="">Seleccione</option>
                </select>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="form-group">
                <label for="anio"> Año:</label>
                <input type="text" class="form-control" id="anio" name="anio" minlength="4" maxlength="4">
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" required class="text-right form-control" min="1" max="10000000">
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary rounded-1" data-dismiss="modal">Cancelar</button>
        <button type="submit" form="formulario-vehiculos" class="btn btn-sm btn-primary rounded-1">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin del MODAL -->

<!-- Realizamos el SCRIPT -->
<script>
    //Referencias
    const tabla = document.querySelector("#content-vehiculos");

    // Cuando la pagina carge
    document.addEventListener("DOMContentLoaded", function(){
        // Fetch Vehiculos from endpoint base_url/vehiculos/listar
        async function obtenerVehiculos(){
            try{
                const response = await fetch(`<?= base_url('vehiculos/listar')?>`)
                const data = await response.json()
                //Si el servidor no respondio correctament
                if(response.status != 200){return;}

                //Encontramos datos
                if(!data){return;}
                tabla.innerHTML = ``

                //Todo Ok procedemos
                data.forEach(vehiculo => {
                    tabla.innerHTML += `
                        <tr>
                            <td>${vehiculo.id}</td>
                            <td>${vehiculo.marca}</td>
                            <td>${vehiculo.modelo}</td>
                            <td>${vehiculo.anio}</td>
                            <td>${vehiculo.color}</td>
                            <td>${vehiculo.precio}</td>
                            <td>
                                <a href='#' class='btn btn-sm btn-info'>Editar</a>
                                <a href='#' class='btn btn-sm btn-danger'>Eliminar</a>
                            </td>
                        </tr>
                    `
                });

            }catch(err){
                console.error("Error al obtener los datos: \n",err)
            }
        }

        obtenerVehiculos();
    })
</script>


<?= $footer ?>