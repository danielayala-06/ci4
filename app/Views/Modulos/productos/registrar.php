<?= $header ?>
<div class="row">
    <div class="col-md-12">

        
        <h5>Registro de nuevo producto</h5>

        
        <!-- FORMULARIO... -->
        <form action="<?= base_url('/productos/guardar') ?>" method="post" id="form-productos" autocomplete="off">
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input class="form-control" type="text" id="tipo" name="tipo" required maxlength="30">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" required maxlength="100">
            </div>
            
            <div class="form-group">
                <label for="precio">Precio</label>
                <input class="form-control" type="decimal" id="precio" name="precio" required max="9999.99" step="0.01">
            </div>
                
            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" id="stock" name="stock" required minlength="9" maxlength="9">
            </div>
            <button type="submit" class="btn btn-outline-primary">Registrar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const formulario = document.querySelector("#form-productos")

        formulario.addEventListener("submit", function(event){
            event.preventDefault()//STOP

            //
            if(!confirm("¿Desea registrar el producto?")){return;}

            formulario.submit();
        })
    });
</script>

<?= $footer ?>
