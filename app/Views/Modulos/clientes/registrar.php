<?= $header ?>
<div class="row">
    <div class="col-md-12">

        
        <h5>Registro de nuevos clientes</h5>

        
        <!-- FORMULARIO... -->
        <form action="<?= base_url('/clientes/guardar') ?>" method="post" id="form-clientes" autocomplete="off">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input class="form-control" type="text" id="apellidos" name="apellidos" required>
            </div>

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input class="form-control" type="text" id="nombres" name="nombres" required>
            </div>
            
            <div class="form-group">
                <label for="dni">DNI</label>
                <input class="form-control" type="text" id="dni" name="dni" required>
            </div>
                
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input class="form-control" type="text" id="telefono" name="telefono" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">Registrar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>
<?= $footer ?>