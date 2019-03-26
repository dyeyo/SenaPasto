<?php

namespace App\Imports;

use App\ReportesInstructores;
use Illuminate\Foundation\Http\FormRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

//use Maatwebsite\Excel\Concerns\ToModel;

class ReporteImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        //$reporteInstructores=new ReportesInstructores;
        foreach ($rows as $row)
        {
             ReportesInstructores::create([
                'NombreInstructor' => $row[0],
                'ApellidoInstructor' => $row[1],
                'EstadoInstructor' => $row[2],
                'Competencia' => $row[3],
                'FechaInicioProgramacion' => $row[4],
                'FechaFinProgramacion' => $row[5],
                'HorasProgramadas' => $row[6],
            ]);
        }
    }
}