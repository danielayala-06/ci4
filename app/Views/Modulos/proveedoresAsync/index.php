<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Gestion de Proveedores</h5>
    </div>
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




<script>
    // Referenciamos la tabla donde se mostraran los proveedores
    const tableProveedores = document.querySelector("#table-proveedores");
    
    document.addEventListener('DOMContentLoaded', function() {
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

        fetchProveedores()
    });
</script>

</div>
<?= $footer ?>