<?= $header ?>
<div class="row">
    <div class="col-md-12">
        <h1>Personaliza reporte vehiculos</h1>   
        
        <form action="" id="form-report" autocomplete="off">
            <div class="form-group input-group">
                <select name="" id="marcas" class="form-control" required>
                    <option value="">Seleccione</option>
                    <!-- Opciones cargadas de manera asincrona -->
                </select>
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Generar reporte</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        const listaMarcas = document.querySelector("#marcas");
        const formulario = document.querySelector("#form-report")

        async function mostrarReporte(){
            // Algoritmo
        }
        
        formulario.addEventListener("submit", function(e){
            e.preventDefault();
        });

        // Fetch marcas
        async function obtenerMarcas(){
            try{
                const response = await fetch(`<?=base_url('marcas/listar')?>`)
                const data = await response.json()

                //
                if(response.status != 200){return;}
                if(!data){return;}

                data.forEach(marca =>{
                    const tagOption = document.createElement("option")
                    tagOption.value = marca.id
                    tagOption.innerText = marca.marca
                    listaMarcas.appendChild(tagOption)
                });
            }catch(err){
                console.error(err)
            }
        }

        obtenerMarcas();
    })
</script>
<?= $footer ?>