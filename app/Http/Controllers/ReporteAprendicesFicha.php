<?php

namespace App\Http\Controllers;

use App\Imports\JuiciosEvaluativosImport;
use App\ReporteAprendicesFichas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ReporteAprendicesFicha extends Controller
{
    public function index()
    {
        $juiciosEvaluativos= ReporteAprendicesFichas::all();
        return view('ReportesAprendicesFicha.index', compact('juiciosEvaluativos'));
    }

    public function create(){
        return view('ReportesAprendicesFicha.create');
    }

    public function store(Request $request, ReporteAprendicesFichas $reporteAprendicesFichas)
    {

       /* $data = [
            'fichaCaracterizacion'=> $request->get('fichaCaracterizacion'),
            'estado'=> $request->get('estado'),
            'fechaReporte'=> $request->get('fechaReporte'),
        ];


        $reporteAprendicesHeader = ReporteAprendicesFichasHeader::create($data);*/

//        $request->hasFile('excel');
//        $archivo = $request->file('excel');
        //$import = new AprendicesFichasImport($reporteAprendicesHeader);
        $request->hasFile('excel');
        $archivo=$request->file('excel');
        Excel::import(new JuiciosEvaluativosImport, $archivo);


        //$reporteInstructores->reporteInstructorHeader()->create($archivo);


        return redirect()->route('ReporteAprendicesFicha');
    }
}
