<?php

namespace App\Controllers\PDF;

use App\Models\Contrato;
use Dompdf\Dompdf;

class ContratosFuturosController
{

    public function index($contratoId)
    {
        $contrato = Contrato::find(["futuro", $contratoId]);

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        header('Content-type: text/html; charset=UTF-8');
        ob_start();

        include_once "app/views/ContratosFuturos.php";

        $html = ob_get_contents();

        ob_end_clean();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("codexworld", array("Attachment" => 0));
    }
}
