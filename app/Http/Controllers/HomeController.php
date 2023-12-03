<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    /* ESTE CONTROLADOR ES DE PRUEBA. POR LO GENERAL LO BORRAS Y LO LLAMAS MAINCONTROLLER O ALGO ASÍ */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function pdf()
    {
        $data = [
            'title' => 'Título de prueba',
            'text' => 'Texto de prueba',
        ];

        $pdf = Pdf::loadView('pdfs.basic', $data);

        return $pdf->download('Descarga.pdf', ['Content-Disposition' => 'inline']); // Si quieres que se vea en pantalla, cambia "download por stream"
    }
}
