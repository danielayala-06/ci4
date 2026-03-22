<?= $header ?>
 <div class="row">
    <div class="col-md-12">
        <h5>Actulaizar Proveedor</h5>

        
        <!-- FORMULARIO... -->
        <form action="<?= base_url('/proveedores/actualizar/') ?><?= $registro['id'] ?>" method="post" id="form-proveedores" autocomplete="off">
            <div class="form-group">
                <label for="razon_social">Razon Social</label>
                <input class="form-control" type="text" id="razon_social" name="razon_social" required maxlength="100" minlength="5" value="<?= $registro['razon_social'] ?>">
            </div>

            <div class="form-group">
                <label for="direccion">direccion</label>
                <input class="form-control" type="text" id="direccion" name="direccion" required value="<?= $registro['direccion'] ?>">
            </div>
            
            <div class="form-group">
                <label for="ruc">RUC</label>
                <input class="form-control" type="text" id="ruc" name="ruc" required maxlength="11" minlength="11" value="<?= $registro['ruc'] ?>">
            </div>
                
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input class="form-control" type="text" id="telefono" name="telefono" required maxlength="9" minlength="9" value="<?= $registro['telefono'] ?>">
            </div>
            
            <div class="form-group">
                <label for="representante">Representante</label>
                <input class="form-control" type="text" id="representante" name="representante" required maxlength="50" minlength="12" value="<?= $registro['representante'] ?>">
            </div>

            <button type="submit" class="btn btn-outline-primary">Registrar</button>
            <button type="reset" class="btn  btn-outline-secondary">Cancelar</button>

        </form>
    </div>
</div>
    
<?= $footer ?>