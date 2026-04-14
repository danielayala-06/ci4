<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Reporte de prueba</p>
    
    <page backtop="10mm" backbotton="10mm"> 
        <!-- Incio de la pagina -->
        <page_header>
            <div class="">Reporte de trabajadores</div>
            <div class="line"></div>
        </page_header>
        <page_footer>
            <div class="line"></div>
            <div class="">Pagina [[page_cu]]</div> 
        </page_footer>
        <!-- Contenido -->
         <img src="<?= $logo?>" alt="">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10%;" class="center">#</th>
                    <th style="width: 25%;" class="center">Apellidos</th>
                    <th style="width: 25%;" class="center">Nombres</th>
                    <th style="width: 15%;" class="center">Telefono</th>
                    <th style="width: 10%;" class="center">Genero</th>
                    <th style="width: 15%;" class="center">Sueldo</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data que usaremos para la grafica -->
                <?php 
                    $hombres = 0;
                    $mujeres = 0;
                    $id = 1;
                
                ?> 

                <?php $suma_sueldo = 0.00;?>
                <?php $sueldo_promedio = 0.00;?>

                <?php for($i = 0; $i <= 10 ; $i++): ?>
                    
                    <?php foreach($personas as $persona): ?>
                        <tr>
                            <td class="center"><?= $id ?></td>
                            <td><?= $persona['apellidos'] ?></td>
                            <td><?= $persona['nombres'] ?></td>
                            <td><?= $persona['telefono'] ?></td>
                            <td class="center"><?= $persona['genero'] ?></td>
                            <td class="end"><?= $persona['sueldo'] ?></td>
                        </tr>

                        <?php $id++; ?>
                        <!-- contamos a las personas por genero -->
                        <?php if($persona['genero'] == 'M'): $hombres++;?>
                        <?php else: $mujeres++;?>
                        <?php endif;?>

                        <!-- Sumamos los sueldos para obtener el promedio -->
                        <?php $suma_sueldo += $persona['sueldo'];?>
                        
                        
                    <?php endforeach;?>  
                        
                    
                <?php  endfor;?>

                <?php $total_personas = $id - 1;?>
                <?php $suma_sueldo += $persona['sueldo'];?>
                <?php $sueldo_promedio = $suma_sueldo/$id;?>

            </tbody>
        </table>
    </page> <!-- Fin de la pagina -->
        
    <page pageset="old">
      Reporte de trabajadores
      <h2 class="center">Resumen</h2>
      <table class="table">
        <thead>
            <tr>
                <th style="width: 50%;">Indicador</th>
                <th style="width: 50%;">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total</td>
                <td class="center"><?= $total_personas ?> </td>
            </tr>
            <tr>
                <td>Hombres</td>
                <td class="center">
                    <?= $hombres?>
                </td>
            </tr>
            <tr>
                <td>Mujeres</td>
                <td class="center">
                    <?= $mujeres?>
                </td>
            </tr>
            <tr>
                <td>Promedio Sueldo</td>
                <td class="center">
                    <?= $sueldo_promedio?>
                </td>
            </tr>


        </tbody>
      </table>
    </page>
    <page pageset="old">
        Contenido Pagina 3
    </page>
</body>
</html>