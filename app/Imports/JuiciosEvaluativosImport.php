<?php

namespace App\Imports;

use App\JuiciosEvaluativosHeader;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class JuiciosEvaluativosImport implements ToCollection
{

    public function __construct(JuiciosEvaluativosHeader $reporteHeader)
    {
        $this->juicioEvaluativo = $reporteHeader;
    }

    public function collection(Collection $rows)
    {
        $juicioEvaluativo =  $this->juicioEvaluativo;

        $rows->each(function ($row) use ($juicioEvaluativo) {
            $juicioEvaluativo->reportesJuiciosEvaluativos()->create([
                'TipoDocumento'=> $row[0],
                'NumeroDocumento'=> $row[1],
                'nombres'=> $row[2],
                'apellidos'=> $row[3],
                'estado'=> $row[4],
                'competencia'=> $row[5],
                'resultadoAprendizaje'=> $row[6],
                'juicioEvaluacion'=> $row[7],
                'funcionarioRegistroJuicioEvaluativo'=>$row[8],
            ]);
        });
    }
}
