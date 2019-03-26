<?php

namespace App\Http\Controllers;


use App\JuiciosEvaluativos;
use App\Imports\JuiciosEvaluativosImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JuiciosEvaluativosController extends Controller
{
    public function index()
    {
        $reporteJuicios = JuiciosEvaluativos::all();
        return view('JuiciosEvaluativos.index', compact('reporteJuicios'));
    }

    public function create(){
        return view('JuiciosEvaluativos.create');
    }

    public function importar(Request $request)
    {
        $request->hasFile('excel');
        $archivo=$request->file('excel');
        Excel::import(new JuiciosEvaluativosImport, $archivo);

        return redirect()->route('juicios');
    }
}
