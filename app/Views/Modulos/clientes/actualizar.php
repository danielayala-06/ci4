<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Actualizar datos de Clientes</h5>
        
        <!-- FORMULARIO... -->
         
        <form action="<?= base_url('/clientes/actualizar/') ?><?= $registro['id'] ?>" method="post" id="form-clientes" autocomplete="off">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input class="form-control" type="text" id="apellidos" name="apellidos" required maxlength="50" value="<?= $registro['apellidos'] ?>">
            </div>

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input class="form-control" type="text" id="nombres" name="nombres" required maxlength="50" value="<?= $registro['nombres'] ?>">
            </div>
            
            <div class="form-group">
                <label for="dni">DNI</label>
                <input class="form-control" type="text" id="dni" name="dni" required maxlength="8" minlength="8" value="<?= $registro['dni'] ?>">
            </div>
                
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input class="form-control" type="text" id="telefono" name="telefono" required minlength="9" maxlength="9" value="<?= $registro['telefono'] ?>">
            </div>
            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const formulario = document.querySelector("#form-clientes")

        formulario.addEventListener("submit", function(event){
            event.preventDefault()//STOP

            //
            if(!confirm("¿Desea registrar ese cliente?")){return;}

            formulario.submit();
        })
    });
</script>

<?= $footer ?>
