<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/third_party/PhpSpreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelController extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('excelmodel');
  }
  function index() {
    $this->load->view('excel/index');
  }
  function Save() {
    $archivo = $_FILES['archivo']['tmp_name'];
    $reader = IOFactory::createReaderForFile($archivo);
    $spreadsheet = $reader->load($archivo);
    $worksheet = $spreadsheet->getActiveSheet();
    $filas = $worksheet->toArray(null, true, true, true);
    $data = array();
    foreach ($filas as $fila) {
      if ($fila['A'] != 'Code') {
        $data[] = array(
          'Code' => $fila['A'],
          'Description' => $fila['B'],
          'SectionId' => $fila['C'],
          'BrandId' => $fila['D'],
          'LineId' => $fila['E'],
          'SerieId' => $fila['F'],
          'StatusId' => $fila['G'],
          'Stock' => $fila['H'],
          'Price' => $fila['I'],
          'CurrencyID' => $fila['J']
        );
      }
    }
    $this->excelmodel->save_products($data);
    redirect(base_url('excelcontroller'));
  }
  		
		/*public  function getCategory(){
			return $this->db-Category();
		}

		public function	getCurrency(){
				return $this->db-Currency();
		}


		public importExcel(){

		var catalogCategory = getCategory();
		var catalogCurrency = getCurrency();
		var excelDocument = Libreria.LeerExcel();
		//este es un array el excel tendrá registros con las descripciones. 
		//lo que haríamos es 
		foreach ($excelDocument as $item) {
			$item->CategoryId = array_search('Description', $catalogCategory);
			$item->CurrencyId = array_search('Description', $catalogCurrency);

			
		}
	}*/


 /*function Save() {
    $archivo = $_FILES['archivo']['tmp_name'];
    $reader = IOFactory::createReaderForFile($archivo);
    $spreadsheet = $reader->load($archivo);
    $worksheet = $spreadsheet->getActiveSheet();
    $filas = $worksheet->toArray(null, true, true, true);
    $data = array();
    foreach ($filas as $fila) {
      if ($fila['A'] != 'nombre') {
        $data[] = array(
          'nombre' => $fila['A'],
          'edad' => $fila['B'],
          'email' => $fila['C']
        );
      }
    }
    $this->excelmodel->save_products($data);
    redirect(base_url('excelcontroller'));
  }*/
  
}
?>