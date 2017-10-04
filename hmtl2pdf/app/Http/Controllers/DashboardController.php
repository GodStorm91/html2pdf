<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function viewAsPdf(){
		$pdf = app()->make('dompdf.wrapper');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
	}

	public function createPdf(){
		//firstly user should see the create pdf page
	}
}
