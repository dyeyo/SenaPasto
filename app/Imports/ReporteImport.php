<?php

namespace App\Imports;

use App\ReportesInstructores;
use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;

class ReporteImport impToModel
{

    public function model(array $row)
    {
        return new ReportesInstructores([
            'NombreInstructor' => $row[0],
            'ApellidoInstructor' => $row[1],
            'EstadoInstructor' => $row[2],
            'Competencia' => $row[3],
            'FechaInicioProgramacion' => $row[4],
            'FechaFinProgramacion' => $row[5],
            'HorasProgramadas' => $row[6],
            'codigoFicha' => $row[6],
        ]);
    }
}