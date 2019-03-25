<?php

namespace App\Imports;

use App\JuiciosEvaluativos;
use Maatwebsite\Excel\Concerns\ToModel;


class JuiciosImport
{
    public function model(array $row)
    {
        return new JuiciosEvaluativos([
            'TipoDocumento'     => $row[0],
            'NumeroDocumento'    => $row[1],
            'nombres'    => $row[2],
            'apellidos'    => $row[3],
            'estado'    => $row[4],
            'competencia'    => $row[5],
            'resultadoAprendizaje'    => $row[6],
            'juicioEvaluacion'    => $row[7],
            'funcionarioRegistroJuicioEvaluativo'    => $row[8],
        ]);
    }
}