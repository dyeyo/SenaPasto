<?php

namespace App\Imports;


use App\ReporteInstructorHeader;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class ReporteImport implements ToCollection
{
    public function __construct(ReporteInstructorHeader $reporteHeader)
    {
        $this->reportInstructor = $reporteHeader;
    }

    public function collection(Collection $rows)
    {
        $reportInstructor =  $this->reportInstructor;

        $rows->each(function ($row) use ($reportInstructor) {
            $reportInstructor->reportesInstructores()->create([
                'NombreInstructor' => $row[0],
                'ApellidoInstructor' => $row[1],
                'EstadoInstructor' => $row[2],
                'Competencia' => $row[3],
                'FechaInicioProgramacion' => $row[4],
                'FechaFinProgramacion' => $row[5],
                'HorasProgramadas' => $row[6],
            ]);
        });
    }
}