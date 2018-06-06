<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

/**
 * Class PdfController
 * @package App\Http\Controllers
 */
class PdfController extends Controller
{
    /**
     *  View Page For Download to PDF
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = ['name' => 'John Doe'];
        return view('terms', compact('data'));
    }

    /**
     *  Download(Export) Route
     * @return mixed
     */
    public function export()
    {
        $data = ['name' => 'John Doe'];
        $pdf = PDF::loadView('terms', compact('data'));
//        change Style Paper
        return $pdf->setPaper('a4', 'landscape')->stream('invoice.pdf');

        //        Make Our Page Load Stream
//        return $pdf->stream('invoice.pdf');

//        Download Page
//        return $pdf->download('invoice.pdf');
    }
}
