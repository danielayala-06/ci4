<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Gestion de Proveedores</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProveedores">
            Nuevo Proveedor
        </button>
    
        <table class="table table-sm mt-3">
            <thead>
                <tr>
                    <th>Razon Social</th>
                    <th>Direccion</th>
                    <th>RUC</th>
                    <th>Telefono</th>
                    <th>Representante</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Se generara de forma asincrona -->
            <tbody id="table-proveedores">
    
            </tbody>
        </table>
    
        <!-- INICIO MODAL -->
        <div class="modal fade" id="modalProveedores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- INCIO FORMULARIO --> 
                    <form action="" class="" id="form-proveedores" autocomplete="off">
                        <div class="form-group">
                            <label for="razon_social">Razon Social:</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" required maxlength="80">
                        </div>
                        <div class="form-group">
                            <label for="direccion">direccion</label>
                            <input type="text" class="form-control" required id="direccion" name="direccion" maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="ruc">RUC:</label>
                            <input type="text" class="form-control" id="ruc" name="ruc" required maxlength="11" minlength="11">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="9" minlength="9" required>
                        </div>
                        <div class="form-group">
                            <label for="representante">Representante:</label>
                            <input type="text" maxlength="80" 
                            minlength="4" class="form-control" id="representante" name="representante" required>
                        </div>
                    </form>                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn rounded-1 btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" form="form-proveedores" class="btn rounded-1 btn-primary">Guardar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- FIN DEL MODAL -->
    </div>


</div>

<script>
    // Referenciamos la tabla donde se mostraran los proveedores
    const tableProveedores = document.querySelector("#table-proveedores");
    const formulario = document.querySelector("#form-proveedores"); 


    document.addEventListener('DOMContentLoaded', function() {

         function notificar(mensaje = ''){
            Swal.fire({
                text:mensaje,
                icon: 'info',
                position: 'top-end',
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true
            })
        }

        //
        //      FUNCIONES ASYNC
        //

        /**
         * @method postProveedor
         * Este metodo obtiene los datos del formulario y los envia al servidor para registrar un nuevo proveedor. 
         */
        async function postProveedor(){
            try {
                // Obtenemos los datos del formulario y los convertimos a un objeto JS

                const new_proveedor = {
                    razon_social: document.querySelector("#razon_social").value,
                    direccion: document.querySelector("#direccion").value,
                    ruc: document.querySelector("#ruc").value,
                    telefono: document.querySelector("#telefono").value,
                    representante: document.querySelector("#representante").value,
                }
                
                const response = await fetch(`<?= base_url('proveedores/registrar') ?>`, {
                    method: 'POST',
                    headers:{'Content-Type': 'application/json'},   
                    body: JSON.stringify(new_proveedor)
                });
                
                // Obtenemos la respuesta del servidor
                const data = await response.json();

                notificar(data.message)

                // En caso de no funcionar
                if(!data.success){return;}


                // Ocultamos el modal
                $('#modalProveedores').modal('hide')

                //Regargamos la tabla
                fetchProveedores()

            } catch (error) {
                console.error("Error al registrar el proveedor: ", error);
            }
        }
        
        /**
         *  @method fetchProveedores
         *  @description Esta funcion se encarga de obtener la lista de proveedores desde el servidor y mostrarlos en la tabla de forma ASYNC
         */
        async function fetchProveedores(){
            try {
                const response = await fetch(`<?= base_url('/proveedores/listar') ?>`);
                const data = await response.json();

                // Limpiar la tabla antes de agregar los nuevos datos
                tableProveedores.innerHTML = '';

                // Recorrer los proveedores y agregarlos a la tabla
                data.forEach(proveedor => {
                    tableProveedores.innerHTML += `
                        <td>${proveedor.razon_social}</td>
                        <td>${proveedor.direccion}</td>
                        <td>${proveedor.ruc}</td>
                        <td>${proveedor.telefono}</td>
                        <td>${proveedor.representante}</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    `;
                });    

            } catch (error) {
                console.error("Error al obtener los proveedores: ", error);
            }
        }


        //
        //      EVENTOS
        //
        formulario.addEventListener("submit", function(event){
            event.preventDefault() //Evitamos el envio del formulario

            if(!confirm("Desea Registrar proveedor?")){return;}
            postProveedor()

        });


        //
        //      LLAMADAS FUNCIONES 
        //
        fetchProveedores()
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?= $footer ?>