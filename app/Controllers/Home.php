<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('pdf_view');
	}

	function htmlToPDF(){
		$dompdf = new \Dompdf\Dompdf(); 
		$dompdf->loadHtml(view('pdf_view'));
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream();
}

	//--------------------------------------------------------------------

}
