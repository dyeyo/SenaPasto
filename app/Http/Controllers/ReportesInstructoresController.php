<?php

namespace App\Http\Controllers;

use App\Imports\ReporteImport;
use App\ReporteInstructorHeader;
use function GuzzleHttp\Promise\all;
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

    public function store(Request $request, ReportesInstructores $reporteInstructores)
    {

        $data = [
            'ficha' => $request->get('ficha'),
            'nombrePrograma' => $request->get('nombrePrograma'),
            'centro' => $request->get('centro'),
            'horasTotalesProgramadas' => $request->get('horasTotalesProgramadas'),
            'horasTotalesEjecutadas' => $request->get('horasTotalesEjecutadas'),
            'horasTotalesPendientes' => $request->get('horasTotalesPendientes'),
            'fechaInicio' => $request->get('fechaInicio'),
            'fechaFin' => $request->get('fechaFin'),
        ];

        $reporteHeader = reporteInstructorHeader::create($data);


        $request->hasFile('excel');
        $archivo = $request->file('excel');
        Excel::import(new ReporteImport, $archivo);


        //$reporteInstructores->reporteInstructorHeader()->create($archivo);

        //dd($reporteHeader);

        return redirect()->route('reporteInstructores');
    }


}
