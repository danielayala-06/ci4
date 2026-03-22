<?= $header ?>
<div class="row">
    <div class="col-md-12">

        
        <h5>Actualizcion de nuevo Producto</h5>

        
        <!-- FORMULARIO... -->
        <form action="<?= base_url('/productos/actualizar/') ?><?= $producto['id'] ?>" method="post" id="form-productos" autocomplete="off">
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input class="form-control" type="text" id="tipo" name="tipo" required maxlength="30" value="<?= $producto['tipo'] ?>">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" required maxlength="100" value="<?= $producto['descripcion'] ?>">
            </div>
            
            <div class="form-group">
                <label for="precio">Precio</label>
                <input class="form-control" type="decimal" id="precio" name="precio" required max="9999.99" step="0.01" value="<?= $producto['precio'] ?>">
            </div>
                
            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" id="stock" name="stock" required minlength="9" maxlength="9" value="<?= $producto['stock'] ?>">
            </div>
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const formulario = document.querySelector("#form-productos")
        const descripcion = document.getElementById("descripcion")

        formulario.addEventListener("submit", function(event){
            event.preventDefault()//STOP

            //
            if(!confirm("¿Desea actulizar el producto " + descripcion.value + "?" )){return;}

            formulario.submit();
        })
    });
</script>

<?= $footer ?>
