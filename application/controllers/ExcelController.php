<?php
require_once APPPATH.'/third_party/PhpSpreadsheet/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelController extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('excelmodel');
  }
    public function index() {
      $this->load->view('excel/index');
    }

    public function guardar() {
        
        $archivo = $_FILES['archivo']['tmp_name'];
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($archivo);
        $worksheet = $spreadsheet->getActiveSheet();

        
        foreach ($worksheet->getRowIterator() as $fila) {
            $celdas = $fila->getCellIterator();
            $celdas->setIterateOnlyExistingCells(FALSE);

            $datos = array();
            foreach ($celdas as $celda) {
                $datos[] = $celda->getValue();
            }

            $data = array(
                'Code' => $datos[0],
                'Description' => $datos[1],
                'SectionId' => $datos[2],
                'BrandId' => $datos[3],
                'LineId' => $datos[4],
                'SerieId' => $datos[5],
                'StatusId' => $datos[6],
                'Stock' => $datos[7],
                'Price' => $datos[8],
                'CurrencyID' => $datos[9]
            );
            $producto_id = $this->excelmodel->insertar_producto($data);
        }
        echo 'Los datos se han guardado correctamente';
    }
}
?>