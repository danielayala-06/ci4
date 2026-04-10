<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes vehiculos</title>
</head>
<body>
    <style>
        /* Solo funciona "px" en HTML2DPF */
        table{
            width: 100%;
            color: #F1f1f1f1;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th{
            background-color: #F1f1f1f1;
            color: white;
            padding: 8px;
            text-align: center;
        }
        td{
            border: 1px solid gray;
            padding: 6px;
        }
        tr:nth-child(even){
            background-color: #F1f1f1f1;
        }
    </style>

    <h1>Reporte general de vehiculos</h1>

    <table>
        <thead>
            <tr>
                <th style="width: 10%">#</th>
                <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 20%">Año</th>
                <th style="width: 15%">Color</th>
                <th style="width: 15%">Precio</th>
            </tr>
        </thead>
        <tbody>
            <!-- Datos dinamicos -->
             <?php foreach ($vehiculos as $vehiculo): ?>
                <tr>
                    <td><?= esc($vehiculo['id']) ?></td>
                    <td><?= esc($vehiculo['marca']) ?></td>
                    <td><?= esc($vehiculo['modelo']) ?></td>
                    <td><?= esc($vehiculo['anio']) ?></td>
                    <td><?= esc($vehiculo['color']) ?></td>
                    <td><?= esc($vehiculo['precio']) ?></td>
                </tr>
             <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>