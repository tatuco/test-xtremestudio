<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 18/09/18
 * Time: 03:45 PM
 */

namespace App\Core;

use Carbon\Carbon;
use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use Font_Metrics;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportService
{
    private static $data;
    private static $index;
    private static $title;

    public static function report($request, $html, $data)
    {

        $data = self::getContent($request, $data);

        if(isset($_GET['format']))
        {
            switch ($_GET['format'])
            {
                case 'pdf':
                    $html = self::getHtml($html, $data);
                    return self::pdf($html);
                    break;
                case 'xls':
                    self::$index = $data['headers'];
                    self::$data = $data['data'];
                    self::$title = $data['title'];
                    return self::excel(self::$title);
                    break;
            }
        }else
            return $data;
    }

    public static function pdf($html)
    {
        //$html = self::getHtml($html);
        $options = new Options();
        $options->set('defaultFont', 'Ariel');
        $pdf = new DOMPDF($options);

        $pdf->set_paper("A4", "portrait");
        $pdf->load_html(utf8_decode($html));
        $pdf->render();
        /**
         * imprime la paginacion
         */
        $canvas = $pdf->get_canvas();
        $footer = $canvas->open_object();
        $w = $canvas->get_width();
        $h = $canvas->get_height();
        $canvas->page_text($w-60,$h-28,"Página {PAGE_NUM} de {PAGE_COUNT}", $pdf->getFontMetrics()->get_font("helvetica", "bold"),6);
        $canvas->page_text($w-590,$h-28,"",$pdf->getFontMetrics()->get_font("helvetica", "bold"),6);

        $canvas->close_object();
        $canvas->add_object($footer,"all");
       /* $font = $pdf->getFontMetrics()->get_font("helvetica", "bold");
        $pdf->getCanvas()->page_text(72, 18, "Pagina: {PAGE_NUM} de {PAGE_COUNT}", $font, 10, array(0,0,0));*/
        $pdf->stream(self::$title.".pdf", array('Attachment'=>0));

        return $pdf;
    }

    public static function getHtml($html, $content = null)
    {

        View::set("data", json_decode(json_encode($content)));
        return View::render($html);
    }

    public static function getStyles()
    {
        echo "<style>
        @page { margin: 180px 50px; }
        #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color: lightblue; }
        #footer .page:after { content: counter(page, upper-roman); }
        #table {text-align: center;}
        #logo {width: 10%; height: 40%; float: left; margin-top: 3%;}
        table {
            border-collapse: collapse;
            width: 100%;
            }
            
            table, td, th {
                border: 1px solid black;
            }
            .header { background-color: #36B360; color: white; }
            .subgroup { background-color: #808080; color: white; }
            .subgroup2 { background-color: #C0C0C0; color: white; }
              </style>";

    }


    public static function getIcon()
    {
       $url = storage_path('images-club/login.png');
       return $url;
    }

    public static function dateFormat($date, $format)
    {
        $date = new DateTime($date);
       return $date->format($format);
    }

    public static function testXls()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
    }


    private static function getDefaultConfiguration($spreadsheet,$name,$pathLogo=null,$columStart="A",$rowStart='1'){

        $alphabet = range('A', 'Z');
        $totalColumns = count(self::$index) -1 ;
        $totalRows = count(self::$data) +2;

        for ($i="A";$i<"Z";$i++){
            $spreadsheet->getActiveSheet()->getColumnDimension($i)->setAutoSize(true);

        }

        $spreadsheet->getActiveSheet()->setCellValue($columStart.$rowStart, self::$title);
        $spreadsheet->getActiveSheet()->mergeCells($columStart.$rowStart.':'.$alphabet[$totalColumns] . '5');
        $spreadsheet->getActiveSheet()->getStyle($columStart.$rowStart)->getFont()->setSize(16);
        $spreadsheet->getActiveSheet()->getStyle($columStart.$rowStart)->getAlignment()
            ->applyFromArray([
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER
            ]);

        $spreadsheet->getActiveSheet()->getStyle($columStart.$totalRows.':' . $alphabet[$totalColumns] . $totalRows)
            ->applyFromArray([
                'borders' => [
                    'outline' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => 'FF000000'],
                    ],
                ],
            ]);
        $spreadsheet->getActiveSheet()->getStyle($columStart.$rowStart.':'.$alphabet[$totalColumns].'1')->getFill()->setFillType(Fill::FILL_SOLID);
        #$spreadsheet->getActiveSheet()->getStyle('A1:'.$alphabet[$totalColumns].'1')->getFill()->getStartColor()->setARGB('4CAF50');
        $spreadsheet->getActiveSheet()->getStyle('A1:'.$alphabet[$totalColumns].'1')->getFont()->getColor()->setARGB('00000000');

        if ($pathLogo){
            $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
            $drawing->setName('Logo');
            $drawing->setDescription('Logo');
            $drawing->setPath($pathLogo);
            $drawing->setHeight(30);
            $drawing->setWidth(100);
            $drawing->setCoordinates('F1');
            $drawing->setWorksheet($spreadsheet->getActiveSheet());
        }



        return $spreadsheet;
    }

    public static function setData($info){
        self::$data = $info;
    }
    public static function setIndex($array_index){
        self::$index = $array_index;
    }

    public static function excel($name = '',string $fi = null,string $ff=null){
        $spreadsheet = new Spreadsheet();
        $pathLogo = self::getIcon();//rtrim(app()->basePath('public/imagen/zipi.png'), '/');
        $sheet = self::getDefaultConfiguration($spreadsheet,$name,$pathLogo);

        if ($fi==1){
            $dt = Carbon::now();
            $ff = date('d-m-Y', strtotime('next monday'));
            $fi = $dt->isMonday() ? date('d-m-Y') : date('d-m-Y', strtotime("last Monday"));
        }
        //Parsear la información a pasar
        $arrayData[] = self::$index;
        foreach (self::$data as $key){
            $i=1;
            $toArray = json_decode($key);
            foreach ($toArray as $value){
                $toExcel[$i] = $value;
                $i++;
            }
            $arrayData[] = $toExcel;
        }
        $sheet->getActiveSheet()->fromArray($arrayData, "Sin Registro", 'A7');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$name.'.xlsx"');
        $writer->save("php://output");

    }

    public static function getContent($request, $query)
    {
        if($_GET['format'] == 'pdf')
            return $query['data'];
        else
            return $query;
    }

    public static function setDay($day)
    {
        switch ($day)
        {
            case '0':
                return "Domingo";
                break;
            case '1':
                return "Lunes";
                break;
            case '2':
                return "Martes";
                break;
            case '3':
                return "Miercoles";
                break;
            case '4':
                return "Jueves";
                break;
            case '5':
                return "Viernes";
                break;
            case '6':
                return "Sabado";
                break;
        }
    }
}