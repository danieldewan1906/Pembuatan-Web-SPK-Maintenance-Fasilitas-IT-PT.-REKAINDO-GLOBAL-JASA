<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

require_once('assets/dompdf/autoload.inc.php');
class Mypdf
{
	protected $ci;

	public function __construct(){
		$this->ci =& get_instance();
	}

	public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'portrait'){
		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$dompdf = new Dompdf($options);

		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);

		$dompdf->render();
		$dompdf->stream($filename . ".pdf", array("Attachment" => false));
	}
}