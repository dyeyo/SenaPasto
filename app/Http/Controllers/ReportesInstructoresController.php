<?php

namespace App\Http\Controllers;

use App\Imports\ReporteImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\ReportesInstructores;
use App\ReporteInstructorHeader;



class ReportesInstructoresController extends Controller
{
    public function index()
    {
        return view('reportesInstructores.index');
    }

    public function getdata(){
        //$reporteInstructor = ReportesInstructores::all();
        $reporteInstructor = ReportesInstructores::select(
            'reportes_instructores.NombreInstructor', 'reportes_instructores.ApellidoInstructor',
            'reportes_instructores.EstadoInstructor', 'reportes_instructores.Competencia',
            'reportes_instructores.FechaInicioProgramacion', 'reportes_instructores.FechaFinProgramacion',
            'reportes_instructores.HorasProgramadas', 'reportes_instructores.FechaFinProgramacion',
            'reporte_instructor_headers.ficha', 'reporte_instructor_headers.nombrePrograma',
            'reporte_instructor_headers.horasTotalesProgramadas', 'reporte_instructor_headers.horasTotalesEjecutadas',
            'reporte_instructor_headers.horasTotalesPendientes', 'reporte_instructor_headers.fechaInicio',
            'reporte_instructor_headers.fechaFin')
            ->join('reporte_instructor_headers', 'reportes_instructores.reporte_instructor_header_id', '=', 'reporte_instructor_headers.id')
             ->get();
        return response()->json($reporteInstructor);
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
            'municipio' => $request->get('municipio'),
            'horasTotalesProgramadas' => $request->get('horasTotalesProgramadas'),
            'horasTotalesEjecutadas' => $request->get('horasTotalesEjecutadas'),
            'horasTotalesPendientes' => $request->get('horasTotalesPendientes'),
            'fechaInicio' => $request->get('fechaInicio'),
            'fechaFin' => $request->get('fechaFin'),
        ];

        $reporteHeader = reporteInstructorHeader::create($data);

        $request->hasFile('excel');
        $archivo = $request->file('excel');
        $import = new ReporteImport($reporteHeader);

        Excel::import($import, $archivo);


        //$reporteInstructores->reporteInstructorHeader()->create($archivo);

        //dd($reporteHeader);

        return redirect()->route('reporteInstructores');
    }


}
