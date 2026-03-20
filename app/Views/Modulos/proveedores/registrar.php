<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h5>Registro de proveedores</h5>

        
        <!-- FORMULARIO... -->
        <form action="<?= base_url('/proveedores/guardar') ?>" method="post" id="form-proveedores" autocomplete="off">
            <div class="form-group">
                <label for="razon_social">Razon Social</label>
                <input class="form-control" type="text" id="razon_social" name="razon_social" required maxlength="100" minlength="5">
            </div>

            <div class="form-group">
                <label for="direccion">direccion</label>
                <input class="form-control" type="text" id="direccion" name="direccion" required>
            </div>
            
            <div class="form-group">
                <label for="ruc">RUC</label>
                <input class="form-control" type="text" id="ruc" name="ruc" required maxlength="11" minlength="11">
            </div>
                
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input class="form-control" type="text" id="telefono" name="telefono" required maxlength="9" minlength="9">
            </div>
            
            <div class="form-group">
                <label for="representante">Representante</label>
                <input class="form-control" type="text" id="representante" name="representante" required maxlength="50" minlength="12">
            </div>

            <button type="submit" class="btn btn-outline-primary">Registrar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>
<?= $footer ?>
