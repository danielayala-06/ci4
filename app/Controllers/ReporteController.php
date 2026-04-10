<?php

namespace App\Controllers; // es una forma de decir donde estoy? o donde estara este controlador

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VehiculoModel;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;

use function PHPUnit\Framework\throwException;

class ReporteController extends BaseController
{
    public function makeVehiculeReport()
    {
        //1. Obteniendo los datos
        $vehiculeModel = new VehiculoModel();
        $listaVehiculos = $vehiculeModel->obtenerVehiculos();

        //2. Enviar los datos a la plantilla (contenedor) views/
        $html = view('Reports/vehiculos-todos', ['vehiculos'=> $listaVehiculos]);

        // 3. Generar el pdf
        try {
            // 4. Objeto HTML2PDF = P = portrait, L = Landscape
            $html2pdf = new Html2Pdf('P','A4', 'es');

            // 5. Estableciendo fuente predeterminada(opcional)
            $html2pdf->setDefaultFont('Arial');

            // 6. Renderizar los datos
            $html2pdf->writeHTML($html);

            // 7. Mostrar el PDF
            // I = Vista previa, D = Descargar, F = guardar servidor, S = retornar como cadena
            $html2pdf->output('Reporte.pdf', 'I');
            
            // Forma A - "Especificar cabeceras de binario"
            $this->response->setContentType('application/pdf');
            // Forma B
            //exit();

        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            throw new \Exception($e->getMessage());
        }
    }
}
