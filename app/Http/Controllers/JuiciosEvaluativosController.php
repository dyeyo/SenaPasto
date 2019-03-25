<?php

namespace App\Http\Controllers;

use App\JuiciosEvaluativos;
use Illuminate\Http\Request;
use App\Imports\JuiciosImport;
use Maatwebsite\Excel\Facades\Excel;

class JuiciosEvaluativosController extends Controller
{
    public function index()
    {
        $juicioEvaluativo = JuiciosEvaluativos::all();
        return view('JuiciosEvaluativos.index', compact('juicioEvaluativo'));
    }

    public function importar(Request $request)
    {
        $request->hasFile('excel');
        $archivo=$request->file('excel');
        Excel::import(new JuiciosImport, $archivo);

        return view('JuiciosEvaluativos.index')->with('success', 'All good!');
    }
}
