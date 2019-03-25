<?php

namespace App\Http\Controllers;

use App\Imports\ReporteImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\ReportesInstructores;

class ReportesInstructoresController extends Controller
{
    public function index()
    {
        $reporteInstructor = ReportesInstructores::all();
        return view('reportesInstructores.index', compact('reporteInstructor'));
    }

    public function create(){
        return view('reportesInstructores.create');
    }

    public function importar(Request $request)
    {
        $request->hasFile('excel');
        $archivo=$request->file('excel');
        Excel::import(new ReporteImport, $archivo);

        return redirect()->route('reporteInstructores');
    }

}
