<?php

namespace App\Imports;

use App\ReporteAprendicesFichas;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AprendicesFichasImport implements ToCollection
{

    public function __construct(ReporteAprendicesFichas $reporteAprendicesFichas)
    {
        $this->aprendicesFichas = $reporteAprendicesFichas;
    }

    public function collection(Collection $rows)
    {
        $aprendicesFichas =  $this->aprendicesFichas;

        $rows->each(function ($row) use ($aprendicesFichas) {
            $aprendicesFichas->reporteAprendicesFicha()->create([
                'ficha'=>$row[0],
                'TipoDocumento'=> $row[1],
                'NumeroDocumento'=> $row[2],
                'nombres'=> $row[3],
                'apellidos'=> $row[4],
                'celular'=> $row[5],
                'correo'=> $row[6],
                'estado'=> $row[7],
            ]);
        });
    }
}
