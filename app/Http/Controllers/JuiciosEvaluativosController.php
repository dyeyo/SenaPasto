<?php

namespace App\Http\Controllers;


use App\Imports\JuiciosEvaluativosImport;
use App\JuiciosEvaluativos;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\juiciosEvaluativosHeader;

class JuiciosEvaluativosController extends Controller
{
    public function index()
    {
        return view('JuiciosEvaluativos.index');
    }


    public function getdataJuicio(){

        $juicioEvaluativo = JuiciosEvaluativos::select(
            'juicios_evaluativos.NumeroDocumento', 'juicios_evaluativos.nombres',
            'juicios_evaluativos.apellidos', 'juicios_evaluativos.estado',
            'juicios_evaluativos.competencia', 'juicios_evaluativos.resultadoAprendizaje',
            'juicios_evaluativos.funcionarioRegistroJuicioEvaluativo',
            'juicios_evaluativos.juicioEvaluacion',
            'juicios_evaluativos_headers.fechaReporte', 'juicios_evaluativos_headers.fichaCaracterizacion',
            'juicios_evaluativos_headers.codigo', 'juicios_evaluativos_headers.estadoFicha',
            'juicios_evaluativos_headers.fechaInicio', 'juicios_evaluativos_headers.fechaFin',
            'juicios_evaluativos_headers.centroFormacion',
            'juicios_evaluativos_headers.modalidadFormacion')
            ->join('juicios_evaluativos_headers', 'juicios_evaluativos.juicios_evaluativos_header_id', '=', 'juicios_evaluativos_headers.id')
            ->get();

        return response()->json($juicioEvaluativo);
    }

    public function create(){
        return view('juiciosEvaluativos.create');
    }


    public function store(Request $request, JuiciosEvaluativos $juiciosEvaluativos)
    {

        $data = [
            'fechaReporte'=> $request->get('fechaReporte'),
            'fichaCaracterizacion'=> $request->get('fichaCaracterizacion'),
            'codigo'=> $request->get('codigo'),
            'version'=> $request->get('version'),
            'denominacion'=> $request->get('denominacion'),
            'fechaInicio'=> $request->get('fechaInicio'),
            'fechaFin'=> $request->get('fechaFin'),
            'modalidadFormacion'=> $request->get('modalidadFormacion'),
            'regional'=> $request->get('regional'),
            'estadoFicha'=> $request->get('estadoFicha'),
            'centroFormacion'=> $request->get('centroFormacion'),
        ];


        $juiciosHeader = juiciosEvaluativosHeader::create($data);

        $request->hasFile('excel');
        $archivo = $request->file('excel');
        $import = new JuiciosEvaluativosImport($juiciosHeader);

        Excel::import($import, $archivo);


        //$reporteInstructores->reporteInstructorHeader()->create($archivo);

        //dd($juiciosHeader);

        return redirect()->route('juiciosEvaluativos');
    }
}
